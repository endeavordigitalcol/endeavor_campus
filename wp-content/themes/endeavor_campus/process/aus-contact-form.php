<?php

function aus_contact_form(){
    $response = null;

    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $msg = isset($_POST['msg']) ? sanitize_textarea_field($_POST['msg']) : '';

    aus_contact_form_db($name, $email, $msg);

    $email_format = '<p>De: ' . $name . '</p>';
    $email_format .= '<p>Email: ' . $email . '</p>';
    $email_format .= '<p>Mensaje:</p><p>' . $msg . '</p>';

    $headers = 'From: endeavordigitalcol@gmail.com'; 

    $response = wp_mail(
        'digitalendeavorcol@gmail.com',
        'Contacto WEB SITE ENDEAVOR CAMPUS',
        $email_format,
        $headers
    );

    wp_send_json( $response );
}

function aus_contact_form_db($name, $email, $msg){
    global $wpdb;
    $table_name = $wpdb->prefix . 'aus_contact_form';

    $data = array(
        'name'      => $name,
        'email'     => $email,
        'message'   => $msg   
    );

    $wpdb->insert($table_name, $data);
}