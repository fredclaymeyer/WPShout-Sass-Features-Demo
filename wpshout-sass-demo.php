<?php
/*
Plugin Name: WPShout Sass Demo
Plugin URI: http://www.wpshout.com
Description: To demo cool Sass features
Author: WPShout
Author URI: http://wpshout.com */

/**
 * Proper way to enqueue scripts and styles
 */
function wpshout_enqueue_sass_demo() {
	wp_enqueue_style( 'wpshout-sass-demo', plugins_url('wpshout-sass-demo.css', __FILE__)  );
}

add_action( 'wp_enqueue_scripts', 'wpshout_enqueue_sass_demo' );