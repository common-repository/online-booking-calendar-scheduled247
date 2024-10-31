<?php
/*
 * Plugin Name: Online Booking Calendar Scheduled247
 * Description: This plugin allow user to show calendar with [s247-calendar] short-code.
 * Version: 1.0.0
 * Author: COSTANSIN
 * Author URI: http://costansin.com
 * Plugin URI: https://www.scheduled247.com/pages/help
 */


if ( ! function_exists( 'dump' ) ) {
	function dump( $value ) {
		echo "<pre>";
		var_dump( $value );
		echo "</pre>";
	}
}
if ( ! function_exists( 'dd' ) ) {
	function dd( $value ) {
		dump( $value );
		die();
	}
}

define( 'S247_DIR', dirname( __FILE__ ) );

require_once S247_DIR . '/includes/S247_SHORTCODE.php';

add_filter('plugin_row_meta', 'scheduled247_add_plugin_links', 10, 2);

//Add some links on the plugin page
function scheduled247_add_plugin_links($links, $file) {
        $links[] = '<a href="https://scheduled247.com/pages/help">' . esc_html__('Documentation', 'scheduled247') . '</a>';
        $links[] = '<a href="https://scheduled247.com/contact">' . esc_html__('Contact', 'scheduled247') . '</a>';
        return $links;
}
