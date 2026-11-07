<?php
/**
 * Template for the Front Page (includes Hero section and Posts Grid).
 *
 * @package Base_Box
 */

?>

<?php
/**
 * Hook: base_box_front_hero
 *
 * @hooked base_box_render_front_hero - 10
 */
do_action('base_box_front_hero');

?>

<?php get_template_part('template-parts/content', 'page'); ?>

<?php
/**
 * Hook: base_box_after_front_content
 *
 * @hooked base_box_render_posts_grid - 10
 */
do_action('base_box_after_front_content');

?>

<?php if (is_active_sidebar('sidebar-1')) { ?>
<aside class="widget-area">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside>
<?php } ?>
