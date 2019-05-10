<?php
   /*
   Plugin Name: anv-CPT
   Text Domain: anv-CPT
   Plugin URI:
   Description:
   Version: 1.0
   Author: Aitor
   Author URI: https://e451.net
   License: GPL 3.0
   */
?>
<?php

namespace Mau;

add_action( 'init', function() {

load_textdomain('anv-CPT', WPMU_PLUGIN_DIR . '/' .plugin_basename( dirname( __FILE__ ) ) . '/languages/anv-CPT-' . get_locale() . '.mo');




$labels = array(
    'name'                  => _x( 'Bios', 'Post Type General Name', 'anv-CPT' ),
    'singular_name'         => _x( 'Bio', 'Post Type Singular Name', 'anv-CPT' ),
    'menu_name'             => __( 'Bios', 'anv-CPT' ),
    'name_admin_bar'        => __( 'Bio', 'anv-CPT' ),
    'archives'              => __( 'Bio Archives', 'anv-CPT' ),
    'attributes'            => __( 'Bio Attributes', 'anv-CPT' ),
    'parent_item_colon'     => __( 'Parent Bio:', 'anv-CPT' ),
    'all_items'             => __( 'All Bio', 'anv-CPT' ),
    'add_new_item'          => __( 'Add New Bio', 'anv-CPT' ),
    'add_new'               => __( 'Add New', 'anv-CPT' ),
    'new_item'              => __( 'New Bio', 'anv-CPT' ),
    'edit_item'             => __( 'Edit Bio', 'anv-CPT' ),
    'update_item'           => __( 'Update Bio', 'anv-CPT' ),
    'view_item'             => __( 'View Bio', 'anv-CPT' ),
    'view_items'            => __( 'View Bio', 'anv-CPT' ),
    'search_items'          => __( 'Search Bio', 'anv-CPT' ),
    'not_found'             => __( 'Not found', 'anv-CPT' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anv-CPT' ),
    'featured_image'        => __( 'Featured Image', 'anv-CPT' ),
    'set_featured_image'    => __( 'Set featured image', 'anv-CPT' ),
    'remove_featured_image' => __( 'Remove featured image', 'anv-CPT' ),
    'use_featured_image'    => __( 'Use as featured image', 'anv-CPT' ),
    'insert_into_item'      => __( 'Insert into Bio', 'anv-CPT' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Bio', 'anv-CPT' ),
    'items_list'            => __( 'Bios list', 'anv-CPT' ),
    'items_list_navigation' => __( 'Bios list navigation', 'anv-CPT' ),
    'filter_items_list'     => __( 'Filter bios list', 'anv-CPT' ),
);
$args = array(
    'label'                 => __( 'Bio', 'anv-CPT' ),
    'description'           => __( 'Bio Description', 'anv-CPT' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
);
register_post_type( 'bio', $args );

$labels = array(
    'name'                  => _x( 'Artworks', 'Post Type General Name', 'anv-CPT' ),
    'singular_name'         => _x( 'Artwork', 'Post Type Singular Name', 'anv-CPT' ),
    'menu_name'             => __( 'Artworks', 'anv-CPT' ),
    'name_admin_bar'        => __( 'Artwork', 'anv-CPT' ),
    'archives'              => __( 'Artwork Archives', 'anv-CPT' ),
    'attributes'            => __( 'Artwork Attributes', 'anv-CPT' ),
    'parent_item_colon'     => __( 'Parent artwork:', 'anv-CPT' ),
    'all_items'             => __( 'All artworks', 'anv-CPT' ),
    'add_new_item'          => __( 'Add New artwork', 'anv-CPT' ),
    'add_new'               => __( 'Add New', 'anv-CPT' ),
    'new_item'              => __( 'New artwork', 'anv-CPT' ),
    'edit_item'             => __( 'Edit artwork', 'anv-CPT' ),
    'update_item'           => __( 'Update artwork', 'anv-CPT' ),
    'view_item'             => __( 'View artwork', 'anv-CPT' ),
    'view_items'            => __( 'View artwork', 'anv-CPT' ),
    'search_items'          => __( 'Search artwork', 'anv-CPT' ),
    'not_found'             => __( 'Not found', 'anv-CPT' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anv-CPT' ),
    'featured_image'        => __( 'Featured Image', 'anv-CPT' ),
    'set_featured_image'    => __( 'Set featured image', 'anv-CPT' ),
    'remove_featured_image' => __( 'Remove featured image', 'anv-CPT' ),
    'use_featured_image'    => __( 'Use as featured image', 'anv-CPT' ),
    'insert_into_item'      => __( 'Insert into artwork', 'anv-CPT' ),
    'uploaded_to_this_item' => __( 'Uploaded to this artwork', 'anv-CPT' ),
    'items_list'            => __( 'Artworks list', 'anv-CPT' ),
    'items_list_navigation' => __( 'Artworks list navigation', 'anv-CPT' ),
    'filter_items_list'     => __( 'Filter artworks list', 'anv-CPT' ),
);
$args = array(
    'label'                 => __( 'Artwork', 'anv-CPT' ),
    'description'           => __( 'Post Type Description', 'anv-CPT' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'serie' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
);
register_post_type( 'artwork', $args );

$labels = array(
    'name'                  => _x( 'Publications', 'Post Type General Name', 'anv-CPT' ),
    'singular_name'         => _x( 'Publication', 'Post Type Singular Name', 'anv-CPT' ),
    'menu_name'             => __( 'Publications', 'anv-CPT' ),
    'name_admin_bar'        => __( 'Publication', 'anv-CPT' ),
    'archives'              => __( 'Publication Archives', 'anv-CPT' ),
    'attributes'            => __( 'Publication Attributes', 'anv-CPT' ),
    'parent_item_colon'     => __( 'Parent Publication:', 'anv-CPT' ),
    'all_items'             => __( 'All Publications', 'anv-CPT' ),
    'add_new_item'          => __( 'Add New Publication', 'anv-CPT' ),
    'add_new'               => __( 'Add New', 'anv-CPT' ),
    'new_item'              => __( 'New Publication', 'anv-CPT' ),
    'edit_item'             => __( 'Edit Publication', 'anv-CPT' ),
    'update_item'           => __( 'Update Publication', 'anv-CPT' ),
    'view_item'             => __( 'View Publication', 'anv-CPT' ),
    'view_items'            => __( 'View Publication', 'anv-CPT' ),
    'search_items'          => __( 'Search Publication', 'anv-CPT' ),
    'not_found'             => __( 'Not found', 'anv-CPT' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anv-CPT' ),
    'featured_image'        => __( 'Featured Image', 'anv-CPT' ),
    'set_featured_image'    => __( 'Set featured image', 'anv-CPT' ),
    'remove_featured_image' => __( 'Remove featured image', 'anv-CPT' ),
    'use_featured_image'    => __( 'Use as featured image', 'anv-CPT' ),
    'insert_into_item'      => __( 'Insert into publication', 'anv-CPT' ),
    'uploaded_to_this_item' => __( 'Uploaded to this publication', 'anv-CPT' ),
    'items_list'            => __( 'Publications list', 'anv-CPT' ),
    'items_list_navigation' => __( 'Publications list navigation', 'anv-CPT' ),
    'filter_items_list'     => __( 'Filter publications list', 'anv-CPT' ),
);
$args = array(
    'label'                 => __( 'Publication', 'anv-CPT' ),
    'description'           => __( 'Publications about Josep Navarro Vives', 'anv-CPT' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'publication_type' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
);
register_post_type( 'publication', $args );






$labels = array(
    'name'                       => _x( 'Series', 'Taxonomy General Name', 'anv-CPT' ),
    'singular_name'              => _x( 'Serie', 'Taxonomy Singular Name', 'anv-CPT' ),
    'menu_name'                  => __( 'Series', 'anv-CPT' ),
    'all_items'                  => __( 'All Series', 'anv-CPT' ),
    'parent_item'                => __( 'Parent Serie', 'anv-CPT' ),
    'parent_item_colon'          => __( 'Parent Serie:', 'anv-CPT' ),
    'new_item_name'              => __( 'New Serie Name', 'anv-CPT' ),
    'add_new_item'               => __( 'Add New Serie', 'anv-CPT' ),
    'edit_item'                  => __( 'Edit Serie', 'anv-CPT' ),
    'update_item'                => __( 'Update Serie', 'anv-CPT' ),
    'view_item'                  => __( 'View Serie', 'anv-CPT' ),
    'separate_items_with_commas' => __( 'Separate Series with commas', 'anv-CPT' ),
    'add_or_remove_items'        => __( 'Add or remove Series', 'anv-CPT' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'anv-CPT' ),
    'popular_items'              => __( 'Popular Series', 'anv-CPT' ),
    'search_items'               => __( 'Search Series', 'anv-CPT' ),
    'not_found'                  => __( 'Not Found', 'anv-CPT' ),
    'no_terms'                   => __( 'No Series', 'anv-CPT' ),
    'items_list'                 => __( 'Series list', 'anv-CPT' ),
    'items_list_navigation'      => __( 'Series list navigation', 'anv-CPT' ),
);
$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);
register_taxonomy( 'serie', array( 'post', 'artwork' ), $args );

$labels = array(
    'name'                       => _x( 'Publication types', 'Taxonomy General Name', 'anv-CPT' ),
    'singular_name'              => _x( 'Publication type', 'Taxonomy Singular Name', 'anv-CPT' ),
    'menu_name'                  => __( 'Publication type', 'anv-CPT' ),
    'all_items'                  => __( 'All publication types', 'anv-CPT' ),
    'parent_item'                => __( 'Parent publication type', 'anv-CPT' ),
    'parent_item_colon'          => __( 'Parent publication type:', 'anv-CPT' ),
    'new_item_name'              => __( 'New Publication type Name', 'anv-CPT' ),
    'add_new_item'               => __( 'Add New publication type', 'anv-CPT' ),
    'edit_item'                  => __( 'Edit publication type', 'anv-CPT' ),
    'update_item'                => __( 'Update publication type', 'anv-CPT' ),
    'view_item'                  => __( 'View publication type', 'anv-CPT' ),
    'separate_items_with_commas' => __( 'Separate publication types with commas', 'anv-CPT' ),
    'add_or_remove_items'        => __( 'Add or remove publication type', 'anv-CPT' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'anv-CPT' ),
    'popular_items'              => __( 'Popular publication types', 'anv-CPT' ),
    'search_items'               => __( 'Search publication type', 'anv-CPT' ),
    'not_found'                  => __( 'Not Found', 'anv-CPT' ),
    'no_terms'                   => __( 'No items', 'anv-CPT' ),
    'items_list'                 => __( 'Items list', 'anv-CPT' ),
    'items_list_navigation'      => __( 'Items list navigation', 'anv-CPT' ),
);
$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);
register_taxonomy( 'publication_type', array( 'publication' ), $args );


// Disable WPML CSS
// ------------------------
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define('ICL_DONT_LOAD_LANGUAGES_JS', true);

}, 0 );


