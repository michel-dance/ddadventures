<?php
/**
 * Page router for simple hierarchy support.
 * Automatically routes any page whose URL/title contains "review" to the reviews layout
 * so you don’t need the template dropdown.
 */

$is_reviews = false;

// Prefer the WP page context.
if (is_page()) {
    $uri = get_page_uri();
    $title = get_the_title();
    if (stripos($uri, 'review') !== false || stripos($title, 'review') !== false) {
        $is_reviews = true;
    }
}

// Fallback: check the requested URL path so it also works if the page is set as the posts page.
if (!$is_reviews && !empty($_SERVER['REQUEST_URI'])) {
    if (stripos($_SERVER['REQUEST_URI'], 'review') !== false) {
        $is_reviews = true;
    }
}

if ($is_reviews && locate_template('page-reviews.php')) {
    require locate_template('page-reviews.php');
    return;
}

// Fallback: show the generic front message.
get_header(); ?>
<main class="wrap" style="padding:40px 0;">
  <h1><?php esc_html_e('Double DD Adventures', 'double-dd-adventures'); ?></h1>
  <p><?php esc_html_e('This page uses the default template. If this should be the reviews page, include "review" in its URL or title.', 'double-dd-adventures'); ?></p>
</main>
<?php get_footer(); ?>
