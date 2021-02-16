<?php

function ca_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = CA_DEV_MODE ? time() : false;
    $arr_post = [
        'ajax_url'  => admin_url('admin-ajax.php'),
        'home_url'  => home_url('/'),
        'file_uri'  => get_theme_file_uri()
    ];

    wp_register_style('ca_fonts', $uri . '/assets/css/fonts.css', [], $ver);
    wp_register_style('ca_font_icons', $uri . '/assets/css/campus-icons/style.css', [], $ver);
    wp_register_style('ca_bootstrap', $uri . '/assets/css/bootstrap-4.5.3/bootstrap.css', [], $ver);
    wp_register_style('ca_style', $uri . '/assets/css/style.css', [], $ver);
    wp_register_style('ca_swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    wp_enqueue_style('ca_fonts');
    wp_enqueue_style('ca_font_icons');
    wp_enqueue_style('ca_bootstrap');
    wp_enqueue_style('ca_style');
    wp_enqueue_style('ca_swiper');

    wp_register_script('ca_swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    wp_register_script('ca_js', $uri . '/assets/js/index.js', [], $ver, true);
    wp_register_script('ca_filter_content', $uri . '/assets/js/filter-content.js', [], $ver, true);
    wp_register_script('ca_post_pagination', $uri . '/assets/js/post-pagination.js', [], $ver, true);
    wp_register_script('ca_nps', $uri . '/assets/js/nps.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ca_swiper_js');
    wp_enqueue_script('ca_js');

    wp_localize_script(
        'ca_filter_content',
        'filter_obj',
        $arr_post
    );

    wp_localize_script(
        'ca_post_pagination',
        'filter_obj',
        $arr_post
    );

    if (is_page('contenidos'))
        wp_enqueue_script('ca_filter_content');

    if (is_category())
        wp_enqueue_script('ca_post_pagination');

    if (is_page('nps-campus'))
        wp_enqueue_script('ca_nps');
}
