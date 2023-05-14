<?php
include 'inc/programs/postType.php';
include 'inc/staffValues/postType.php';
include 'inc/staff/postTypeStaff.php';
include 'inc/heroSlider/postType.php';
include 'inc/gallerySlider/postType.php';
include 'inc/positions/postType.php';
include 'inc/socialMedia/postType.php';


function day_care_setup()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'day_care_setup');

function day_care_dependencies()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0');
  wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;700&display=swap', array(), '1.0.0');
  wp_enqueue_style('global', get_stylesheet_uri(), array('reset', 'font'), '1.0.0');
}

function day_care_menus()
{
  register_nav_menus(array(
    'nav-menu' => __('Nav Menu', 'day-care-learning-theme'),
  ));
}

add_action('admin_init', 'remove_editor');
function remove_editor()
{
  remove_post_type_support('page', 'editor');
}
add_action('init', 'day_care_menus');

add_action('wp_enqueue_scripts', 'day_care_dependencies');
