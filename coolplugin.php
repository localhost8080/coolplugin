<?php
/*
Plugin name: coolplugin
Plugin URI: http://coolplugin.com/
Description: Description about coolplugin 
Author: AUTHOR_NAME
Author URI: http://coolplugin.com
Version: 0.1
*/

if (file_exists(WP_PLUGIN_DIR . '/coolplugin/vendor/autoload.php')) {
    require_once WP_PLUGIN_DIR . '/coolplugin/vendor/autoload.php';
}

// include admin page
if (file_exists(WP_PLUGIN_DIR . '/coolplugin/includes/coolplugin_admin.php')) {
    require_once WP_PLUGIN_DIR . '/coolplugin/includes/coolplugin_admin.php';
}

register_activation_hook( __FILE__, 'coolplugin_activate' );
function coolplugin_activate() {
    //code 
}

register_deactivation_hook( __FILE__, 'coolplugin_deactivate' );
function coolplugin_deactivate() {
    //code
}

register_uninstall_hook( __FILE__, 'coolplugin_uninstall' );
function coolplugin_uninstall() {
    //code 
}

add_action( 'init', 'coolplugin_dostuff' );
function coolplugin_dostuff(){
    //code
}

