# Setup

## Installation Instructions

First install composer
https://getcomposer.org/
and install composer dependencies
`$ composer install`

After that install global kirby cli
`$ composer global require getkirby/cli`

Place the directory `~/.composer/vendor/bin`in your PATH:
`$ export PATH="$PATH:$HOME/.composer/vendor/bin"`

Add a kirby installation
`$ kirby install`

Go to the kirby installation directory and install the kirby-twig plugin
`$ cd kirby` 
`$ kirby plugin:install fvsch/kirby-twig`
