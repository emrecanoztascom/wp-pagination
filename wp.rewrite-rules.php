<?php

if (!function_exists('change_wp_rewrite_rules')) {
    /**
     * Wordpress, 'Rewrite Rules' ayarlarını, pagination (sayfalama) için değiştiren fonksiyon.
     * Bu fonksiyon, add_action() hook ile çalıştırılmalıdır (functions.php).
     * @example add_action('init', 'change_wp_rewrite_rules');
     */
    function change_wp_rewrite_rules()
    {
        global $wp_rewrite;

        $wp_rewrite->author_base = 'yazar';
        $wp_rewrite->search_base = 'arama-sonucu';
        $wp_rewrite->comments_base = 'yorum';
        $wp_rewrite->pagination_base = 'sayfa';

        $wp_rewrite->flush_rules();
    }
}