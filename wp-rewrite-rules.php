<?php

/**
 * WordPress varsayılan ayarlarını değiştiren fonksiyonu.
 * 
 * WordPress için varsayılan ayarlarını, belirli işlemler için değiştirir ve uygular.
 * Buraya; değişiklik yapmak istediğiniz diğer 'Rewrite Rules' ayarlarını tanımlayabilirsiniz.
 *
 * @package     WordPress
 * @subpackage  wpkral
 * @author      ÖZTAŞ, Emre Can <me@emrecanoztas.com>
 * @version     1.0
 */

if (!function_exists('change_wp_rewrite_rules_for_pagination')) {
    /**
     * Wordpress, 'Rewrite Rules' ayarları değiştirir.
     * 
     * Wordpress, 'Rewrite Rules' ayarlarını, pagination (sayfalama) için değiştiren fonksiyon.
     * Bu fonksiyon, add_action() hook ile çalıştırılmalıdır (function.php).
     * 
     * @example add_action('init', 'change_wp_rewrite_rules_for_pagination');
     * @since   1.0
     */
    function change_wp_rewrite_rules_for_pagination()
    {
        global $wp_rewrite;
        $wp_rewrite->pagination_base = 'sayfa';

        $wp_rewrite->flush_rules();
    }
}
