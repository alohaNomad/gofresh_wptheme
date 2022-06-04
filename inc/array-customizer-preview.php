<?php
/**
 * Returns an array of variables for the customizer preview.
 *
 * @since gofresh 1.0
 *
 * @return array
 */
function gofresh_get_customizer_color_vars() {
	$colors = array(
		'content'       => array(
			'setting' => 'background_color',
		),
		'header-footer' => array(
			'setting' => 'header_footer_background_color',
		),
	);
	return $colors;
}
?>