<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://takirathemes.com/plugins
 * @since             1.0.0
 * @package           Portfolio_Magic
 *
 * @wordpress-plugin
 * Plugin Name:       Portfolio Magic
 * Plugin URI:        http://takirathemes.com/plugins/portfolio_magic
 * Description:       A portfolio plugin brought to you by TakiraThemes
 * Version:           1.1.2
 * Author:            Takira Themes
 * Author URI:        http://takirathemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       portfolio-magic
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PM_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
 
/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-portfolio-magic.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/aq_resizer.php';

require plugin_dir_path( __FILE__ ) . 'includes/class-gamajo-template-loader.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-pm-template-loader.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_portfolio_magic() {

	$plugin = new Portfolio_Magic();
	$plugin->run();

}
run_portfolio_magic();
