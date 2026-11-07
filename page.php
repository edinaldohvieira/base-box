<?php
/**
 * The template for displaying all pages.
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
	?>
</main>

<?php get_footer(); ?>