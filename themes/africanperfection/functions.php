<?php
/**
 * WP Theme constants and setup functions
 *
 * @package TenUpTheme
 */

// Useful global constants.
define( 'TENUP_THEME_VERSION', '0.1.0' );
define( 'TENUP_THEME_TEMPLATE_URL', get_template_directory_uri() );
define( 'TENUP_THEME_PATH', get_template_directory() . '/' );
define( 'TENUP_THEME_DIST_PATH', TENUP_THEME_PATH . 'dist/' );
define( 'TENUP_THEME_DIST_URL', TENUP_THEME_TEMPLATE_URL . '/dist/' );
define( 'TENUP_THEME_INC', TENUP_THEME_PATH . 'includes/' );
define( 'TENUP_THEME_BLOCK_DIR', TENUP_THEME_INC . 'blocks/' );

$is_local_env = in_array( wp_get_environment_type(), array( 'local', 'development' ), true );
$is_local_url = strpos( home_url(), '.test' ) || strpos( home_url(), '.local' );
$is_local     = $is_local_env || $is_local_url;

require_once TENUP_THEME_INC . 'core.php';
require_once TENUP_THEME_INC . 'overrides.php';
require_once TENUP_THEME_INC . 'template-tags.php';
require_once TENUP_THEME_INC . 'utility.php';
require_once TENUP_THEME_INC . 'blocks.php';

// Run the setup functions.
TenUpTheme\Core\setup();
TenUpTheme\Blocks\setup();
TenUpTheme\Overrides\setup();

// Require Composer autoloader if it exists.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for the the new wp_body_open() function that was added in 5.2
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
