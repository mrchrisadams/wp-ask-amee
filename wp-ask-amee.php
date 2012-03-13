<?php
/**
* @package WP_AMEE
* @version 0.0.1
*/
/*
Plugin Name: Ask AMEE
Plugin URI: http://ask.ameecom/
Description: This plugin allows you add an 'Ask AMEE' shortcode onto a page, so you can embed an 'Ask AMEE; search box and make environmental calculations on your own site
Author: Chris Adams
Version: 0.0.1
Author URI: http://ask.amee.com/api/wordpress
*/

function get_ask_amee() {

  return "<script id='askamee-widget' src='http://ask.amee.com/widget.js'></script>";
}

add_shortcode('askamee', 'get_ask_amee');