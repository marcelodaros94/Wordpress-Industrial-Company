<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

add_image_size( 'industrial-featured-image', 2000, 1200, true );

add_image_size( 'industrial-thumbnail-avatar', 400, 400, true );
/**
 * Industrial functions and definitions
 */

define('MY_POST_TYPE', 'Representadas');
 
function my_register_post_type () {
  $args = array (
      'label' => 'representadas',
      'supports' => array( 'title', 'editor', /*'excerpt',*/'thumbnail' ),
      'register_meta_box_cb' => 'my_meta_box_cb',
      'show_ui' => true,
      'query_var' => true,
      'public'=> true,
      'hierarchical'=>false,
      'has_archive'=>true
  );
  register_post_type( MY_POST_TYPE , $args );
}
add_action( 'init', 'my_register_post_type' );
 
function my_meta_box_cb () {
  add_meta_box( MY_POST_TYPE . '_details' , 'Media Library', 'my_meta_box_details', MY_POST_TYPE, 'normal', 'high' );
}
 
function my_meta_box_details () {
  global $post;
  $post_ID = $post->ID; 
  printf( "<iframe frameborder='0' src=' %s ' style='width: 100%%; height: 400px;'> </iframe>", get_upload_iframe_src('media') );
}


?>
