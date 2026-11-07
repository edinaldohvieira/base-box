<?php
/**
 * Template for when no content is found.
 *
 * @package Base_Box
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Nothing Found', 'base-box'); ?></h1>
	</header>

	<div class="page-content">
		<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try searching for something else.', 'base-box'); ?></p>
		<?php
			get_search_form();
		?>
	</div>
</section>

<?php if (is_user_logged_in() && current_user_can('edit_posts')) { ?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Potential Search', 'base-box'); ?></h1>
	</header>

	<div class="page-content">
		<p><?php esc_html_e('Did you look everywhere? Try the search above, or if you feel adventurous, write a post.', 'base-box'); ?></p>
	</div>
</section>
<?php } ?>