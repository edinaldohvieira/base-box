<?php
/**
 * Base Box functions and definitions
 *
 * @package Base_Box
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define constants
 */
define( 'BASE_BOX_VERSION', '1.0.0' );
define( 'BASE_BOX_DIR', get_template_directory() );
define( 'BASE_BOX_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
require BASE_BOX_DIR . '/inc/setup.php';

/**
 * Enqueue scripts and styles
 */
require BASE_BOX_DIR . '/inc/enqueue.php';

/**
 * Template functions
 */
require BASE_BOX_DIR . '/inc/template-functions.php';

/**
 * Compatibility (WPMU, SEO plugins, etc.)
 */
require BASE_BOX_DIR . '/inc/compatibility.php';
