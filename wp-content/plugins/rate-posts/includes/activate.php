<?php

function r_activate_plugin(){
    // 5.8 < 5.0
    if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ){
        wp_die( __( "You must update Wordpress to use this plugin.", 'rate_posts') );
    }

    global $wpdb;
    $createSQL = "
        CREATE TABLE `" . $wpdb->prefix . "post_ratings` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
        `post_id` BIGINT(20) UNSIGNED NOT NULL ,
        `rating` TINYINT(1) UNSIGNED NOT NULL ,
        `user_ip` VARCHAR(50) NOT NULL ,
        `rating_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`ID`)
        ) ENGINE = InnoDB " . $wpdb->get_charset_collate() . ";";

    require( ABSPATH . "/wp-admin/includes/upgrade.php" );
    dbDelta( $createSQL );
}