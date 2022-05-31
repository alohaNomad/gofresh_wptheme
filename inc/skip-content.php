<?php
/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 *
 * @since gofresh 1.0
 */
function gofresh_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'gofresh' ) . '</a>';
}

add_action( 'wp_body_open', 'gofresh_skip_link', 5 );
?>