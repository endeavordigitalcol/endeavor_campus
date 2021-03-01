<?php

function nps_form(){
    global $wpdb;

    $email          = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $nps_score      = intval(substr($_POST['nps_score'], 10));
    $reason         = isset($_POST['reason']) ? sanitize_text_field($_POST['reason']) : '';
    $themes         = isset($_POST['themes']) ? sanitize_text_field($_POST['themes']) : '';
    $nps_formats    = isset($_POST['formats']) ? json_encode($_POST['formats']) : '';

    $table_name     = $wpdb->prefix . 'nps';
    $email_count    = intval($wpdb->get_var("SELECT COUNT(*) FROM `" . $table_name . "` WHERE `email`='" . $email . "';"));

    $data = array(
        'email'     => $email,
        'ip'        => $_SERVER['REMOTE_ADDR'],
        'score'     => $nps_score,
        'why'       => $reason,
        'themes'    => $themes,
        'formats'   => $nps_formats
    );

    if($email_count == 0){
        $wpdb->insert($table_name, $data);

        wp_send_json(1);
    }else{
        $where_data = array(
            'email' => $email
        );

        $wpdb->update($table_name, $data, $where_data);

        wp_send_json(1);
    }

    wp_send_json(0);
}