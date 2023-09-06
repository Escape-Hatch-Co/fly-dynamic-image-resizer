<?php
/*
Plugin Name: Escape Hatch Fly Dynamic Image Resizer
Description: Dynamically create image sizes on the fly! (Successor to Fly Dynamic Image Resizer)
Version: 2.0.13
Author: Junaid Bhura (original)
Text Domain: fly-images
Update URI: https://fly.escapehatch.dev/info.json
*/

namespace JB\FlyImages;

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Plugin path.
 */
define( 'JB_FLY_PLUGIN_PATH', __DIR__ );

/**
 * Require files.
 */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once JB_FLY_PLUGIN_PATH . '/inc/class-fly-cli.php';
}
require_once JB_FLY_PLUGIN_PATH . '/inc/namespace.php';
require_once JB_FLY_PLUGIN_PATH . '/inc/helpers.php';

/**
 * Actions.
 */
add_action( 'init', __NAMESPACE__ . '\\init' );
add_filter( 'update_plugins_fly.escapehatch.dev', 'eh_fly_plugin_update', 10, 3 );
