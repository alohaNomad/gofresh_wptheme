<?php
/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since gofresh 1.0
 *
 * @return void
 */
function gofresh_customize_controls_enqueue_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Add main customizer js file.
	wp_enqueue_script( 'gofresh-customize', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery' ), $theme_version, false );

	// Add script for color calculations.
	wp_enqueue_script( 'gofresh-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array( 'wp-color-picker' ), $theme_version, false );

	// Add script for controls.
	wp_enqueue_script( 'gofresh-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'gofresh-color-calculations', 'customize-controls', 'underscore', 'jquery' ), $theme_version, false );
	wp_localize_script( 'gofresh-customize-controls', 'gofreshBgColors', gofresh_get_customizer_color_vars() );
}

add_action( 'customize_controls_enqueue_scripts', 'gofresh_customize_controls_enqueue_scripts' );

?>