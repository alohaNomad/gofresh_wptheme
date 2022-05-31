<?php
/**
 * Register and Enqueue Scripts.
 *
 * @since gofresh 1.0
 */
function gofresh_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'gofresh-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
	wp_enqueue_script( 'gofresh-jss', get_template_directory_uri() . '/assets/js/script.js', array(), $theme_version, false );
	wp_script_add_data( 'gofresh-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'gofresh_register_scripts' );
?>