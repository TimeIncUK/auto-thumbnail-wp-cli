<?php 
/**
 * Auto Thumbnail wp-cli
 *
 * Loop through all posts, setting the first attached image as the featured images
 *
 * @package   Plugin_Name
 * @author    Jonathan Harris <jonathan_harris@ipcmedia.com>
 * @license   GPL-2.0+
 * @link      http://www.ipcmedia.com/
 * @copyright 2014 IPC Media
 *
 * @wordpress-plugin
 * Plugin Name:       @TODO
 * Plugin URI:        http://www.ipcmedia.com/
 * Description:       Loop through all posts, setting the first attached image as the featured images
 * Version:           1.0.0
 * Author:            Jonathan Harris
 * Author URI:        http://www.jonathandavidharris.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


if ( defined('WP_CLI') && WP_CLI ) {
	require_once( plugin_dir_path( __FILE__ ) . 'wp-cli/auto-thumbnail-wp-cli.php' );
}