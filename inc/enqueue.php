<?php
/**
 * Enqueue scripts and styles
 *
 * @package Base_Box
 */

function base_box_scripts() {
	// Enqueue main stylesheet.
	wp_enqueue_style( 'base-box-style', BASE_BOX_URI . '/assets/css/main.css', array(), BASE_BOX_VERSION );

	// Enqueue navigation JS script with defer.
	wp_enqueue_script( 'base-box-navigation', BASE_BOX_URI . '/assets/js/navigation.js', array(), BASE_BOX_VERSION, true );

	// Threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'base_box_scripts' );

/**
 * Add defer attribute to template scripts for performance
 */
function base_box_script_loader_tag( $tag, $handle, $src ) {
	if ( 'base-box-navigation' === $handle ) {
		return str_replace( ' src', ' defer src', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'base_box_script_loader_tag', 10, 3 );
