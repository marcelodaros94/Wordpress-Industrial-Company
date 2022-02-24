<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

add_image_size( 'industrial-featured-image', 2000, 1200, true );

add_image_size( 'industrial-thumbnail-avatar', 100, 100, true );
/**
 * Industrial functions and definitions
 */
function industrial_post_type(){
    register_post_type('industrial_clientes',
    array(
     'labels' => array(
       'name' => __( 'Clientes' ),
       'singular_name' => __( 'Item' ),
       'add_new' => __( 'Nuevo item' ),
       'add_new_item' => __( 'Añadir nuevo item' ),
       'edit_item' => __( 'Editar item' ),
       'featured_image' => __( 'Imagen' )
     ),
     'public' => true,
     'exclude_from_search' => true,
     'has_archive' => false,
     'show_in_nav_menus' => false,
     'menu_icon' => 'dashicons-slides',
     //'rewrite' => array('slug' => 'carousel'),
     'supports' => array('title', 'editor', 'thumbnail')
    )
    );
}
add_action( 'init', 'industrial_post_type' );
?>