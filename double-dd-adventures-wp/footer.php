  <footer class="footer">
    <div class="wrap">
      Built for Double DD Adventures. Mobile-first gallery with photos and videos stored locally in the <code>photos/</code> folder.
    </div>
  </footer>

  <?php if (is_front_page()) : ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Double DD Adventures",
      "description": "Private boat charters in Aruba for sunset cruises, snorkeling, fishing, family-safe trips, and celebrations with a licensed captain.",
      "telephone": "+2976613950",
      "priceRange": "$$",
      "areaServed": { "@type": "Country", "name": "Aruba" },
      "sameAs": [
        "https://wa.me/2976613950",
        "https://www.instagram.com/double_dd_adventures/"
      ],
      "image": [
        "<?php echo esc_url(dda_media_base_url() . 'overhead-front-shot-of-boat-with-people.jpg'); ?>",
        "<?php echo esc_url(dda_media_base_url() . 'stuning-boat-sunsets.jpg'); ?>",
        "<?php echo esc_url(dda_media_base_url() . 'boat-side-shot2.jpg'); ?>",
        "<?php echo esc_url(dda_media_base_url() . 'family-posing-onboat-with-snroker-gear.jpg'); ?>"
      ]
    }
    </script>
  <?php elseif (is_page_template('page-reviews.php')) : ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ReviewCollection",
      "name": "Double DD Adventures customer reviews",
      "description": "Screenshots of guest reviews for Double DD Adventures private boat charters in Aruba, covering sunset cruises, snorkeling, fishing, and celebrations.",
      "image": "<?php echo esc_url(dda_media_base_url() . 'Screenshot_20240928_120048_GetMyBoat.jpg'); ?>",
      "url": "<?php echo esc_url(home_url('/reviews/')); ?>",
      "sameAs": [
        "https://wa.me/2976613950",
        "https://www.instagram.com/double_dd_adventures/"
      ],
      "about": {
        "@type": "LocalBusiness",
        "name": "Double DD Adventures",
        "areaServed": { "@type": "Country", "name": "Aruba" }
      }
    }
    </script>
  <?php endif; ?>
  <?php wp_footer(); ?>
</body>
</html>
