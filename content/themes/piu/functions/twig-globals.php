<?php

if (is_admin()) return;

/**
 * Setup Timber Context (e.g. Menus)
 */
add_filter('timber_context', '_theme_setup_twig_context');
function _theme_setup_twig_context($data) {

	$fields_context = [];
	$fields = get_fields();
	$fields_option = get_fields('option');

	if ($fields && $fields_option) {
		$fields_context = array_merge($fields, $fields_option);
	}

	// merge data with context
	$data = array_merge($data, $fields_context);

	$data['is_front_page'] = is_front_page();
	$data['is_error'] = is_404();

	return $data;
}

/**
 * Add some data to global Twig context
 *
 * Directly accessible in every template (e.g. {{ globals.home_url }})
 */
add_filter('get_twig', '_theme_add_twig_globals');
function _theme_add_twig_globals($twig) {

	$default_data = [];

	$default_data['globals'] = array(
		'page_title' => get_the_title(),
		'permalink' => get_permalink(),
		'theme_root' => get_template_directory_uri(),
		'home_url' => get_home_url(),
		// Load unminified (true) or minified (false) assets
		'env' => array(
			'dev' => WP_DEBUG // use constant WP_DEBUG to have environment related dev mode
		),
		// Use correct templates
		'gulp' => false
	);

	if (is_front_page()) {
		$default_data['globals']['modifiers'][] = 'is-front-page';
	}

	$twig->addGlobal('globals', $default_data['globals']);

	return $twig;
}

/**
 * Get context data which is used everywhere
 *
 * Conditionally load JSON data files from gulp env
 */

function _theme_get_json_data($relative_path) {
	$data = array();

	if ($file = file_get_contents(TEMPLATEPATH . '/data/' . $relative_path)) {
		$data = json_decode($file, true);
	}

	return $data;
}
