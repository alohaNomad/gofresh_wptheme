<?php 
/**
 * Enqueue non-latin language styles.
 *
 * @since gofresh 1.0
 *
 * @return void
 */
function gofresh_non_latin_languages() {
	$custom_css = gofresh_Non_Latin_Languages::get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'gofresh-style', $custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'gofresh_non_latin_languages' );

?>