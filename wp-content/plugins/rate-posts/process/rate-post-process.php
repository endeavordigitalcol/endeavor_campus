<?php

function r_rate_post(){
    global $wpdb;

    $output     = [ 'status' => 1 ];
    $post_ID    = absint( $_POST[ 'pid' ] );
    $rating     = absint($_POST[ 'rating' ]) + 1;
    $user_IP    = $_SERVER[ 'REMOTE_ADDR' ];  
    
    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix ."post_ratings`
        WHERE post_id='" . $post_ID ."' AND user_ip='" . $user_IP . "'"
    );

    if( $rating_count > 0 ){
        wp_send_json( $output );
    }

    $wpdb->insert(
        $wpdb->prefix . 'post_ratings',
        [
            'post_id'   => $post_ID,
            'rating'    => $rating,
            'user_ip'   => $user_IP
        ],
        [ '%d', '%d', '%s']
    );

    $post_data = get_post_meta($post_ID, 'post_data', true);
    $post_data['rating_count']++;
    $post_data['rating'] = round($wpdb->get_var(
        "SELECT AVG(`rating`) FROM `" . $wpdb->prefix . "post_ratings`
        WHERE post_id='" .  $post_ID . "'"
    ));

    update_post_meta( $post_ID, 'post_data', $post_data );
    $output['rating'] = $post_data['rating'];
    $output['status'] = 2;

    wp_send_json( $output );
}