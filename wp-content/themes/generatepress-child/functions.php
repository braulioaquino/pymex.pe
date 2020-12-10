<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

// Quitando Gutemberg
add_filter('use_block_editor_for_post', '__return_false', 10);
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );
}

// Quitando estilos de jetpack del front
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );
