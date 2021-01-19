<?php

/**
 * Plugin Name: Rate posts
 * Description: Plugin for rate posts
 * Version: 1.0
 * Author: Nicolás Malagón
 * Text Domain: rate_posts
 */

if( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin not much I can do when called directly";
    exit;
}

// Setup
define( 'RATE_POSTS_PLUGIN_URL', __FILE__ );

// Includes
include('includes/activate.php');
include('process/filter-content.php');
include('includes/front/enqueue.php');
include('process/rate-post-process.php');

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin');
add_filter( 'the_content', 'r_filter_post_content' );
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts', 100 );
add_action( 'wp_ajax_r_rate_post', 'r_rate_post' );
add_action( 'wp_ajax_nopriv_r_rate_post', 'r_rate_post' );