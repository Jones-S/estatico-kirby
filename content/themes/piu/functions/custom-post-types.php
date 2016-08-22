<?php


add_action( 'init', 'create_post_type' );
function create_post_type() {

	/**
	 * Guns
	 */

	$gun_labels = array(
		'name'               => 'Guns',
		'singular_name'      => 'Gun',
		'menu_name'          => 'Guns',
		'name_admin_bar'     => 'Guns',
		'add_new'            => 'New Gun',
		'add_new_item'       => 'New Gun',
		'new_item'           => 'New Gun',
		'edit_item'          => 'Edit Gun',
		'view_item'          => 'View Gun',
		'all_items'          => 'All Guns',
		'search_items'       => 'Search Gun',
		'parent_item_colon'  => 'Parent:',
		'not_found'          => 'No Gun Found.',
		'not_found_in_trash' => 'No Gun Found.'
	);

	$gun_args = array(
		'labels'             => $gun_labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail'),
		'menu_icon' => 'dashicons-megaphone'
	);

	register_post_type( 'gun', $gun_args );

}

/**
 * Remove dublicate post menu entry
 */

add_action('admin_menu','theme_remove_default_post_type');
function theme_remove_default_post_type() {
	remove_menu_page('edit.php');
}

