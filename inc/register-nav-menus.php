<?php
/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since gofresh 1.0
 */
function gofresh_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Side Menu', 'gofresh' ),
		'secondary' => __( 'Desktop Horizontal Menu', 'gofresh' ),
		'footer'   => __( 'Footer Menu', 'gofresh' ),
		'social'   => __( 'Social Menu', 'gofresh' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'gofresh_menus' );
?>