<?php

require_once( 'theme-settings.php' );

/*********************
Scripts & Enqueuing
*********************/
function thebugle_scripts_styles() {
	//Bootstrap CSS
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.0.0' );
	//Bootstrap JS
	wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', false );

	//Load
	wp_enqueue_style( 'bootstrap' );

	// Main CSS
	wp_enqueue_style( 'thebugle', get_stylesheet_uri(), array(), '0.1' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'thebugle_scripts_styles', 999 );

?>