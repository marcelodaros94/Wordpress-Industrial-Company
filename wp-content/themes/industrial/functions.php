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
  //add_meta_box('certificate',__( 'Certificate', 'industrial' ),'certificate_meta_box_callback');
  add_meta_box( MY_POST_TYPE . '_details' , 'Media Library', 'my_meta_box_details', MY_POST_TYPE, 'normal', 'high' );
  //add_meta_box('wp_custom_attachment','Custom Attachment','wp_custom_attachment',MY_POST_TYPE,'side');
  add_meta_box("my-pdf", "PDF Document", "pdf_link", MY_POST_TYPE, "normal", "low");
}

add_action('save_post', 'save_pdf_link');
function pdf_link(){
    global $post;
    $custom  = get_post_custom($post->ID);
    $link    = $custom["link"][0];
    $count   = 0;
    echo '<div class="link_header">';
    $query_pdf_args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'application/pdf',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
        );
    $query_pdf = new WP_Query( $query_pdf_args );
    $pdf = array();
    echo '<select name="link">';
    echo '<option class="pdf_select">SELECT pdf FILE</option>';
    foreach ( $query_pdf->posts as $file) {
       if($link == $pdf[]= $file->guid){
          echo '<option value="'.$pdf[]= $file->guid.'" selected="true">'.$pdf[]= $file->guid.'</option>';
         }else{
          echo '<option value="'.$pdf[]= $file->guid.'">'.$pdf[]= $file->guid.'</option>';
         }
        $count++;
    }
    echo '</select><br /></div>';
    echo '<p>Selecting a pdf file from the above list to attach to this post.</p>';
    echo '<div class="pdf_count"><span>Files:</span> <b>'.$count.'</b></div>';
}
function save_pdf_link(){
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){ return $post->ID; }
    update_post_meta($post->ID, "link", $_POST["link"]);
}
add_action( 'admin_head', 'pdf_css' );
function pdf_css() {
    echo '<style type="text/css">
    .pdf_select{
        font-weight:bold;
        background:#e5e5e5;
        }
    .pdf_count{
        font-size:9px;
        color:#0066ff;
        text-transform:uppercase;
        background:#f3f3f3;
        border-top:solid 1px #e5e5e5;
        padding:6px 6px 6px 12px;
        margin:0px -6px -8px -6px;
        -moz-border-radius:0px 0px 6px 6px;
        -webkit-border-radius:0px 0px 6px 6px;
        border-radius:0px 0px 6px 6px;
        }
    .pdf_count span{color:#666;}
        </style>';
}
function pdf_file_url(){
    global $wp_query;
    $custom = get_post_custom($wp_query->post->ID);
    echo $custom['link'][0];
}
 
function my_meta_box_details () {
  global $post;
  $post_ID = $post->ID; 
  printf( "<iframe frameborder='0' src=' %s ' style='width: 100%%; height: 400px;'> </iframe>", get_upload_iframe_src('media') );
}

/** Optional text field to activate if needed **/
/*
function certificate_meta_box_callback( $post ) {

  // Add a nonce field so we can check for it later.
  wp_nonce_field( 'certificate_nonce', 'certificate_nonce' );

  $value = get_post_meta( $post->ID, '_certificate', true );

  echo '<textarea style="width:100%" id="certificate" name="certificate">' . esc_attr( $value ) . '</textarea>';
}
/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id
 */
/*
function save_certificate_meta_box_data( $post_id ) {

  // Check if our nonce is set.
  if ( ! isset( $_POST['certificate_nonce'] ) ) {
      return;
  }

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $_POST['certificate_nonce'], 'certificate_nonce' ) ) {
      return;
  }

  // If this is an autosave, our form has not been submitted, so we don't want to do anything.
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return;
  }

  // Check the user's permissions.
  if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

      if ( ! current_user_can( 'edit_page', $post_id ) ) {
          return;
      }

  }
  else {

      if ( ! current_user_can( 'edit_post', $post_id ) ) {
          return;
      }
  }

  // OK, it's safe for us to save the data now. 

  // Make sure that it is set.
  if ( ! isset( $_POST['certificate'] ) ) {
      return;
  }

  // Sanitize user input.
  $my_data = sanitize_text_field( $_POST['certificate'] );

  // Update the meta field in the database.
  update_post_meta( $post_id, '_certificate', $my_data );
}

add_action( 'save_post', 'save_certificate_meta_box_data' );
*/
?>
