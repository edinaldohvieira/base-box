<?php
/**
 * The template for displaying the blog posts index.
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<div class="content-area">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				echo '<h1 class="page-title">' . single_post_title( '', false ) . '</h1>';
			endif;
			get_template_part( 'template-parts/content' );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>