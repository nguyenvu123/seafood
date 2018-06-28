<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'includes/athena_shortcodes.php';


add_action('wp_enqueue_scripts', 'evatheme_scripts');

function evatheme_scripts() {
	wp_enqueue_style ('theme-style',THEME_DIR.'/gulp-file/main.css');  
		wp_enqueue_style ('slick-style-theme',THEME_DIR.'/bower_components/jquery/dist/jquery.min.js'); 
	wp_enqueue_style ('theme-style-lib',THEME_DIR.'/bower_components/slick-carousel/slick/slick.css'); 

	wp_enqueue_style ('theme-style-fontawesome',THEME_DIR.'/bower_components/font-awesome/css/font-awesome.min.css');
	
	

 	wp_enqueue_style ('slick-style-theme',THEME_DIR.'/bower_components/slick-carousel/slick/slick-theme.css');  
 	// wp_enqueue_style ('boostap-style-theme',THEME_DIR.'/bower_components/bootstrap/dist/css/bootstrap.min.css'); 
  	wp_enqueue_script ('slick-js',THEME_DIR.'/bower_components/slick-carousel/slick/slick.min.js');  
  	// wp_enqueue_script ('boostap-js-theme',THEME_DIR.'/bower_components/bootstrap/dist/js/bootstrap.min.js');
  	
  	wp_enqueue_script ('theme-js',THEME_DIR.'/gulp-file/script.js'); 
}



if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
