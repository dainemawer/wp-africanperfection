<?php
/**
 * The main template file
 *
 * @package TenUpTheme
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<div class="entry-content entry-content-wider mb-8 mt-0 prose-headings:text-cloudburst">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
