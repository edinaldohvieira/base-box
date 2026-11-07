<?php
/**
 * Template for a single blog post.
 *
 * @package Base_Box
 */

?>

<article id="post-<?php the_ID(); ?>" class="post card">

	<?php if (has_post_thumbnail()) { ?>
	<figure class="post-thumbnail">
		<?php the_post_thumbnail('large'); ?>
	</figure>
	<?php } ?>

	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry-meta">
			<?php base_box_post_meta(); ?>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'base-box') . '</span>', 'after' => '</div>')); ?>
	</div>

	<footer class="entry-footer">
		<?php base_box_entry_footer(); ?>
	</footer>

</article>