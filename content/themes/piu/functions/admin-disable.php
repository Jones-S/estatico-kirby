<?php
/**
 * Hide options from the admin menu
 */
add_action( 'admin_menu', 'theme_hide_menu_pages' );
function theme_hide_menu_pages() {
    //remove_menu_page('edit.php');					// posts
    remove_menu_page('edit-comments.php'); 			// comments
    remove_menu_page('tools.php');

    // remove options page for roles lower then admin, needed because semi-admin has manage_options capaiblity
    if(!current_user_can('administrator')) {
    	remove_menu_page('options-general.php');
    	remove_menu_page('edit.php?post_type=acf-field-group');
    }
}

/*
 * Add redirect menu item for semi-admin user
 */

if(current_user_can('manage_options') && !current_user_can('administrator')) {
	add_action('admin_menu', 'theme_add_dashboard_menu');
}

function theme_add_dashboard_menu() {
    add_menu_page(
        'Redirects',
        'Redirects',
        'manage_options',
        'options-general.php?page=301options',
        '',
        'dashicons-randomize',
        55
    );
}

/**
 * Remove thumb support on post as keyvisual field is being used
 */
add_action('init','remove_thumbnail_support');
function remove_thumbnail_support(){
	remove_post_type_support('post','thumbnail');
}

/**
 * Prevent deletion of certain pages, used for fixed breadcrumbs currently
 */

function theme_restrict_post_deletion($post_ID) {
    $restricted_pages = array(665, 668, 671);

    if (in_array($post_ID, $restricted_pages)) {
        echo 'Diese Seite darf nicht gel&ouml;scht werden.';
        exit;
    }
}

add_action('wp_trash_post', 'theme_restrict_post_deletion', 10, 1);
add_action('before_delete_post', 'theme_restrict_post_deletion', 10, 1);

/**
 * Remove category meta box from post
 */

function remove_my_post_metaboxes() {
  remove_meta_box( 'categorydiv','post','normal' ); // Categories Metabox
  remove_meta_box( 'tagsdiv-post_tag','post','normal' ); // Tags Metabox
}
add_action('admin_menu','remove_my_post_metaboxes');
