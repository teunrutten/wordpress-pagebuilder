<?php
/*
Plugin Name: Pageblocks
Plugin URI: https://github.com/teunrutten/wordpress-pagebuilder
Description: Add custom pageblocks to WordPress
Version: 1.6.0
Author: Bureau Bright
Author URI: https://github.com/teunrutten/
*/

add_action( 'plugins_loaded', function () {

  define( 'PB_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
  define( 'PB_PLUGIN_DIR', dirname( __FILE__  ) );

  require __DIR__ . '/lib/Pageblocks.php';
  require __DIR__ . '/lib/Helpers.php';
  require __DIR__ . '/lib/Display.php';
} );
