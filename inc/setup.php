<?php
/**
 * Theme Setup
 *
 * @package Base_Box
 */

if ( ! function_exists( 'base_box_setup' ) ) :
	function base_box_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register Menus
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'base-box' ),
			'footer'  => esc_html__( 'Footer Menu', 'base-box' ),
		) );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for wide and full alignment for Gutenberg blocks.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/main.css' );
	}
endif;
add_action( 'after_setup_theme', 'base_box_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function base_box_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'base_box_content_width', 800 );
}
add_action( 'after_setup_theme', 'base_box_content_width', 0 );

/**
 * Register widget area.
 */
function base_box_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'base-box' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'base-box' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'base_box_widgets_init' );
