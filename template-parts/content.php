<?php
/**
 * Template part for displaying posts in archives, blog, and search.
 *
 * @package Base_Box
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<figure class="post-thumbnail">
		<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
	</figure>
	<?php endif; ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php base_box_post_meta(); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'base-box' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'base-box' ),
					'after'  => '</div>',
				)
			);
		else :
			the_excerpt();
			?>
			<div class="read-more-wrapper" style="margin-top: 1rem;">
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">
					<?php esc_html_e( 'Ler artigo completo &rarr;', 'base-box' ); ?>
				</a>
			</div>
			<?php
		endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( is_singular() ) {
			base_box_entry_footer();
		} ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
