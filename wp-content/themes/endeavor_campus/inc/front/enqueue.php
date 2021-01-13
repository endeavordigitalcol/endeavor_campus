<?php

function ca_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = CA_DEV_MODE ? time() : false;

    wp_register_style('ca_fonts', $uri . '/assets/css/fonts.css', [], $ver);
    wp_register_style('ca_bootstrap', $uri . '/assets/css/bootstrap-4.5.3/bootstrap.css', [], $ver);
    wp_register_style('ca_style', $uri . '/assets/css/style.css', [], $ver);
    wp_register_style('ca_swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    wp_enqueue_style('ca_fonts');
    wp_enqueue_style('ca_bootstrap');
    wp_enqueue_style('ca_style');
    wp_enqueue_style('ca_swiper');

    wp_register_script('ca_swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    wp_register_script('ca_js', $uri . '/assets/js/index.js', [], $ver, true);
    wp_register_script('ca_filter_content', $uri . '/assets/js/filter-content.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ca_swiper_js');
    wp_enqueue_script('ca_js');

    wp_localize_script(
        'ca_filter_content',
        'filter_obj',
        [
            'ajax_url'  => admin_url( 'admin-ajax.php' ),
            'home_url'  => home_url( '/' ),
            'file_uri'  => get_theme_file_uri()
        ]
    );

    if( is_page('contenidos') )
        wp_enqueue_script( 'ca_filter_content' );

}
