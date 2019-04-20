<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_tax('serie')) {
            return single_term_title();
        }
        if (is_archive('bio')) {
            if (ICL_LANGUAGE_CODE === 'es') {
                return 'Josep Navarro Vives: Biografia';
            }
            if (ICL_LANGUAGE_CODE === 'en') {
                return 'Josep Navarro Vives: biography';
            }
            if (ICL_LANGUAGE_CODE === 'ca') {
                return 'Josep Navarro Vives: Biografia';
            }
            
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
}
