<?php
/**
 * Back To Top Component
 * Handles the markup for a sticky back to top component.
 *
 * @package TenUpTheme
 */

?>
<a id="scroll-to-top" class="decoration-none flex justify-center items-center bg-bunting fixed right-8 bottom-20 text-[#fff] w-12 h-12 rounded-full invisible opacity-0 transition-all" href="#top">
	<svg fill="none" stroke="currentColor" stroke-width="1.5" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"></path>
	</svg>
	<span class="sr-only"><?php echo esc_html_e( 'Back to top', 'africanperfection' ); ?></span>
</a>
