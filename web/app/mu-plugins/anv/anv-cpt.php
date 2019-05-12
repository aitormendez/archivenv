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

    $args_artwork = [
        'name'                  => _x( 'Artworks', 'Post Type General Name', 'anv-CPT' ),
        'singular_name'         => _x( 'Artwork', 'Post Type Singular Name', 'anv-CPT' ),
        'menu_name'             => __( 'Artworks', 'anv-CPT' ),
        'name_admin_bar'        => __( 'Artworks', 'anv-CPT' ),
    ];

    register_extended_post_type(
        'artwork',
        [
            'show_in_rest' => true,
            'labels'       => $args_artwork,
        ],
        [
            'singular' => 'Artwork',
            'plural'   => 'Artworks',
            'slug'     => 'artwork'
        ]
    );

    $args_bio = [
        'name'                  => _x( 'Bios', 'Post Type General Name', 'anv-CPT' ),
        'singular_name'         => _x( 'Bio', 'Post Type Singular Name', 'anv-CPT' ),
        'menu_name'             => __( 'Bios', 'anv-CPT' ),
        'name_admin_bar'        => __( 'Bios', 'anv-CPT' ),
    ];

    register_extended_post_type(
        'bio',
        [
            'show_in_rest' => true,
            'labels'       => $args_bio,
        ],
        [
          'singular' => 'Bio',
          'plural'   => 'Bios',
          'slug'     => 'bio'
        ]
    );

    $args_publication = [
        'name'                  => _x( 'Publications', 'Post Type General Name', 'anv-CPT' ),
        'singular_name'         => _x( 'Publication', 'Post Type Singular Name', 'anv-CPT' ),
        'menu_name'             => __( 'Publications', 'anv-CPT' ),
        'name_admin_bar'        => __( 'Publications', 'anv-CPT' ),
    ];

    $args_cols = [
        'featured_image' => array(
			'title'          => 'Cover',
			'featured_image' => 'thumbnail'
		),
    ];

    register_extended_post_type(
        'publication',
        [
            'show_in_rest' => true,
            'labels'       => $args_publication,
            'admin_cols'   => $args_cols,
        ],
        [
          'singular' => 'Publication',
          'plural'   => 'Publications',
          'slug'     => 'publication'
        ]
    );

    register_extended_taxonomy( 'publication_type', ['publication'], [
        'show_in_rest' => true,
        'hierarchical' => false,
    ] );


    register_extended_taxonomy( 'serie', ['artwork'], [
          'show_in_rest' => true,
          'hierarchical' => true,
      ] );

}, 0 );
