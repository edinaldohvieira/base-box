<?php
/**
 * The header for the theme
 *
 * @package Base_Box
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'base-box'); ?></a>

<header id="masthead" class="site-header">
	<div class="header-container">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Menu', 'base-box' ); ?>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'nav-menu',
				'container'      => false,
			) );
			?>
		</nav>
	</div>
</header>

<div id="content" class="site-content">
