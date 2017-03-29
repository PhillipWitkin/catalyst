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
