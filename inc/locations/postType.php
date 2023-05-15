<?
function location_post_type()
{

  $labels = array(
    'name'                  => _x('Post Types', 'Post Type General Name', 'text_domain'),
    'singular_name'         => _x('Location', 'Post Type Singular Name', 'text_domain'),
    'menu_name'             => __('Location', 'text_domain'),
    'name_admin_bar'        => __('Location', 'text_domain'),
    'archives'              => __('Location Archives', 'text_domain'),
    'attributes'            => __('Loaction Attributes', 'text_domain'),
    'parent_item_colon'     => __('Location', 'text_domain'),
    'all_items'             => __('Location Items', 'text_domain'),
    'add_new_item'          => __('Add New location', 'text_domain'),
    'add_new'               => __('Add New location', 'text_domain'),
    'new_item'              => __('New location', 'text_domain'),
    'edit_item'             => __('Edit location', 'text_domain'),
    'update_item'           => __('Update location', 'text_domain'),
    'view_item'             => __('View location', 'text_domain'),
    'view_items'            => __('View locations', 'text_domain'),
    'search_items'          => __('Search location', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $args = array(
    'label'                 => __('Location', 'text_domain'),
    'description'           => __('Post Type Description', 'text_domain'),
    'labels'                => $labels,
    'supports'              => array('title'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-location-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type('location_post_type', $args);
}
add_action('init', 'location_post_type', 0);
