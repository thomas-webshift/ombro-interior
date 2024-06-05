<?php
/*Webshift functions and definitions*/

/**
 * Wordpress setup
 */
require_once( 'config/wp-setup.php');

/**
 * Disable wordpress stuff
 */
require_once( 'config/wp-disable.php' );

/**
 * Enque scripts & styles
 */
require_once( 'config/wp-enque.php' );

/**
 * ACF pages & custom stuff
 */
if (class_exists('ACF')) {
  require_once( 'config/wp-acf.php' );
}
/**
 * WPML functions
 */
if (class_exists('SitePress')) {
    require_once( 'config/wp-wpml.php' );
}

/**
 * Gravityforms
 */
require_once( 'config/wp-gravityforms.php' );

/**
 * Custom Theme Functions
 * Site Specific Functions
 */
require_once( 'config/wp-custom.php' );



/*==========================================================================
	CUSTOM FUNCTIONS
=============================================================================*/

/**
 * Telefoonnummer strippen
 *
 * @param string $phone_number Inital phone number
 *
 * @return string
 */
function strip_tel( $phone_number = false ) {
  $phone_number = str_replace( [ '(', ')', '-', '.', '|', '/', ' ' ], '', $phone_number );
  return esc_url( 'tel:' . $phone_number );
}

/**
 * Theme View
 *
 * Include a file and(optionally) pass arguments to it.
 *
 * @param string $file The file path, relative to theme root
 * @param array $args The arguments to pass to this file. Optional.
 * Default empty array.
 *
 * @return object Use render() method to display the content.
 */

class webshift_ThemeView {
  private $args;
  private $file;

  public function __get($name) {
    return $this->args[$name];
  }

  public function __construct($file, $args = array()) {
    $this->file = $file;
    $this->args = $args;
  }

  public function __isset($name){
    return isset( $this->args[$name] );
  }

  public function render() {
    if( locate_template($this->file) ){
      include( locate_template($this->file) );
    }
  }
}

/**
 * Make title
 *
 * @param string $title --> content of title
 * @param string $class --> class of title
 * @param string $tag --> html tag
 *
 * @return void
 */
function x_make_title($title, $class, $tag) {
  return '<' . $tag . ' class="' . $class . '" data-title>' . do_shortcode($title) . '</'. $tag . '>';
}



/**
 * Get parts functions
 *
 * @param string $file attributes.
 * @param string $part attributes.
 *
 * @return void
 */
function get_part($file, $part, $args = [] ) {
  $path = 'template-parts/' . $part . '/';
  $file_path = $path . $file . '.php';
  get_template_part($path . $file, '', $args);
}


/**
 * Use custom template in ACF field
 *
 * @param string $file attributes.
 * @param string $part attributes.
 *
 * @return html
 */
function template_part_shortcode( $atts ) {

	extract( shortcode_atts( array( 'part' => '', 'type' => '' ), $atts ) );
	$file = locate_template('template-parts/' . $type . '/' . $part . '.php');

		ob_start();
		include $file;
		$template = ob_get_contents();
		ob_end_clean();
		return $template;

}
add_shortcode( 'template', 'template_part_shortcode' );
