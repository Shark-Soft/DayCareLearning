<?

function staff_post_type()
{

  $labels = array(
    'name'                  => _x('Staff values', 'Post Type General Name', 'text_domain'),
    'singular_name'         => _x('Staff value', 'Post Type Singular Name', 'text_domain'),
    'menu_name'             => __('Staff values', 'text_domain'),
    'name_admin_bar'        => __('Staff value', 'text_domain'),
    'archives'              => __('Staff value Archives', 'text_domain'),
    'attributes'            => __('Staff value Attributes', 'text_domain'),
    'parent_item_colon'     => __('Staff value Item:', 'text_domain'),
    'all_items'             => __('All staff values', 'text_domain'),
    'add_new_item'          => __('Add New staff value', 'text_domain'),
    'add_new'               => __('Add Staff value', 'text_domain'),
    'new_item'              => __('New Staff value', 'text_domain'),
    'edit_item'             => __('Edit Staff value', 'text_domain'),
    'update_item'           => __('Update staff value', 'text_domain'),
    'view_item'             => __('View staff value', 'text_domain'),
    'view_items'            => __('View staff value', 'text_domain'),
    'search_items'          => __('Search staff value', 'text_domain'),
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
    'label'                 => __('Staff value', 'text_domain'),
    'description'           => __('Staff value description', 'text_domain'),
    'labels'                => $labels,
    'supports'              => array('title'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type('staff', $args);
}
add_action('init', 'staff_post_type', 0);
