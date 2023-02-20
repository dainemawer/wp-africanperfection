<?php
/**
 * Header Component
 * Handles the markup for the footer component
 *
 * @package TenUpTheme
 */

$offset = is_admin_bar_showing() ? 'top-8' : 'top-0';
?>

<a href="#main" class="sr-only focus:not-sr-only"><?php echo esc_html_e( 'Skip to main content', 'africanperfection' ); ?></a>

<header class="shadow-md bg-[#fff] px-4 sticky <?php echo esc_attr( $offset ); ?> z-10" id="" aria-label="" role=" banner">
	<div class="grid grid-cols-2 gap-4 max-w-screen-2xl mx-auto">
		<?php get_template_part( 'template-parts/content', 'logo' ); ?>
		<?php get_template_part( 'template-parts/content', 'navigation' ); ?>
	</div>
</header>
