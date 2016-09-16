<?php

class ThemeData {

	function __construct() {
		$this->kirby = kirby();
	}

	public function getGlobals() {
		$globals = [];
		// get only visible pages
		$globals['menu_pages'] = $this->kirby->site()->pages()->visible();
		return $globals;
	}

	public function getPageImages() {
		return $this->kirby->page()->images();
	}

	public function getProjects($limit) {
		return $this->kirby->site()->pages()->find('projects')->children()->visible()->limit($limit);
	}


}
