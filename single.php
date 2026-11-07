<?php
/**
 * The template for displaying all single posts.
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<div class="content-area">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'post' );
			the_post_navigation();
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>