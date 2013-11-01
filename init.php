<?php 
/*
Plugin Name: DFM Orbit Slider
Description: Implementation of the Zurb Foundation Orbit Slider for WordPress
Version: 1.0
Author: Debbie Gray
Author URI: http://digitalfirstmedia.com
License: GNU General Public License version 3.0
*/

// Allow shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

// Load css and scripts into footer

function dfm_orbit_wp_setup() {
	wp_enqueue_style("foundation.orbit",WP_PLUGIN_URL."/dfm_orbit_plugin/css/foundation.css",false,"1.0");
	wp_enqueue_script(
	"foundation", WP_PLUGIN_URL."/dfm_orbit_plugin/js/foundation/foundation.js",
	array("jquery"), "",1);	
	wp_enqueue_script(
	"foundation.orbit", WP_PLUGIN_URL."/dfm_orbit_plugin/js/foundation/foundation.orbit.js",
	array("jquery","foundation"), "",1);
	wp_enqueue_script(
	"foundation.orbit.settings", WP_PLUGIN_URL."/dfm_orbit_plugin/js/foundation/foundation.orbit.settings.js",
	array("jquery","foundation", "foundation.orbit"), "",1);
}

if( !function_exists('dfm_orbit_shortcode_fn') ) {
	function dfm_orbit_shortcode_fn( $atts, $content = null ) {
			return dfm_orbit_wp_setup();
		}
add_shortcode("orbitslider", "dfm_orbit_shortcode_fn");
}

// shortcode to wrap unordered list of images with orbit markup and provide width options

if( !function_exists('dfm_orbit_shortcode_content') ) {
	function dfm_orbit_shortcode_content( $atts, $content = null ) {
			extract( shortcode_atts( array(
			'width' => '',
			'columns' => '',
			), $atts ) );


		return '<div class="slideshow-wrapper '. $columns .'" style="width:'. $width .';"><div class="preloader"></div>' . do_shortcode($content) . '</div>';
		}
add_shortcode("orbitslidercontent", "dfm_orbit_shortcode_content");
}

// add captions

if( !function_exists('dfm_orbit_caption') ) {
	function dfm_orbit_caption( $atts, $content = null ) {
			return '<div class="orbit-caption">' . do_shortcode($content) . '</div>';
		}
add_shortcode("orbitcaption", "dfm_orbit_caption");
}

?>
