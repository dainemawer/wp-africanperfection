<?php
/**
 * Navigation Component
 * Handles the markup for the navigation component
 *
 * @package TenUpTheme
 */

?>

<nav class="flex items-center justify-end" id="" aria-label="" role="navigation">
	<button id="navigation-drawer-btn" aria-controls="navigation-drawer" aria-expanded="false" aria-haspopup="true" class="text-bunting block lg:hidden cursor-pointer" type="button">
		<svg class="pointer-events-none" fill=" none" stroke="currentColor" stroke-width="1.5" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
		</svg>
		<span class="sr-only">
			<?php echo esc_html__( 'Toggle Drawer Navigation', 'african-perfection' ); ?>
		</span>
	</button>
	<div id="navigation-drawer" class="drawer">
		<?php
		if ( has_nav_menu( 'header' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'container'      => false,
					'menu_class'     => 'header-menu',
				)
			);
		}
		?>
	</div>
</nav>
