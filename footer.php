</main>
<footer>
  <section class="socialMedia">
    <?php
    $loop = new WP_Query(array(
      'post_type' => 'social_media',
      'orderby' => 'post_id',
      'order' => 'ASC'
    ));
    while ($loop->have_posts()) : $loop->the_post(); ?>

      <?php
      $image = get_field('social_media_icon');
      $size = 'full';

      $red_social = get_field('social_media_op');
      if ($image) {
        if ($red_social == 'url') {
          $enlace = get_field('social_media_link');
          echo '<a href="' . $enlace . '" target="_blank"> ' . wp_get_attachment_image($image, $size, "", ["class" => ""]) . ' </a>';
        } elseif ($red_social == 'email') {
          $enlace = get_field('email');
          echo '<a href="mailto:' . $enlace . '"> ' . wp_get_attachment_image($image, $size, "", ["class" => ""]) . ' </a>';
        } elseif ($red_social == 'phone') {
          $enlace = get_field('phone_number');
          echo '<a href="tel:' . $enlace . '"> ' . wp_get_attachment_image($image, $size, "", ["class" => ""]) . ' </a>';
        }
      }
      ?>
    <?php endwhile;
    wp_reset_postdata(); ?>
    <a href="#top" class="goTop">up</a>
  </section>
</footer>
<?php wp_footer() ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/scripts.js'); ?>" />
</script>
</body>

</html>