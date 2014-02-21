<?php 
/**
 * Auto Thumbnail WP-CLI
 *
 * This plugin adds the `auto-thumbnail` command to the WP-CLI command line. 
 * When run, `auto-thumbnail`, queries all posts without featured images (post thumbnails) and set the first attached image as the featured image. 
 * If you are unfamiliar with WP-CLI or command line, this plugin isn't for you. 
 *
 * @package   Auto_Thumbnail_WP_CLI
 * @author    Jonathan Harris <jonathan_harris@ipcmedia.com>
 * @license   GPL-2.0+
 * @link      http://www.ipcmedia.com/
 * @copyright 2014 IPC Media
 *
 * @wordpress-plugin
 * Plugin Name:       Auto Thumbnail WP-CLI
 * Plugin URI:        http://www.ipcmedia.com/
 * Description:       This plugin adds the auto-thumbnail command to the WP-CLI command line. 
 * Version:           1.0.0
 * Author:            IPC Media
 * Author URI:        http://www.ipcmedia.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/ipcmedia/auto-thumbnail-wp-cli
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Only include wp-cli script if WP CLI is active
if ( defined('WP_CLI') && WP_CLI ) {
	require_once( plugin_dir_path( __FILE__ ) . 'wp-cli.php' );
}