<?php
/**
 * Register and Enqueue Styles.
 *
 * @since gofresh 1.0
 */
function gofresh_register_styles() {

	$theme_version = /* wp_get_theme()->get( 'Version' ) */ 'null';

	wp_enqueue_style( 'gofresh-style', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
	wp_enqueue_style( 'gofresh-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), $theme_version );
	wp_enqueue_style( 'gofresh-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), $theme_version );
	wp_style_add_data( 'gofresh-style', 'rtl', 'replace' );


	// Add output of Customizer settings as inline style.
	wp_add_inline_style( 'gofresh-style', gofresh_get_customizer_css( 'front-end' ) );

	// Add print CSS.
	wp_enqueue_style( 'gofresh-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'gofresh_register_styles' );
?>