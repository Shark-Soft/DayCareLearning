<?
function gallery_slides_post_type()
{

  $labels = array(
    'name' => 'Gallery Slides',
    'singular_name' => 'Gallery Slide',
    'menu_name' => 'Gallery Slides',
    'name_admin_bar' => 'Gallery Slider',
    'archives' => 'Gallery Slides Archives',
    'attributes' => 'Slide Attributes',
    'parent_item_colon' => 'Parent Gallery Slide:',
    'all_items' => 'All Slides',
    'add_new_item' => 'Add New Gallery Slide',
    'add_new' => 'Add New',
    'new_item' => 'New Slide',
    'edit_item' => 'Edit Slide',
    'update_item' => 'Update Slide',
    'view_item' => 'View Slide',
    'view_items' => 'View Items',
    'search_items' => 'Search Item',
    'not_found' => 'Not found',
    'not_found_in_trash' => 'Not found in Trash',
    'featured_image' => 'Featured Image',
    'set_featured_image' => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image' => 'Use as featured image',
    'insert_into_item' => 'Insert into item',
    'uploaded_to_this_item' => 'Uploaded to this item',
    'items_list' => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list' => 'Filter items list',
  );
  $args = array(
    'label' => 'Gallery Slide',
    'description' => 'Slides for the Gallery in front page',
    'labels' => $labels,
    'supports' => array('title'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-gallery',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'rewrite' => false,
    'capability_type' => 'page',
  );
  register_post_type('gallery_slider', $args);
}
add_action('init', 'gallery_slides_post_type', 0);
