<?php

/*
Plugin Name: Clients
Description: Plugin to register the clients post type
Version: 1.0
Author: Marcelo Da Ros
Textdomain: industrial
License: GPLv2
*/

function industrial_post_type(){
  //clientes
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