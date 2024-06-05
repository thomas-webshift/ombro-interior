<?php
/**
 * Add support for featured image
 */
add_theme_support('post-thumbnails');

/**
 * Add menus
 */
function add_menu() {
  register_nav_menus([
    'hoofdmenu' => __('Hoofdmenu'),
    'brandmenu' => __('Brandmenu'),
    'hoofdmenu_footer' => __('Hoofdmenu footer'),
    'footermenu_1' => __('footermenu_1'),
    'footermenu_2' => __('footermenu_2'),
    'footermenu_3' => __('footermenu_3'),
    'topmenu'   => __('Topmenu'),
    'legalmenu'   => __('Legalmenu'),
  ]);
}
add_action('after_setup_theme', 'add_menu');

/**
 * Remove admin menus
 */
function remove_menus(){
  // Remove the Posts menu
  remove_menu_page( 'edit.php' );
  // Remove the Comments menu
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Add extra media sizes
 */
if (function_exists('add_image_size')) {
    add_image_size('xpl--xxs', 300, 9999, false);
    add_image_size('xpl--xs', 400, 9999, false);
    add_image_size('xpl--sm', 600, 9999, false);
    add_image_size('xpl--md', 800, 9999, false);
    add_image_size('xpl--lg', 1200, 9999, false);
    add_image_size('xpl--xl', 2000, 9999, false);
    add_image_size('xpl--xxl', 2500, 9999, false);
}
/**
 * Enable svg upload
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml'; 
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types'); 