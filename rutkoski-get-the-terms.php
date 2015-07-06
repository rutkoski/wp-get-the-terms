<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://devcafe.com.br
 * @since             1.0.1
 * @package           Rutkoski_Get_The_Terms
 *
 * @wordpress-plugin
 * Plugin Name:       Get the terms
 * Plugin URI:        https://github.com/rutkoski/wp-get-the-terms
 * Description:       Shortcode for Wordpress function get_the_terms
 * Version:           1.0.0
 * Author:            Rodrigo Rutkoski Rodrigues
 * Author URI:        http://devcafe.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rutkoski-get-the-terms
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/rutkoski/wp-get-the-terms
 * GitHub Branch:     master
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rutkoski-get-the-terms-activator.php
 */
function activate_rutkoski_get_the_terms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rutkoski-get-the-terms-activator.php';
	Rutkoski_Get_The_Terms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rutkoski-get-the-terms-deactivator.php
 */
function deactivate_rutkoski_get_the_terms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rutkoski-get-the-terms-deactivator.php';
	Rutkoski_Get_The_Terms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rutkoski_get_the_terms' );
register_deactivation_hook( __FILE__, 'deactivate_rutkoski_get_the_terms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rutkoski-get-the-terms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rutkoski_get_the_terms() {

	$plugin = new Rutkoski_Get_The_Terms();
	$plugin->run();

}
run_rutkoski_get_the_terms();
