<?php
/**
 * Gravityforms - Add custom notice
 *
 * @param mixed $message Message to be displayed.
 * @param mixed $form Form.
 * @return mixed Message that will be displayed.
 */
function change_message($message, $form) {
    return "<div class='validation_error'>" . __( 'Gelieve alle velden correct in te vullen', 'webshift-theme' ) ."</div>";
}
add_filter('gform_confirmation_anchor', '__return_false');
add_filter('gform_validation_message', 'change_message', 10, 2);

/**
 * Remove editor button
 */
function return_false() {
    return false;
}
add_filter('gform_display_add_form_button', 'return_false');


/**
 * Aanpassingen loader gif gravity
 */
function spinner_url( $image_src, $form ) {
  return get_template_directory_uri() . '/source/images/loader.gif';
}
add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );


/**
 * Change input submit to button
 *
 * @param mixed $button Name of custom post type.
 * @param mixed $form Number of posts to return.
 *
 * @return html
 * extra info: om toe te passen op specifiek formulier, de eerste waarde bij addfilter '_ID' toevoegen.
 */
// function form_submit_button( $button, $form ) {
// 	return "<button class='btn gform_button' id='gform_submit_button_{$form['id']}'>" . __( 'Verzenden', 'webshift-theme' ) ."</button>";
// }
// add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );


// function form_next_button( $button, $form ) {
// 	return "<button class='btn gform_next_button' id='gform_next_button_{$form['id']}'>" . __( 'Volgende', 'webshift-theme' ) ."</button>";
// }

// add_filter( 'gform_next_button', 'form_next_button', 10, 2 );

/**
 * Scroll to error
 */
add_filter( 'gform_confirmation_anchor', '__return_true' );