<?php
/**
 * Template for a single page.
 *
 * @package Base_Box
 */

?>

<article id="post-<?php the_ID(); ?>" class="page card">

	<?php if (has_post_thumbnail()) { ?>
	<figure class="post-thumbnail">
		<?php the_post_thumbnail('large'); ?>
	</figure>
	<?php } ?>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'base-box') . '</span>', 'after' => '</div>')); ?>
	</div>

	<footer class="entry-footer">
		<?php base_box_entry_footer(); ?>
	</footer>

</article>