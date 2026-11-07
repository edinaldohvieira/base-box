<?php
/**
 * Template part for displaying posts in archives, blog, and search.
 *
 * @package Base_Box
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card post-list-item' ); ?>>

	<?php if ( is_singular() ) : ?>

		<?php if ( has_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<?php the_post_thumbnail( 'large' ); ?>
		</figure>
		<?php endif; ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-meta">
				<?php base_box_post_meta(); ?>
			</div>
		</header>

		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'base-box' ),
				'after'  => '</div>',
			) );
			?>
		</div>

		<footer class="entry-footer">
			<?php base_box_entry_footer(); ?>
		</footer>

	<?php else : ?>
		<?php while(have_posts()):the_post(); ?>
			<!-- Layout em 2 colunas para listagem /blog, archives, search -->
			<div class="post-list-grid">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-list-thumb">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'medium_large' ); ?>
					</a>
				</div>
				<?php endif; ?>

				<div class="post-list-content">
					<header class="entry-header" style="margin-bottom: 0.75rem;">
						<h2 class="card-title" style="margin-bottom: 0.25rem;">
							<a href="<?php the_permalink(); ?>" rel="bookmark" style="text-decoration: none; color: inherit;"><?php the_title(); ?></a>
						</h2>
						<div class="entry-meta">
							<?php base_box_post_meta(); ?>
						</div>
					</header>

					<div class="card-excerpt">
						<?php the_excerpt(); ?>
					</div>

					<div class="read-more-wrapper" style="margin-top: 1rem;">
						<a href="<?php the_permalink(); ?>" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">
							<?php esc_html_e( 'Ler artigo completo &rarr;', 'base-box' ); ?>
						</a>
					</div>
					
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
