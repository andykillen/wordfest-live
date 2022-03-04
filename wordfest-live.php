<?php
/*
Plugin Name: WordFest Live
Plugin URI: https://www.wordfest.live/
Description: Simple example of autoloader
Version: 1.0.0
Author: Andrew Killen
@package wordfest-live
@since 1.0.0
@author Andrew Killen
*/

// if no WP, no joy
if(!defined('ABSPATH')){
    die('go away. I do not like you');
}

define("WORDFEST_PLUGIN_PATH", plugin_dir_path( __FILE__ ) );
define("WORDFEST_PLUGIN_URI", plugin_dir_url( __FILE__ ) );

/**
 * Autoloader for entire project
 */
require dirname(__FILE__) . "/vendor/autoload.php";

// a simple static class method
\WFlive\Content\Filters::init();

// simple instance of a class. 
$admin = new \WFlive\Admin\Actions();
