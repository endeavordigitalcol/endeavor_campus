<?php

function r_enqueue_scripts(){
    wp_register_style('r_rate_post_style', plugins_url('/assets/css/rate-post.css', RATE_POSTS_PLUGIN_URL));
    wp_enqueue_style( 'r_rate_post_style' );

    wp_register_script('r_rate_post_style_js', plugins_url('/assets/js/rate-post-st.js', RATE_POSTS_PLUGIN_URL), [ 'jquery' ], false, true);
    
    wp_localize_script('r_rate_post_style_js', 'rate_post_obj', [
        'ajax_url'  => admin_url('admin-ajax.php'),
        'home_url'  => home_url('/')
    ]);

    wp_enqueue_script('r_rate_post_style_js');
}