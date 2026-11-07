<?php
/**
 * Custom template tags and helper functions
 *
 * @package Base_Box
 */

if ( ! function_exists( 'base_box_post_meta' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function base_box_post_meta() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Publicado em %s', 'post date', 'base-box' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'por %s', 'post author', 'base-box' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span> <span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

/**
 * Render the front page hero section
 */
function base_box_render_front_hero() {
	?>
	<section class="hero-section">
		<h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
		<p class="hero-subtitle"><?php bloginfo( 'description' ); ?></p>
		<div class="hero-buttons">
			<a href="#primary" class="btn btn-primary"><?php esc_html_e( 'Começar agora', 'base-box' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Ver Blog', 'base-box' ); ?></a>
		</div>
	</section>
	<?php
}
add_action( 'base_box_front_hero', 'base_box_render_front_hero' );

/**
 * Render a posts grid after front page content
 */
function base_box_render_posts_grid() {
	$recent_posts = new WP_Query( array(
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	) );

	if ( $recent_posts->have_posts() ) : ?>
		<section class="front-posts-grid">
			<h2 class="section-title"><?php esc_html_e( 'Artigos Recentes', 'base-box' ); ?></h2>
			<div class="posts-grid">
				<?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
						<h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="card-excerpt"><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; ?>
			</div>
		</section>
	<?php 
	wp_reset_postdata();
	endif;
}
add_action( 'base_box_after_front_content', 'base_box_render_posts_grid' );

if ( ! function_exists( 'base_box_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function base_box_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'base-box' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				sprintf( esc_html__( 'Categorias: %1$s', 'base-box' ), $categories_list );
				echo '<span class="cat-links">' . sprintf( esc_html__( 'Categorias: %1$s', 'base-box' ), $categories_list ) . '</span> '; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'base-box' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				echo '<span class="tags-links">' . sprintf( esc_html__( 'Tags: %1$s', 'base-box' ), $tags_list ) . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;
