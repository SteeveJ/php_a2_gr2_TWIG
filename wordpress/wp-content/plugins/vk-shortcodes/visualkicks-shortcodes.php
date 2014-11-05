<?php

/*
Plugin Name: Visualkicks - Shortcodes
Plugin URI: http://www.visualkicks.com/plugins/
Description: Enables a set of shortcodes usable in the visual post editor for use in our compatible Visualkicks themes
Version: 1.3
Author: Visualkicks
Author URI: http://www.visualkicks.com

Changelog


13/05/2014 Version 1.3
- complete overhaul support for wordpress 3.9

04/11/2013 Version 1.2
- added forced margin right to the buttons
- removed the eschtmltags from code shortcode
- all styles are now forced and themes should no longer need to override styling
- instead of using .hide and .show in the js we now set the css
- we have forced the default views for tabs now via css
- scripts are now only loaded if they are needed and also placed into the footer not the head

29/11/2013 Version 1.1
- buttons no longer container any styling for sizing
- buttons have their colors set with !important rule
- added the .button class to the visual buttons

/*-----------------------------------------------------------------------------------*/


if ( ! class_exists( 'Visualkicks_Shortcodes' ) ) :

class Visualkicks_Shortcodes {

    function __construct() {

    	// get shortcodes-output.php
    	require_once( plugin_dir_path( __FILE__ ) .'shortcodes-output.php' );

    	// define paths
    	define('VISUAL_SHORTCODES_URI', plugin_dir_url( __FILE__ ) );
		define('VISUAL_SHORTCODES_DIR', plugin_dir_path( __FILE__ ) );

		// register
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
       	add_action('wp_footer', array(&$this, 'print_shortcode_scripts'));

	}
	

	/*--------------------------------------------------------------------*/
	/*
	/*	Register
	/*
	/*--------------------------------------------------------------------*/

	function init() {

		// script registration conditions
		if( ! is_admin() ) {

			// register styles
			wp_register_style( 'visual-shortcodes-css', VISUAL_SHORTCODES_URI . 'css/shortcodes.css' );
			
			// register scripts
			wp_register_script( 'visual-shortcodes-js', VISUAL_SHORTCODES_URI . 'js/shortcodes.js', array('jquery', 'jquery-ui-tabs'), '1.0', true );

		}
		
		// exit conditions
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) { return; }

		// editor condtions
		if ( get_user_option('rich_editing') == 'true' ) {

			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );

			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );

		}

	}

	/*--------------------------------------------------------------------*/
	/*
	/*	Print shortcode scripts in footer only if needed
	/*
	/*--------------------------------------------------------------------*/

	function print_shortcode_scripts() {

		// only print if shortcode is in use
		global $add_shortcode_scripts;
		if ( ! $add_shortcode_scripts ) {

			return;

		} else {

			wp_print_styles('visual-shortcodes-css');

			wp_print_scripts('visual-shortcodes-js');

		}

	}

	/*--------------------------------------------------------------------*/
	/*
	/*	Add TinyMCE rich editor buttons
	/*
	/*--------------------------------------------------------------------*/

	function add_rich_plugins( $plugin_array ) {

		$plugin_array['visualshortcodes'] = VISUAL_SHORTCODES_URI . 'js/tinymce.js';

		return $plugin_array;

	}

	/*--------------------------------------------------------------------*/
	/*
	/*	Register TinyMCE rich editor buttons
	/*
	/*--------------------------------------------------------------------*/	

	function register_rich_buttons( $buttons ) {

		array_push( $buttons, 'visualshortcodes' );

		return $buttons;

	}

	/*--------------------------------------------------------------------*/
	/*
	/*	Enqueue Admin Scripts and Styles
	/*
	/*--------------------------------------------------------------------*/

	function admin_init() {

		// css
		wp_enqueue_style( 'visual-tinymce-css', VISUAL_SHORTCODES_URI . 'css/tinymce.css', true, '1.0', 'all' );

	}
    
}

$visual_shortcodes = new Visualkicks_Shortcodes();

endif;

?>