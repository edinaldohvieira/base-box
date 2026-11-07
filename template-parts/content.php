<?php
/**
 * Template part for posts and pages in the main content area.
 *
 * @package Base_Box
 */

?>

<?php if (have_posts()) { ?>

	<div class="posts-grid">

		<?php while (have_posts()) {
			the_post();

			get_template_part('template-parts/content', get_post_type());

		}?>

	</div>

	<div class="pagination">
		<?php the_posts_pagination(array('mid_size' => 1, 'type' => 'list')); ?>
	</div>

<?php } else {

		get_template_part('template-parts/content', 'none');

} ?>