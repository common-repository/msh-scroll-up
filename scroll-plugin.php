<?php
/*
Plugin Name: MSH Scroll Up
Plugin URI: http://shakil.cz.cc
Description: This plugin will add a scroll to top button on footer right.
Author: Md. Shakil Hossain
Author URI: http://shakil.cz.cc
Version: 1.1

*/

/* Adding Latest jQuery from Wordpress */
function scroll_msh_create() {
	wp_enqueue_script('jquery');
}
add_action('init', 'scroll_msh_create');

define('MSH_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


wp_enqueue_script('msh-plugin-active', MSH_PLUGIN_PATH.'js/jquery.easing.min.js', array('jquery'));
wp_enqueue_script('msh-plugin-active2', MSH_PLUGIN_PATH.'js/jquery.scrollUp.js', array('jquery'));
wp_enqueue_script('msh-plugin-active3', MSH_PLUGIN_PATH.'js/active.js', array('jquery'));

wp_enqueue_style('msh-plugin-active4', MSH_PLUGIN_PATH.'css/style.css');


?>