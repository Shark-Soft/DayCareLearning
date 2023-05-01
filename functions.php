<?php

function day_care_setup()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'day_care_setup');

function day_care_dependencies()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0');
  wp_enqueue_style('global', get_stylesheet_uri(), array('reset'), '1.0.0');
}

function day_care_menus()
{
  register_nav_menus(array(
    'nav-menu' => __('Nav Menu', 'day-care-learning-theme'),
  ));
}

add_action('init', 'day_care_menus');

add_action('wp_enqueue_scripts', 'day_care_dependencies');
