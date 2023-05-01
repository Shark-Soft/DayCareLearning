<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
  <?php wp_head() ?>
</head>

<body>
  <header class="header">
    <div class="header__content">
      <figure class="header__logo">
        <img class="logo__image" src="" alt="">
      </figure>
      <?php
      $args = array(
        'theme_location' => 'nav-menu',
        'container' => 'nav',
        'container_class' => 'navbar__container'
      );

      wp_nav_menu($args)
      ?>
    </div>
  </header>
  <main>