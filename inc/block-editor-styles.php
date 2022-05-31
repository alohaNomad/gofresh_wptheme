<?php
/**
 * Enqueue supplemental block editor styles.
 *
 * @since gofresh 1.0
 */
function gofresh_block_editor_styles() {

	// Enqueue the editor styles.
	wp_enqueue_style( 'gofresh-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_style_add_data( 'gofresh-block-editor-styles', 'rtl', 'replace' );

	// Add inline style from the Customizer.
	wp_add_inline_style( 'gofresh-block-editor-styles', gofresh_get_customizer_css( 'block-editor' ) );

	// Add inline style for non-latin fonts.
	wp_add_inline_style( 'gofresh-block-editor-styles', gofresh_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );

	// Enqueue the editor script.
	wp_enqueue_script( 'gofresh-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'gofresh_block_editor_styles', 1, 1 );
?>