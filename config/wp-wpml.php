<?php

/** Aanmaken taalclasse aan body =================================== */
function append_language_class( $classes ) {
	$classes[] = ICL_LANGUAGE_CODE;
	return $classes;
}
add_filter( 'body_class', 'append_language_class' );

// Zorgt ervoor dat de options globaal werken met vertalingen ===================================//
add_filter( 'acf/settings/current_language', '__return_false' );



/**
 * Translated id
 *
 * @param mixed $atts attributes.
 *
 * @return object
 */
function x_get_translated_id( $post_id ) {
	$translated_id = apply_filters( 'wpml_object_id', $post_id, 'post', );
	return $translated_id;
}