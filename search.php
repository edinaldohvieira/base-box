<?php
/**
 * The template for displaying search results.
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<div class="content-area">
		<?php
		if ( have_posts() ) :
			echo '<h1 class="page-title">' . sprintf( esc_html__( 'Search Results for: %s', 'base-box' ), '<span>' . get_search_query() . '</span>' ) . '</h1>';
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>