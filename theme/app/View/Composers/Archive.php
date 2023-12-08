<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use WP\Archive\UI;

class Archive extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'header-archive',
        'archive',
        'archive-*',
        'partials.nav-side'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => $this->title(),
            'thumbnail' => $this->thumbnail(),
            'categories' => $this->categories(),
            'pagination' => (new UI\Pagination())->render(),
        ];
    }


    public function title()
    {
        return get_the_archive_title();
    }

    public function thumbnail()
    {
        $thumbnailDom = '';
        // def 모바일 사이즈
        $data = get_field(get_post_type(), 'option');

        if (!empty($data['def'])) {
            $thumbnailDom = "<img class=\"md:hidden mx-auto\" src=\"{$data['def']}\" alt=\"\">";
        }
        if (!empty($data['md'])) {
            $thumbnailDom .= "<img class=\"hidden md:block mx-auto\" src=\"{$data['md']}\" alt=\"\">";
        }

        return $thumbnailDom;
    }

    private function sort_terms_hierarchically(array &$cats, array &$into, $parentId = 0)
    {
        foreach ($cats as $i => $cat) {
            $cat->link = '/'. get_post_type() . '/category/' . $cat->slug;
            if ($cat->parent == $parentId) {
                $into[$cat->term_id] = $cat;
                unset($cats[$i]);
            }
        }
    
        foreach ($into as $topCat) {
            $topCat->children = array();
            $this->sort_terms_hierarchically($cats, $topCat->children, $topCat->term_id);
        }
    }

    public function categories()
    {
        $terms = get_terms(array(
          "taxonomy" => get_post_type() .'_category',
          "hide_empty" => false,
        ));

        if (!empty($terms) && !is_wp_error( $terms )) {
          $termsHierarchy = array();
          $this->sort_terms_hierarchically($terms, $termsHierarchy);
          return $termsHierarchy;
        }
    }
}
