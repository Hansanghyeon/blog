<?php

namespace App\View\Composers;

use Carbon\Carbon;
use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header-page',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'thumbnail' => $this->thumbnail(),
            'isThumbnail' => $this->isThumbnail(),
            'permalink' => $this->permalink(),
            'excerpt' => $this->excerpt(),
            'categories' => $this->getTaxonomy('category'),
            'archive' => $this->get_menu(),
            'tags' => $this->getTaxonomy('tag'),
            'date' => $this->getDate(),
            'updateDate' => $this->getUpdateDate(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.header-page') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public function isThumbnail()
    {
        return !empty(get_the_post_thumbnail()) ? 'data-isthumb' : '';
    }

    public function thumbnail()
    {
        return !empty(get_the_post_thumbnail()) ? get_the_post_thumbnail() : '';
    }

    public function permalink()
    {
        return get_permalink();
    }

    public function excerpt()
    {
        return get_the_excerpt();
    }

    public static function setTerm($term, $termName = 'category')
    {
        $termId = get_post_type() . '_' . $termName . '_' . $term->term_id;
        $term->permalink = get_term_link($term, get_post_type() . '_' . $termName);
        if (!empty($icon_field_data = get_field('icon', $termId))) {
            $term->icon_url = $icon_field_data['url'];
            $term->icon_alt = $icon_field_data['alt'];
            $term->icon_is_cover = get_field('icon_full_cover', $termId);
        }
    }

    public static function getTaxonomy($termName = 'category', $setFilter = null)
    {
        if (get_post_type() === 'page') {
            return;
        }
        $terms = wp_get_post_terms(get_the_ID(), get_post_type() . '_' . $termName);

        if (is_wp_error($terms) || empty($terms)) return [];

        foreach ($terms as $term) {
            if (get_the_archive_title() === $term->name) {
                continue;
            }

            self::setTerm($term);

            if ($setFilter !== null) {
                $setFilter($term, $termName);
            }
        }

        return $terms;
    }

    public static function get_menu()
    {
        if (get_post_type() === 'page' || is_404()) {
            return;
        }
        $menu = wp_get_nav_menu_items(wp_get_nav_menu_object('main'));
        $menu = array_filter($menu, function ($k) {
            return $k->object == get_post_type();
        });
        if ($menu) {
            $menu = $menu[array_key_first($menu)];
            $menu->bg_color = 'background-color: ';
            $menu->bg_color .= !empty($color = get_field('label_color', $menu->ID)) ? $color : 'transparent';
            $menu->icon = !empty($icon = get_field('menu_icon', $menu->ID)) ? $icon : '';

            return $menu;
        }
    }

    public function getDate()
    {
        $date = get_post_time('c', true);
        $date = new Carbon($date, 'Asia/Seoul');
        return $date->format('Y년 m월 d일');
    }

    public function getUpdateDate()
    {
        $date = get_the_modified_date('c');
        $date = new Carbon($date, 'Asia/Seoul');
        return $date->format('Y년 m월 d일');
    }
}
