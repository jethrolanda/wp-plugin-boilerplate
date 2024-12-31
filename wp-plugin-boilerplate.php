<?php

/**
 * Plugin Name: WP Plugin Boilerplate
 * Description: WP Plugin Boilerplate
 * Version: 1.0
 * Author: Xammis
 * Author URI: https://xammis.com/
 * Text Domain: wp-plugin-boilerplate
 * Domain Path: /languages/
 * Requires at least: 5.7
 * Requires PHP: 7.2
 */

defined('ABSPATH') || exit;

// Path Constants ======================================================================================================

define('WPPB_PLUGIN_URL',             plugins_url() . '/wp-plugin-boilerplate/');
define('WPPB_PLUGIN_DIR',             plugin_dir_path(__FILE__));
define('WPPB_CSS_ROOT_URL',           WPPB_PLUGIN_URL . 'css/');
define('WPPB_JS_ROOT_URL',            WPPB_PLUGIN_URL . 'js/');
define('WPPB_TEMPLATES_ROOT_URL',     WPPB_PLUGIN_URL . 'templates/');
define('WPPB_TEMPLATES_ROOT_DIR',     WPPB_PLUGIN_DIR . 'templates/');
define('WPPB_BLOCKS_ROOT_URL',        WPPB_PLUGIN_URL . 'blocks/');
define('WPPB_BLOCKS_ROOT_DIR',        WPPB_PLUGIN_DIR . 'blocks/');

// Require autoloader
require_once 'inc/autoloader.php';

// Require settings
require_once "settings/my-first-gutenberg-app.php";

// Run
require_once 'wp-plugin-boilerplate.plugin.php';
$GLOBALS['wppb'] = new WP_Plugin_Boilerplate();
