<?php

/**
 * Pagination (sayfalama) fonksiyonları.
 * 
 * WordPress için sayfalama işlemlerini yerine getirmek için oluşturulmuş fonksiyonlar demetidir.
 *
 * @package     WordPress
 * @subpackage  wpkral
 * @author      Emre Can OZTAS <me@emrecanoztas.com>
 * @version     1.0
 */

if (!function_exists('create_wp_pagination')) {
    /**
     * Basit sayfalama fonksiyonu.
     * 
     * Wordpress için pagination (sayfalama) işlemini gerçekleştiren fonksiyon.
     * 
     * @example create_wp_pagination();
     */
    function create_wp_pagination()
    {
        global $wp_query;

        $total_page = $wp_query->max_num_pages;
        $end_number = 99999999;
        $args = array(
            'base'               => str_replace($end_number, '%#%', esc_url(get_pagenum_link($end_number))),
            'format'             => '?page=%#%',
            'total'              => $total_page,
            'current'            => max(1, get_query_var('paged')),
            'show_all'           => false,
            'end_size'           => 1,
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => 'Önceki', // Önceki metni
            'next_text'          => 'Sonraki', // Sonraki metni
            'type'               => 'plain',
            'add_args'           => false,
            'add_fragment'       => '',
            'before_page_number' => '',
            'after_page_number'  => ''
        );

        if ($total_page > 1) echo (paginate_links($args));
    }
}

if (!function_exists('create_wp_bootstrap_pagination')) {
    /**
     * Bootstrap için sayfalama fonksiyonu.
     * 
     * Wordpress, Bootstrap için pagination (sayfalama) işlemini gerçekleştiren fonksiyon.
     * 
     * @example create_wp_bootstrap_pagination();
     */
    function create_wp_bootstrap_pagination()
    {
        global $wp_query;

        $total_page = $wp_query->max_num_pages;
        $end_number = 99999999;
        $args = array(
            'base'               => str_replace($end_number, '%#%', esc_url(get_pagenum_link($end_number))),
            'format'             => '?page=%#%',
            'total'              => $total_page,
            'current'            => max(1, get_query_var('paged')),
            'show_all'           => true,
            'end_size'           => 1,
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => 'Önceki', // Önceki metni
            'next_text'          => 'Sonraki', // Sonraki metni
            'type'               => 'array',
            'add_args'           => false,
            'add_fragment'       => '',
            'before_page_number' => '',
            'after_page_number'  => ''
        );

        if ($total_page > 1) {
            $pages = paginate_links($args);

            if (is_array($pages)) {
                $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');

                $pagination = '<ul class="pagination">';
                foreach ($pages as $page) {
                    $pagination .= '<li class="page-item ' . (strpos($page, 'current') !== false ? 'active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                }
                $pagination .= '</ul>';

                echo ($pagination);
            }
        }
    }
}
