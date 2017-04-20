<?php

/**
 * Enqueues bx-slider's styles and scripts
 */
function sheeba_theme_slideshow_scripts() {

	// check if it is a single post of post type handmedown
	if ( is_singular( 'handmedown' ) ) {

		wp_register_script( 'jquery-bxslider', get_stylesheet_directory_uri() . 'js/jquery.bxslider.js', array( 'jquery' ), '' );

		wp_register_script( 'hmd-slideshow', get_stylesheet_directory_uri() . 'js/slideshow.js', array( 'jquery-bxslider' ), '', true );

		wp_enqueue_script( 'hmd-slideshow' );


		wp_register_style( 'jquery-bxslider', get_stylesheet_directory_uri() . 'css/jquery.bxslider.css' );

		wp_enqueue_style( 'jquery-bxslider' );
	}
}

add_action( 'wp_enqueue_scripts', 'sheeba_theme_slideshow_scripts' );



