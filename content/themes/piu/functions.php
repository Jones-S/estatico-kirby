<?php

define('THEME_ASSETS_PATH', '/assets');
define('THEME_PATH', get_template_directory_uri());
define('THEME_ASSETS_URI', get_template_directory_uri() . THEME_ASSETS_PATH);
define('THEME_ASSETS_VERSION', '0.1');
// define('THEME_TRANSLATIONS_PATH', TEMPLATEPATH .'/languages');
define('THEME_TEXTDOMAIN', 'piu');
define('THEME_VENDOR_PATH', TEMPLATEPATH .'/../../../vendor');

/**
 * Load composer dependencies
 */
if (file_exists($file = THEME_VENDOR_PATH . 'autoload.php')) {
	include_once $file;
}

/**
 * Check if Timber is active.
 */
if (!class_exists('Timber')) {
	add_action('admin_notices', function () {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="'.esc_url(admin_url('plugins.php#timber')).'">plugins page</a></p></div>';
	});

	return;
}

/**
 * Load all files
 */
foreach (glob('{' .
			TEMPLATEPATH . '/functions/*.php,' .
			TEMPLATEPATH . '/controllers/*.php,' .
			TEMPLATEPATH . '/lib/*.php' .
		'}', GLOB_BRACE) as $filename) {
	require_once($filename);
}


use PIU\Theme\ThemeSettings;
use PIU\Soil\RootsSoil;


/**
 * Adds roots soil support to zero
 *
 * @link https://github.com/roots/soil
 */
if (class_exists('Roots\Soil\Options')) {
	$soil = new RootsSoil();

	$soil->init();
}

/**
 * Adds all global needed theme settings
 */
$theme = new ThemeSettings();

$theme->init();
