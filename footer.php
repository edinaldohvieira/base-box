<?php
/**
 * The footer for the theme
 *
 * @package Base_Box
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer-container footer-grid">
		
		<div class="footer-col-1">
			<?php if ( is_active_sidebar( 'footer-1' ) ) :
				dynamic_sidebar( 'footer-1' );
			else : ?>
				<div class="site-title"><?php bloginfo( 'name' ); ?></div>
				<p><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
		</div>

		<div class="footer-col-2">
			<h3 class="footer-title"><?php esc_html_e( 'NAVEGAÇÃO', 'base-box' ); ?></h3>
			<?php wp_nav_menu( array(
				'theme_location' => 'footer',
				'container'      => false,
				'menu_class'     => 'footer-menu',
			) ); ?>
		</div>

		<div class="footer-col-3">
			<h3 class="footer-title"><?php esc_html_e( 'CONTATO', 'base-box' ); ?></h3>
			<?php if ( is_active_sidebar( 'footer-3' ) ) :
				dynamic_sidebar( 'footer-3' );
			endif; ?>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>