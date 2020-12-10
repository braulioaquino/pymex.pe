<?php
/**
 * Plugin Name: GP Blog
 * Plugin URI: https://pymex.com
 * Description: Addon de blog para Generate Press
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

// Define the version
if ( ! defined( 'GENERATE_BLOG_VERSION' ) ) {
	define( 'GENERATE_BLOG_VERSION', GP_PREMIUM_VERSION );
}

// Include functions identical between standalone addon and GP Premium
require plugin_dir_path( __FILE__ ) . 'functions/generate-blog.php';
