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
		'elementor_blue',
		__( 'Elementor Blue', 'admin_schemes' ),
		get_color_url( 'elementor-blue' ),
		array( '#010038', '#46F2B6' ),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'elementor_green',
		__( 'Elementor Green', 'admin_schemes' ),
		get_color_url( 'elementor-green' ),
		array( '#46F2B6', '#010038' ),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'elementor_creame',
		__( 'Elementor Creame', 'admin_schemes' ),
		get_color_url( 'elementor-creame' ),
		array( '#FFBC7D', '#FF3700' ),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

	wp_admin_css_color(
		'elementor_orange',
		__( 'Elementor Orange', 'admin_schemes' ),
		get_color_url( 'elementor-orange' ),
		array( '#FF3700', '#FFBC7D' ),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);
	wp_admin_css_color(
		'elementor_purple',
		__( 'Elementor Purple', 'admin_schemes' ),
		get_color_url( 'elementor-purple' ),
		array( '#92003B', '#FF7BE5'),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);
	wp_admin_css_color(
		'elementor_pink	',
		__( 'Elementor Pink', 'admin_schemes' ),
		get_color_url( 'elementor-pink' ),
		array( '#FF7BE5', '#92003B'),
		array(
			'base' => '#F0F2F1',
			'focus' => '#fff',
			'current' => '#fff',
		)
	);

}

add_action( 'admin_init', __NAMESPACE__ . '\add_colors' );
