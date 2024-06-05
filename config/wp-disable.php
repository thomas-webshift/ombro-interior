<?php

/**
 * Gutenberg uitschakelen
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

function remove_gutenberg_styles() {
  // // remove block library css
    wp_dequeue_style( 'wp-block-library' );
    // // remove comment reply JS
    wp_dequeue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );

// // Remove rss feed links
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// // remove wp-embed
add_action( 'wp_footer', function(){
    wp_dequeue_script( 'wp-embed' );
});

// gravity forms default styling
	
add_filter( 'gform_disable_css', '__return_true' );

/**
 * Remove unwanted scripts & styles
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * Remove gallery styling
 */
add_filter('use_default_gallery_style', '__return_false');

/**
 * Disable plugin & theme editor
 */
define('DISALLOW_FILE_EDIT', true);

/**
 * wp-embed uitschakelen
 */
function my_deregister_scripts(){wp_dequeue_script( 'wp-embed' );}
add_action( 'wp_footer', 'my_deregister_scripts' );

/**
 * Remove JQuery migrate
 */
function remove_jquery_migrate( $scripts ) {
  if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
    $script = $scripts->registered['jquery'];
    if ( $script->deps ) {
      $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
    }
  }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

/**
 * Verwijderen van Query String Static Resources
 *
 * @param url $src Link of static resources.
 * @return url Link of static resources.
 */
function remove_cssjs_ver($src)
{
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);