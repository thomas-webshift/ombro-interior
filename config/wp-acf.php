<?php

/**
 * Enable Google Maps API for back-end usage. (ACF Google Maps Field)
 */
if(get_field('google_map_api','options')){
    function my_acf_google_map_api( $api ){
        $api['key'] = get_field( 'google_map_api', 'option' );
        return $api;
    }
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
}