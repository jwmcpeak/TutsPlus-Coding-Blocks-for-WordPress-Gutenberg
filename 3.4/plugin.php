<?php
/**
 * Plugin Name: bootstrap-alert — A Bootstrap alert picker
 * Plugin URI: https://tutsplus.com
 * Description: bootstrap-alert — A plugin for easily adding Bootstrap alerts.
 * Author: Jeremy McPeak
 * Author URI: https://www.wdonline.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
