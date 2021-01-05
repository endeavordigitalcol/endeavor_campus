<?php

// Setup
define( 'CA_DEV_MODE', true );

// Includes
include(get_theme_file_path( 'inc/front/enqueue.php' ));
include(get_theme_file_path( 'inc/setup.php' ));
include(get_theme_file_path( 'inc/partials/categories-imgs.php' ));

// Hooks
add_action( 'wp_enqueue_scripts', 'ca_enqueue');
add_action('after_setup_theme', 'ca_setup_theme');
add_action('get_categories_imgs', 'categories_imgs');

// Shortcodes