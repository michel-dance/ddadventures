<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (is_front_page()) : ?>
    <meta name="description" content="Aruba private boat charters for sunsets, snorkeling, fishing, family days, bachelorette parties, and content-friendly cruises with Double DD Adventures.">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <meta name="keywords" content="Aruba boat charter, Aruba sunset cruise, Aruba snorkeling tour, private boat Aruba, family friendly boat Aruba, bachelorette boat Aruba">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Double DD Adventures | Aruba Private Boat Charters">
    <meta property="og:description" content="Sunset cruises, snorkeling, fishing, family trips, and party-perfect charters in Aruba with a licensed captain and safety gear.">
    <meta property="og:image" content="<?php echo esc_url(dda_media_base_url() . 'overhead-front-shot-of-boat-with-people.jpg'); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Double DD Adventures | Aruba Private Boat Charters">
    <meta name="twitter:description" content="Aruba boat days tailored to you—sunsets, sandbars, snorkeling, fishing, and celebrations.">
    <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri() . '/photos/overhead-front-shot-of-boat-with-people.jpg'); ?>">
  <?php elseif (is_page_template('page-reviews.php')) : ?>
    <meta name="description" content="Screenshots of real guest reviews for Double DD Adventures Aruba private boat charters—sunset cruises, snorkeling, fishing, and celebrations.">
    <link rel="canonical" href="<?php echo esc_url(home_url('/reviews/')); ?>">
    <meta name="keywords" content="Aruba boat charter reviews, Aruba sunset cruise reviews, Aruba snorkeling charter reviews">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Double DD Adventures | Aruba Charter Reviews">
    <meta property="og:description" content="Unedited customer reviews for Aruba sunset cruises, snorkeling, fishing, and party-friendly charters.">
    <meta property="og:image" content="<?php echo esc_url(dda_media_base_url() . 'Screenshot_20240928_120048_GetMyBoat.jpg'); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/reviews/')); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Double DD Adventures | Aruba Charter Reviews">
    <meta name="twitter:description" content="See every customer screenshot before you book your Aruba charter day.">
    <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri() . '/photos/Screenshot_20240928_120048_GetMyBoat.jpg'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="wrap nav">
      <div class="brand">
        <span class="dot" aria-hidden="true"></span>
        Double DD Adventures
      </div>
      <div class="nav-links">
        <a class="button" href="https://wa.me/2976613950" target="_blank" rel="noreferrer">
          <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.672.15-.197.297-.77.966-.944 1.164-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.173.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.148-.672-1.611-.92-2.209-.242-.579-.487-.5-.672-.51l-.576-.01c-.198 0-.52.074-.793.372-.273.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.718 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.273-.198-.571-.347m-5.421 5.451h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.517-5.23c.002-5.45 4.436-9.884 9.888-9.884 2.64.001 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.9 6.994c-.002 5.45-4.436 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.158 11.89c0 2.096.547 4.14 1.588 5.945L0 24l6.305-1.654a11.86 11.86 0 0 0 5.733 1.463h.005c6.554 0 11.89-5.335 11.892-11.89a11.821 11.821 0 0 0-3.48-8.428"/></svg>
          WhatsApp booking
        </a>
        <a class="button-ghost" href="https://www.instagram.com/double_dd_adventures/" target="_blank" rel="noreferrer">
          <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.35 3.608 1.325.975.975 1.262 2.242 1.324 3.608.058 1.266.069 1.646.069 4.85s-.011 3.584-.069 4.85c-.062 1.366-.35 2.633-1.324 3.608-.975.975-2.242 1.262-3.608 1.324-1.266.058-1.646.069-4.85.069s-3.584-.011-4.85-.069c-1.366-.062-2.633-.35-3.608-1.324-.975-.975-1.262-2.242-1.324-3.608C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.062-1.366.35-2.633 1.324-3.608.975-.975 2.242-1.262 3.608-1.324C8.416 2.175 8.796 2.163 12 2.163m0-2.163C8.741 0 8.332.014 7.052.072 5.775.13 4.638.428 3.678 1.388 2.718 2.347 2.42 3.484 2.362 4.761 2.304 6.041 2.29 6.45 2.29 12c0 5.55.014 5.959.072 7.239.058 1.277.356 2.414 1.316 3.373.96.96 2.097 1.258 3.373 1.316 1.28.058 1.689.072 7.239.072s5.959-.014 7.239-.072c1.277-.058 2.414-.356 3.373-1.316.96-.96 1.258-2.097 1.316-3.373.058-1.28.072-1.689.072-7.239s-.014-5.959-.072-7.239c-.058-1.277-.356-2.414-1.316-3.373-.96-.96-2.097-1.258-3.373-1.316C15.959.014 15.55 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 1 0-2.881 1.44 1.44 0 0 1 0 2.881z"/></svg>
          Instagram DM
        </a>
        <a class="button-ghost" href="<?php echo esc_url(home_url('/reviews/')); ?>">Guest reviews</a>
      </div>
    </div>
  </header>
