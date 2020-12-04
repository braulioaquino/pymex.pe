<?php
/**
 * Plugin Name: MS hora post
 * Plugin URI: https://pymex.com
 * Description: Este plugin muestra la hora que se publica el post
 * Version: 1.0.0
 * Author: MS
 * Author URI: https://pymex.com
 * Requires at least: 1
 * Tested up to: 1
 *
 * Text Domain: pymex
 * Domain Path: /languages/
 */

defined( 'ABSPATH' ) or die( '¡Sin trampas!' );

// Custom function to add time to the date / time column for future posts
function sst_post_date_column_time( $h_time, $post ) {
// If post is scheduled then add the time to the column output
if ($post->post_status == 'future') {
$h_time .= '<br>' . get_post_time( 'g:i a', false, $post );
}
// Return the column output
return $h_time;
}
add_filter ( 'post_date_column_time' , 'sst_post_date_column_time' , 10 , 2 );
?>