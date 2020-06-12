<?php
// move this code inside the includes/coolplugin_admin.php file
add_action('admin_menu', 'coolplugin_admin_stuff');
function coolplugin_admin_stuff(){
    add_options_page("CoolPlugin Admin Page", "CoolPlugin Admin Page", 1, "CoolPlugin Admin Page", "coolplugin_admin_view");
    }
}

// add this new code
function coolplugin_admin_view(){
    // include admin view
    if (file_exists(WP_PLUGIN_DIR . '/coolplugin/views/coolplugin_admin_view.php')) {
        require_once WP_PLUGIN_DIR . '/coolplugin/views/coolplugin_admin_view.php';
    }
}