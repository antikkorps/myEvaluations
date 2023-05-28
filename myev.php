<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/antikkorps
 * @since             1.0.0
 * @package           Myev
 *
 * @wordpress-plugin
 * Plugin Name:       My Evaluations
 * Plugin URI:        https://myevaluation.shop
 * Description:       A plugin which provides you an easy way to create evaluations for whatever you want to evaluate
 * Version:           1.0.0
 * Author:            Franck Vienot
 * Author URI:        https://github.com/antikkorps
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       myev
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MYEV_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-myev-activator.php
 */
function activate_myev() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-myev-activator.php';
	Myev_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-myev-deactivator.php
 */
function deactivate_myev() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-myev-deactivator.php';
	Myev_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_myev' );
register_deactivation_hook( __FILE__, 'deactivate_myev' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-myev.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_myev() {

	$plugin = new Myev();
	$plugin->run();

}
run_myev();
