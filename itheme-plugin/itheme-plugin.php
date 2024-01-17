<?php

/**
 * @package IthemePlugin
 */
/*
Plugin Name: Itheme Plugin
Plugin URI: https://crebsol.com
Description: This is first Plugin
Version: 1.0.0
Author: Imdadul Haque
Author URI: https://crebsol.com
LicenseL GPLv2 or later
Text Domain: ithemplugin
*/
if (!defined('ABSPATH')) {
    die;
}

// Define Path 
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));


// Admin Page Link 
require_once PLUGIN_PATH . '/inc/pages/admin.php';

// Setting Api Page Link 
require_once PLUGIN_PATH . '/inc/api/settings-api.php';

// Enqueue Page Link 
require_once PLUGIN_PATH . '/inc/base/enqueue.php';

// Admin Page Link 
require_once PLUGIN_PATH . '/inc/base/setting-link.php';

// Register Activation
function itheme_activa_plugin()
{
    require_once PLUGIN_PATH . '/inc/base/itheme-active.php';
}
register_activation_hook(__FILE__, 'itheme_activa_plugin');
// Register Deactivation
function itheme_deactiva_plugin()
{
    require_once PLUGIN_PATH . '/inc/base/itheme-deactive.php';
}
register_deactivation_hook(__FILE__, 'itheme_deactiva_plugin');


// plugin_dir_path(dirname(__FILE__, 2));