<?php
/**
 * Enqueue classic editor styles.
 *
 * @since gofresh 1.0
 */
function gofresh_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
	);

	add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'gofresh_classic_editor_styles' );

?>