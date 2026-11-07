<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Base_Box
 */

get_header(); ?>

<main id="primary" class="site-content">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'base-box' ); ?></h1>
		</header>
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'base-box' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>