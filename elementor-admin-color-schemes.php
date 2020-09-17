<?php
/**
 * Plugin Name: Elementor Admin Color Schemes
 * Plugin URI: https://github.com/DarioSantacruz/elementor-admin-color-schemes
 * Description: Color schemes based on Elementor's brand
 * Version: 0.0.1
 * Requires PHP: 7.0
 * Author: Dario Santacruz
 * Author URI: https://dariosantacruz.com/
 * Domain Path: /languages
 */

/*
2020 Dario Santacruz

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

namespace ELEMENTOR_Color_Schemes;
use function add_action;
use function wp_admin_css_color;

const VERSION = '0.0.1';

/**
 * Helper function to get stylesheet URL.
 *
 * @param string $color The folder name for this color scheme.
 */
function get_color_url( $color ) {
	$suffix = is_rtl() ? '-rtl' : '';
	return plugins_url( "$color/colors$suffix.css?v=" . VERSION, __FILE__ );
}

/**
 * Register color schemes.
 */
function add_colors() {
	wp_admin_css_color(
		'elementor',
		__( 'Elementor Blue', 'admin_schemes' ),
		get_color_url( 'elementor-blue' ),
		array( '#010038', '#46F2B6', '#5ef2be' ),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);
	/*
	wp_admin_css_color(
		'vinyard',
		__( 'Vinyard', 'admin_schemes' ),
		get_color_url( 'vineyard' ),
		array( '#301D25', '#462b36', '#ba8752', '#eabe3f' ),
		array(
			'base' => '#f1f2f3',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'primary',
		__( 'Primary', 'admin_schemes' ),
		get_color_url( 'primary' ),
		array( '#282b48', '#35395c', '#f38135', '#e7c03a' ),
		array(
			'base' => '#f1f2f3',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'80s-kid',
		__( '80\'s Kid', 'admin_schemes' ),
		get_color_url( '80s-kid' ),
		array( '#0A3D80', '#0c4da1', '#ed5793', '#eb853b' ),
		array(
			'base' => '#e4e5e7',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'aubergine',
		__( 'Aubergine', 'admin_schemes' ),
		get_color_url( 'aubergine' ),
		array( '#4c4b5f', '#585a61', '#e87162', '#da9b49' ),
		array(
			'base' => '#e4e4e7',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'cruise',
		__( 'Cruise', 'admin_schemes' ),
		get_color_url( 'cruise' ),
		array( '#292B46', '#36395c', '#8bbc9f', '#d2ac1f' ),
		array(
			'base' => '#f1f1f3',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'flat',
		__( 'Flat', 'admin_schemes' ),
		get_color_url( 'flat' ),
		array( '#1F2C39', '#2c3e50', '#1abc9c', '#f39c12' ),
		array(
			'base' => '#f1f2f3',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'lawn',
		__( 'Lawn', 'admin_schemes' ),
		get_color_url( 'lawn' ),
		array( '#0F1515', '#1e2a29', '#5D824B', '#a7b145' ),
		array(
			'base' => '#f1f3f3',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);


	wp_admin_css_color(
		'kirk',
		__( 'Kirk', 'admin_schemes' ),
		get_color_url( 'kirk' ),
		array( '#bd3854', '#5f1b29', '#321017' ),
		array(
			'base' => '#fefcf7',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'contrast-blue',
		__( 'High Contrast Blue', 'admin_schemes' ),
		get_color_url( 'contrast-blue' ),
		array( '#22466d', '#5c98c8', '#a5cde8', '#dae9f3', '#9d2f4d' ),
		array(
			'base' => '#151923',
			'focus' => '#151923',
			'current' => '#151923',
		)
	);
	*/
}

add_action( 'admin_init', __NAMESPACE__ . '\add_colors' );
