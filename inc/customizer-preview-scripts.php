<?php
/**
 * Enqueue scripts for the customizer preview.
 *
 * @since gofresh 1.0
 *
 * @return void
 */
function gofresh_customize_preview_init() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'gofresh-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview', 'customize-selective-refresh', 'jquery' ), $theme_version, true );
	wp_localize_script( 'gofresh-customize-preview', 'gofreshBgColors', gofresh_get_customizer_color_vars() );
	wp_localize_script( 'gofresh-customize-preview', 'gofreshPreviewEls', gofresh_get_elements_array() );

	wp_add_inline_script(
		'gofresh-customize-preview',
		sprintf(
			'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
			wp_json_encode( 'cover_opacity' ),
			wp_json_encode( gofresh_customize_opacity_range() )
		)
	);
}

add_action( 'customize_preview_init', 'gofresh_customize_preview_init' );
?>