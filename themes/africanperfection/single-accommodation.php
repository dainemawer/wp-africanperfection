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
		<div class="entry-content entry-content-wide my-8 lg:my-16 prose-headings:text-cloudburst">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
