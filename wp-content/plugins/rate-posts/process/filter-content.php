<?php

function r_filter_post_content($content){
    if (!is_singular('post')) {
        return $content;
    }

    global $post, $wpdb;

    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix ."post_ratings`
        WHERE post_id='" . $post->ID ."'"
    );

    $rating_count_self = 0;
    $ip = $_SERVER['REMOTE_ADDR'];

    if( $rating_count > 0 ){
        $rating = round($wpdb->get_var(
            "SELECT AVG(`rating`) FROM `" . $wpdb->prefix . "post_ratings`
            WHERE post_id='" .  $post->ID . "'"
        ));

        $rating_count_self = $wpdb->get_var(
            "SELECT COUNT(*) FROM `" . $wpdb->prefix ."post_ratings`
            WHERE post_id='" . $post->ID ."' AND user_ip='" . $ip . "'"
        );
    }
    
    $post_data                  = get_post_meta($post->ID, 'post_data', true);
    
    $post_data                  = empty($post_data) ? [] : $post_data;
    $post_data['rating']        = isset($rating) ? $rating : 0;
    $post_data['rating_count']  = $rating_count;
    
    update_post_meta($post->ID, 'post_data', $post_data);
    
    $post_tpl_res = wp_remote_get(
        plugins_url( 'process/rate-post-template.php', RATE_POSTS_PLUGIN_URL )
    );
    $post_html  = wp_remote_retrieve_body( $post_tpl_res );
    $post_html  = str_replace( 'RATE_I18N', __('¡Califica este contenido!', 'rate_posts'), $post_html );
    $post_html  = str_replace( 'POST_ID', $post->ID, $post_html ); 
    $post_html  = str_replace( 'POST_RATING', $post_data['rating'], $post_html );

    if( $rating_count_self > 0 ){
        $post_html = str_replace( 'READONLY_PLACEHOLDER', 'data-rateit-READONLY="true"', $post_html );
    }else{
        $post_html = str_replace( 'READONLY_PLACEHOLDER', '', $post_html );
    }

    return $content . $post_html;
}
