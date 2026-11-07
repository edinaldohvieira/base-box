<?php
/**
 * The footer for the theme
 *
 * @package Base_Box
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<div class="footer-branding">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			
			<div class="site-info">
				<?php $current_year = (int) date( 'Y' ); ?>
				&copy; <?php echo esc_html( $current_year ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
			</div>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'depth'          => 1,
				) );
				?>
			</nav>
		<?php endif; ?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
