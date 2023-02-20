<?php
/**
 * Logo Component
 * Handles the markup for the logo component
 *
 * @package TenUpTheme
 */

?>

<div class="flex justify-start">
	<?php
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
	?>
</div>
