<?php
/**
 * Template part for the main page content.
 *
 * @package Base_Box
 */

?>

<?php if (is_front_page() && is_home()) { ?>
	<!-- Front page with hero section and posts grid -->
	<?php get_template_part('template-parts/content', 'front'); ?>
<?php } else { ?>
	<?php get_template_part('template-parts/content'); ?>
<?php } ?>