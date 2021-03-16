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
    wp_register_script('ca_contact_form', $uri . '/assets/js/aus-contact-form.js', [], $ver, true);
    wp_register_script('ca_rd_station', 'https://d335luupugsy2.cloudfront.net/js/loader-scripts/71fb0af5-d199-46fd-8aa7-52ef2d44044c-loader.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ca_swiper_js');
    wp_enqueue_script('ca_js');
    wp_enqueue_script('ca_rd_station');

    ca_localize_script('ca_filter_content', $arr_post);
    ca_localize_script('ca_post_pagination', $arr_post);
    ca_localize_script('ca_nps', $arr_post);
    ca_localize_script('ca_contact_form', $arr_post);

    if (is_page('contenidos'))
        wp_enqueue_script('ca_filter_content');

    if (is_category())
        wp_enqueue_script('ca_post_pagination');

    if (is_page('nps-campus'))
        wp_enqueue_script('ca_nps');

    if (is_page('sobre-campus'))
        wp_enqueue_script('ca_contact_form');

    add_filter('script_loader_tag', 'add_async_attribute', 10, 3);
}

function ca_localize_script($script, $params){
    wp_localize_script(
        $script,
        'filter_obj',
        $params
    );
}

function add_async_attribute($tag, $handle, $src){
    if('ca_rd_station' != $handle)
        return $tag;

    $tag = '<script type="text/javascript" async src="' . esc_url( $src ) . '"></script>';
    return $tag;
}
