<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
  <link rel="shortcut icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/images/LOGO-FAVICON.png'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <?php wp_head() ?>
</head>

<body>
  <header class="header">
    <div class="header__content">
      <a class="header__logo" href="/">
        <img class="logo__image" rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="Day Care Learning logo" width="100" height="58">
      </a>
      <?php
      $args = array(
        'theme_location' => 'nav-menu',
        'container' => 'nav',
        'container_class' => 'navbar__container'
      );

      wp_nav_menu($args)
      ?>
      <div class="navbar__container--mobile">
        <span class="btn-close--navbar">x</span>
        <?php
        $args = array(
          'theme_location' => 'nav-menu',
          'container' => 'nav',
          'container_class' => 'navbar__content--mobile'
        );
        wp_nav_menu($args)
        ?>
      </div>
      <div class="button--burger">
        <div class=""></div>
        <div class=""></div>
        <div class=""></div>
      </div>
    </div>
  </header>
  <main>