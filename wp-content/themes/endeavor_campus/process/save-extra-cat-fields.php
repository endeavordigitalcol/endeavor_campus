<?php 

function edited_category_extra_fields( $term_id ){
    if( isset( $_POST['cat_meta'] ) ){
        $term_id = $term_id;
        $cat_meta = $cat_meta = get_term_meta($term_id);

        $cat_keys = array_keys( $_POST['cat_meta'] );

        var_dump( $cat_keys );

        foreach( $cat_keys as $key ){
            if( isset( $_POST['cat_meta'][$key] ) ){
                $cat_meta[$key] = $_POST['cat_meta'][$key];

                update_term_meta( $term_id, $key, $_POST['cat_meta'][$key] );
            }
        }        
    }
}