<?php
/**
 * The template for displaying the front page.
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'front' );
		endwhile;
	endif;
	?>
</main>

<?php get_footer(); ?>