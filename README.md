# Setup

## Installation Instructions

First install composer
https://getcomposer.org/

Then install the kirby client globally via composer:

```$ composer global require getkirby/cli```


Place the directory 

```~/.composer/vendor/bin``` 

in your PATH:

```$ export PATH="$PATH:$HOME/.composer/vendor/bin"```


Finally install composer dependencies

```$ composer install```

This will not only install the dependencies (which include twig support for the kirby cms) but also execute a postinstall, which installs a core installation of kirby.


Further installation steps are required. To do so, go to the `theme` directory with your terminal. Node and the node package manager need to be installed prior to the next steps.

```$ nvm use```

```$ npm install```

Now everything should be installed properly.





## System and Usage

A site consists of pages and modules (twig templates), which are scaffolded the estatico-way.
Check https://github.com/unic/estatico for further information on how to scaffold modules and run a local server.

For a working kirby environment an application (like AMPPS) is needed, to run php-scripts locally.

When writing twig pages and modules they will – if the gulp task is running – copy the page-templates to the `kirby/site/templates` directory. Twig modules will be copied to the ``kirby/site/templates/modules` directory. Twig layouts in the corresponding `layouts` directory.

Controller files do handle the data for the templates. Kirby looks for a controller file with the same name like the page. This file does actually control which data is required for this specific page.

Everytime a page is loaded the site.php is called. The only thing site.php does is calling the `theme_data.php`. Theme Data is a class with methods to provide specific data.

Example:
```
<?php

/* Project Controller*/

return function($site, $pages, $page) {

    $theme_data = new ThemeData();

    $data = [];

    $data['images'] = $theme_data->getPageImages();
    $data['globals'] = $theme_data->getGlobals();

    return $data;
};
```

The above code resides within a controller file. It will return the page images and some global data (for example: all active pages for the navigation).

```
public function getGlobals() {
		$globals = [];
		// get only visible pages
		$globals['menu_pages'] = $this->kirby->site()->pages()->visible();
		return $globals;
	}
```

Shown is the getGlobals function of the ThemeData class. In this case the getGlobals is collecting all visible pages.


The content is provided via the content folder of kirby. For further information check the kirby documentation.
https://getkirby.com/docs
