<?php
add_filter('gform_pre_render', 'populate_field_from_translated_post');
add_filter('gform_pre_submission_filter', 'populate_field_from_translated_post');
function populate_field_from_translated_post($form) {
    
    // Original post ID
    $original_pt_id = 108; // Replace with the actual post ID

    // Get the translated post ID for the current language
    $translated_pt_id = apply_filters( 'wpml_object_id', $original_pt_id, 'blokken', true );

    // Fetch the custom field value from the translated post
    $brochure = get_field('brochure', $translated_pt_id);

    // Loop through the form fields and set the default value
    foreach ($form['fields'] as &$field) {
        if ($field->type == 'hidden') { // Adjust the field type if necessary
            // Check if a specific field needs to be populated
            // Use field ID or custom logic to determine which field to populate
            if ($field->id == 25) { // Change 1 to your specific field ID
                $field->defaultValue = $brochure;
            }
        }
    }

    return $form;
}

