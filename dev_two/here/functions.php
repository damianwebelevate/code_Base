<?php
/*
* Copyright 2015, 2016 Damian O'Rourke
* Email: damiano_rourke@hotmail.com
* Website: damianorourke.com
*/
/*
*  This file is part of Triple Crown Custom - TCC

    TCC is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TCC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TCC.  If not, see <http://www.gnu.org/licenses/>.
*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


// create and enqueue the scripts

function load_custom_rugjscss(){

	wp_enqueue_script('jqueryMine', get_stylesheet_directory_uri().'/js/jquery_latest.js');
    // wp_enqueue_script('jqueryMine', 'http://code.jquery.com/jquery-1.7.2.min.js');

	// wp_enqueue_script('uijquery', 'http://code.jquery.com/ui/1.8.21/jquery-ui.min.js');

    wp_enqueue_script('uijqueryoriginal', get_stylesheet_directory_uri().'/js/jqueryui.js');

    wp_enqueue_script('touch_punch', get_stylesheet_directory_uri().'/js/touchPunch.js');

    wp_enqueue_style('cssJQ', get_stylesheet_directory_uri().'/inc/css/jquery-ui.min.css');

	wp_enqueue_style('structure', get_stylesheet_directory_uri().'/inc/css/jquery-ui.structure.min.css');

	wp_enqueue_script('declare_no_conflict', get_stylesheet_directory_uri().'/js/some.js' );

	wp_enqueue_script('app_js_js', get_stylesheet_directory_uri().'/js/app.js');
	
	wp_enqueue_style('bootstrap_css_hosted', get_stylesheet_directory_uri().'/inc/css/bootstrap_external.css');
	//fonts
	wp_enqueue_style('playfair', 'http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700');
	wp_enqueue_style('opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,800,600');
    wp_enqueue_style('greatvibes', 'https://fonts.googleapis.com/css?family=Great+Vibes');

	wp_enqueue_style('run_custom_rug_css', get_stylesheet_directory_uri().'/css/main.css');

    wp_enqueue_style('responsive_css', get_stylesheet_directory_uri().'/css/responsive.css');

}


add_action('wp_enqueue_scripts','load_custom_rugjscss');
add_action('wp_enqueue_styles','load_custom_rugjscss');



function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );



// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



?>