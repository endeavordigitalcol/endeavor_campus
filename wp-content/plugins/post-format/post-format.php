<?php

/**
 * Plugin Name: Post Format
 * Description: Diferent taxonomies for post. Includes Video, opinion, article and special content.
 * Version: 1.0
 * Author: Nicolás Malagón
 * Text Domain: post_format
 */

if( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin not much I can do when called directly";
    exit;
}

// Setup
define( 'POST_FORMAT_PLUGIN_URL', __FILE__ );

// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/deactivate.php' );

// Hooks
register_activation_hook( __FILE__, 'pf_activate_plugin' );
register_deactivation_hook( __FILE__, 'pf_deactivate_plugin' );
add_action( 'init', 'pf_init' );

// Shortcodes
