<?php
/**
 * Responsive Sticky Menu
 *
 * A plugin to have a sticky menu on Responsive.
 *
 * @package   responsive-sticky-menu
 * @author    Ulrich Pogson <grapplerurlrich@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Ulrich Pogson
 *
 * @wordpress-plugin
 * Plugin Name: Responsive Sticky Menu
 * Plugin URI:  https://github.com/grappler/responsive-sticky-menu
 * Description: A plugin to have a sticky menu on Responsive.
 * Version:     0.1.0
 * Author:      Ulrich Pogson
 * Author URI:  http://www.ulrich.pogson.ch/
 * Text Domain: responsive-sticky-menu
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Enqueue sticky menu script
function responsive_sticky_menu_enqueue_script() {
	wp_enqueue_script( 'responsive-sticky-menu-script', plugins_url( 'js/sticky-menu.js', __FILE__ ), array( 'jquery' ), '0.1.0' );
	wp_enqueue_style( 'responsive-sticky-menu-style', plugins_url( 'css/sticky-menu.css', __FILE__ ), '0.1.0' );
}
add_action( 'wp_enqueue_scripts', 'responsive_sticky_menu_enqueue_script' );

// Add the menu to the top
function responsive_sticky_menu_nav() {
	wp_nav_menu( array(
		'container'       => 'div',
		'container_class' => 'main-nav',
		'container_id'    => 'sticky-menu',
		'fallback_cb'     => 'responsive_fallback_menu',
		'theme_location'  => 'header-menu'
	) );
}
add_action( 'responsive_container', 'responsive_sticky_menu_nav' );