<?php
function app_scripts_styles() {
	global $wp_styles;

	// Enqueue our scripts
    wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.js', array('jquery'), '3.6', false );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor.js', array('jquery'), '5.4', false );
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '5.4', true );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('jquery'), '5.4', true );

	// Enqueue our stylesheets
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/fonts.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'app_scripts_styles', 0 );
?>