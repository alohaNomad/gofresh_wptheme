<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage gofresh
 * @since gofresh 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'gofresh_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 *
		 * @since gofresh 1.0
		 */
		class gofresh_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 *
			 * @since gofresh 1.0
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
