<?
function positions_post_type()
{

    $labels = array(
        'name'                  => _x('Positions', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Position', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Positions', 'text_domain'),
        'name_admin_bar'        => __('Positions', 'text_domain'),
        'archives'              => __('positions Archives', 'text_domain'),
        'attributes'            => __('positions Attributes', 'text_domain'),
        'parent_item_colon'     => __('positions Item:', 'text_domain'),
        'all_items'             => __('positions Items', 'text_domain'),
        'add_new_item'          => __('Add New position', 'text_domain'),
        'add_new'               => __('Add New position', 'text_domain'),
        'new_item'              => __('New position', 'text_domain'),
        'edit_item'             => __('Edit position', 'text_domain'),
        'update_item'           => __('Update position', 'text_domain'),
        'view_item'             => __('View position', 'text_domain'),
        'view_items'            => __('View positions', 'text_domain'),
        'search_items'          => __('Search position', 'text_domain'),
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
        'label'                 => __('Post Type', 'text_domain'),
        'description'           => __('Post Type Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('positions', $args);
}
add_action('init', 'positions_post_type', 0);
