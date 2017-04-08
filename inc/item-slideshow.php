<?php

function saurabh_theme_slideshow_scripts(){
	wp_register_script('bxslider', STYLESHEETPATH . 'js/bx-slider.js');
	wp_enqueue_script('bxslider');
}

add_action( 'wp_enqueue_scripts', 'saurabh_theme_slideshow_scripts' );
