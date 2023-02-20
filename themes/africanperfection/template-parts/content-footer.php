<?php
/**
 * Footer Component
 * Handles the markup for the footer component
 *
 * @package TenUpTheme
 */

?>

<footer class="px-4 border-t border-[#ebebeb] border-solid" id="" aria-label="" role="contentinfo">
	<div class="max-w-screen-2xl mx-auto py-7 lg:py-14 flex justify-center items-center flex-col">
		<p class="text-center text-xl font-semibold">African Perfection voted #1 B&B in Jeffreys Bay 6 years consecutively by travelers using Tripadvisor</p>
		<img alt="" width="161" height="120" loading="lazy" decoding="async" src="<?php echo esc_url( TENUP_THEME_DIST_URL . 'images/animation-trip-advisor.gif' ); ?>" />
	</div>
	<div class="border-t border-[#ebebeb]">
		<div class=" grid lg:grid-cols-2 gap-4 py-6 max-w-screen-2xl mx-auto">
			<p class="flex text-center lg:text-left text-xs lg:text-sm justify-center lg:justify-start">
				<?php
					/* translators: %1$s: current year, %2$s: blog name */
					echo sprintf( esc_html__( '&copy; %1$s %2$s. All Rights Reserved.', 'african-perfection' ), esc_html( get_the_date( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) );
				?>
			</p>
			<nav class="flex justify-center lg:justify-end" id="" aria-label="" role=" navigation">
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'menu_class'     => 'footer-menu',
						)
					);
				}
				?>
			</nav>
		</div>
	</div>
</footer>
