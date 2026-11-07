<?php
/**
 * Compatibility layer for Multisite, SEO plugins, etc.
 *
 * @package Base_Box
 */

// Prevent duplicate schema / SEO tags if Yoast, RankMath or SEOPress are active
function base_box_has_seo_plugin() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'SEOPRESS_VERSION' );
}

/**
 * Handle multisite isolation:
 * Ensure theme option filters don't bleed across sub-sites if any global functions are added in the future.
 * Currently uses standard WP native APIs which automatically handle network site isolation.
 */
