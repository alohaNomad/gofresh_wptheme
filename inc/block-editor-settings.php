<?php
/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 *
 * @since gofresh 1.0
 */
function gofresh_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Accent Color', 'gofresh' ),
			'slug'  => 'accent',
			'color' => gofresh_get_color_for_area( 'content', 'accent' ),
		),
		array(
			'name'  => _x( 'Primary', 'color', 'gofresh' ),
			'slug'  => 'primary',
			'color' => gofresh_get_color_for_area( 'content', 'text' ),
		),
		array(
			'name'  => _x( 'Secondary', 'color', 'gofresh' ),
			'slug'  => 'secondary',
			'color' => gofresh_get_color_for_area( 'content', 'secondary' ),
		),
		array(
			'name'  => __( 'Subtle Background', 'gofresh' ),
			'slug'  => 'subtle-background',
			'color' => gofresh_get_color_for_area( 'content', 'borders' ),
		),
	);

	// Add the background option.
	$background_color = get_theme_mod( 'background_color' );
	if ( ! $background_color ) {
		$background_color_arr = get_theme_support( 'custom-background' );
		$background_color     = $background_color_arr[0]['default-color'];
	}
	$editor_color_palette[] = array(
		'name'  => __( 'Background Color', 'gofresh' ),
		'slug'  => 'background',
		'color' => '#' . $background_color,
	);

	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'gofresh' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'gofresh' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'gofresh' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'gofresh' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'gofresh' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'gofresh' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'gofresh' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'gofresh' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

	add_theme_support( 'editor-styles' );

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( gofresh_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}

}

add_action( 'after_setup_theme', 'gofresh_block_editor_settings' );
?>