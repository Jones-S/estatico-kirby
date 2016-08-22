<?php

/**
 * Add styles and scripts
 */


function _theme_enqueue_scripts($hook) {
    wp_enqueue_script( '_theme_admin_js', THEME_ASSETS_URI .'/js/admin.js' );
}
add_action( 'admin_enqueue_scripts', '_theme_enqueue_scripts' );
