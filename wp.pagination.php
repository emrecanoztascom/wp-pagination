<?php

if (!function_exists('create_wp_pagination')) {
    /**
     * Wordpress için pagination (sayfalama) işlemini gerçekleştiren fonksiyon.
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
            'prev_text'          => 'Önceki',
            'next_text'          => 'Sonraki',
            'type'               => 'plain',
            'add_args'           => false,
            'add_fragment'       => '',
            'before_page_number' => '',
            'after_page_number'  => ''
        );
        if ($total_page > 1) {
            echo (paginate_links($args));
        }
    }
}
