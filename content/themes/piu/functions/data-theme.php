<?php

namespace PIU\Theme;

use Timber;
use TimberLoader;

/**
 * Theme Data Class
 */

class ThemeData {

}

/*** helpers ***/

// get post
function _theme_post($id) {

	//print_r(new \TimberPost($id));
	//die();

	return new \TimberPost($id);
}
