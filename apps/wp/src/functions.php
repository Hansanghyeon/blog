<?php
/*
 *  Author: Hansanghyeon<(999@hyeon.pro>
 *  Custom functions, support, custom post types and more.
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
  wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

add_theme_support("post-thumbnails");

function remove_menus()
{
  remove_menu_page("index.php"); //Dashboard
  remove_menu_page("jetpack"); //Jetpack*
  remove_menu_page("edit-comments.php"); //Comments
}

add_action("admin_menu", "remove_menus");

function headless_disable_feed()
{
  wp_die(__('No feed available, please visit our <a href="' . get_bloginfo("url") . '">homepage</a>!'));
}

add_action("do_feed", "headless_disable_feed", 1);
add_action("do_feed_rdf", "headless_disable_feed", 1);
add_action("do_feed_rss", "headless_disable_feed", 1);
add_action("do_feed_rss2", "headless_disable_feed", 1);
add_action("do_feed_atom", "headless_disable_feed", 1);
add_action("do_feed_rss2_comments", "headless_disable_feed", 1);
add_action("do_feed_atom_comments", "headless_disable_feed", 1);

// Return `null` if an empty value is returned from ACF.
if (!function_exists("acf_nullify_empty")) {
  function acf_nullify_empty($value, $post_id, $field)
  {
    if (empty($value)) {
      return null;
    }
    return $value;
  }
}
add_filter("acf/format_value", "acf_nullify_empty", 100, 3);

add_filter('preview_post_link', function () {
  return get_site_url() . '/preview/';
});

add_action( 'graphql_register_types', function() {
  register_graphql_field( 'ContentNode', 'blocks', [
    'type' => 'String',
    'description' => __( 'Link to edit the content', 'your-textdomain' ),
    'resolve' => function( \WPGraphQL\Model\Post $post, $args, $context, $info ) {
      $wPost = get_post($post->ID, null, 'raw');
      return $wPost->post_content;
    }
  ]);
} );

