<?php
/**
 * The template for displaying archive pages.
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<div class="content-area">
		<?php
		if ( have_posts() ) :
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			get_template_part( 'template-parts/content' );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>