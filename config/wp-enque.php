<?php

/**
 * Load custom styles & scripts
 */
function add_theme_scripts()
{
    // STYLES.
    wp_enqueue_style('font', get_field('google_font_family', 'option'), [], '1.1');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], '1.1');

    // SCRIPTS.
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script-min.js', [ 'jquery' ], '1.2', true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
