<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function case_study_post_type() {

    $singular = "Case Study";
    $multiple = "Case Studies";

    $labels = array(
        'name'                => _x( $multiple, 'Post Type General Name' ),
        'singular_name'       => _x( $singular, 'Post Type Singular Name' ),
        'menu_name'           => __( $multiple ),
        'name_admin_bar'      => __( $multiple ),
        'parent_item_colon'   => __( 'Parent '. $singular . ':' ),
        'all_items'           => __( 'All ' . $multiple ),
        'add_new_item'        => __( 'Add New ' . $singular ),
        'add_new'             => __( 'Add New' ),
        'new_item'            => __( 'New ' . $singular ),
        'edit_item'           => __( 'Edit ' . $singular ),
        'update_item'         => __( 'Update ' . $singular ),
        'view_item'           => __( 'View ' . $singular ),
        'search_items'        => __( 'Search ' . $singular ),
        'not_found'           => __( 'Not found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
    $args = array(
        'label'               => __( $singular ),
        'description'         => __( $multiple . ' that I have completed.' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'editor', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-portfolio',
    );
    register_post_type( 'case-study', $args );

}
add_action( 'init', 'case_study_post_type', 0 );