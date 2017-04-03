<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//
/* Register Thumbnails Size
================================== */

if ( function_exists( 'add_image_size' ) ) {

	/* Slider */
	add_image_size( 'slider', 560, 330, true );
	add_image_size( 'slider-small', 90, 66, true );

 	/* Featured Category */
	add_image_size( 'featured-cat', 260, 150, true );

	/* Sidebar Thumbnail */
	add_image_size( 'post-cover', 310 );

	/* Recent Posts Widget */
	add_image_size( 'recent-widget', 60, 45, true );

}




add_filter( 'the_author_posts_link', 'modify_author_link');      
function modify_author_link(  ) {     
   

  global $post;
  global $wpdb;


  $post_id = (int)$post->ID;
  $author_nicename = get_post_meta($post_id, 'author', true);
  $result_author = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->users WHERE display_name = %s", $author_nicename));#WHERE display_name LIKE "%author_nicename%" ', ARRAY_M); 
  $auth_ID = (int)($result_author->ID);#(int) $author_id;
  $author_n = $result_author->user_nicename;#->user_nicename;

  if ($result_author==null){
    $author_n = $author_nicename;
  }


  $link = sprintf(
    '<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
    esc_url( get_author_posts_url( $auth_ID, $author_n ) ),
    esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ),
    get_the_author()
  );

  return $link;
          
}



function query_posts_by_author($author, $disp_name){

    if ( $author == false){
       $args = array(
        'meta_key'         => 'author',
        'meta_value'       => $disp_name,
        'meta_compare' => 'LIKE',
        'suppress_filters' => true 
      );
    }
    else {
      $args = array(
        'meta_key'         => 'author',
        'meta_value'       => $author->display_name,
        'suppress_filters' => true 
      );
    }

    query_posts($args);
    
}

