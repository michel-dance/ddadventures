<?php
/**
 * Theme bootstrap for Double DD Adventures.
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('double-dd-style', get_stylesheet_uri(), [], '1.0');
});

/**
 * Base URL for uploaded media (kept out of the theme to keep the ZIP small).
 * Place assets in: wp-content/uploads/double-dd-adventures/
 */
function dda_media_base_url() {
    $upload = wp_upload_dir();
    return trailingslashit($upload['baseurl']) . 'double-dd-adventures/';
}
