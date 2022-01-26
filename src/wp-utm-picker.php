<?php
/**
 * Plugin Name: WP UTM Picker
 * Plugin URI: https://github.com/larknafets/wp-utm-picker
 * Description: This plugin picks up UTM tracking data from a URL and saves it to cookies. The UTM parameters can be read out and used by shortcodes. The shortcodes are not available on the landing page itsself on the first call as the params are written to a cookie. The cookie is read out before by WordPress. +++ The following parameters will be extracted from URL: utm_source, utm_medium, utm_term, utm_content, utm_campaign, utm_id (Ads Campaign ID), fbclid (Facebook Click ID), gclid (Google Ads ID), dclid (Google Display Ads ID), epik (Pinterest Ads/Click ID) +++ The following URLs will be stored in cookies: landing page URL (first enter of the website), referrer URL (page referring from), last page URL (last view page before leaving the website), actual page URL +++ Available shortcodes: wp_utm_source, wp_utm_medium, wp_utm_term, wp_utm_content, wp_utm_campaign, wp_utm_id, wp_utm_fbclid, wp_utm_gclid, wp_utm_dclid, wp_utm_epik, wp_url_referer, wp_url_landing, wp_url_last, wp_url_actual +++ Add the following JS to your cookie plugin: -script src="/wp-content/plugins/wp-utm-picker/js/wp-utm-picker.js"--/script-
 * Version: 1.0.0
 * Author: Stefan Kral
 * Author URI: http://stnk.de
 */

/* Uncomment this if you want to include the needed JS file automatically.
--- BEGIN ---
function wputm_enqueue_script(){
  wp_enqueue_script('wputm_scripts', plugin_dir_url(__FILE__) . 'js/wp-utm-picker.js',  array(), 'version', true);
}
add_action( 'wp_enqueue_scripts', 'wputm_enqueue_script' );
--- END --- */

// UTM array:
// $utm_parameters[0] - utm_source
// $utm_parameters[1] - utm_medium
// $utm_parameters[2] - utm_term
// $utm_parameters[3] - utm_content
// $utm_parameters[4] - utm_campaign
// $utm_parameters[5] - utm_id

function get_utm_source() {
  $cookies = $_COOKIE['_t_utmz'];
	$utm_parameters = explode("|", $cookies);
  $this_utm_value = $utm_parameters[0];
  return $this_utm_value;
}
add_shortcode('wp_utm_source', 'get_utm_source');

function get_utm_medium() {
  $cookies = $_COOKIE['_t_utmz'];
	$utm_parameters = explode("|", $cookies);
  $this_utm_value = $utm_parameters[1];
  return $this_utm_value;
}
add_shortcode('wp_utm_medium', 'get_utm_medium');

function get_utm_term() {
  $cookies = $_COOKIE['_t_utmz'];
	$utm_parameters = explode("|", $cookies);
  $this_utm_value = $utm_parameters[2];
  return $this_utm_value;
}
add_shortcode('wp_utm_term', 'get_utm_term');

function get_utm_content() {
  $cookies = $_COOKIE['_t_utmz'];
	$utm_parameters = explode("|", $cookies);
  $this_utm_value = $utm_parameters[3];
  return $this_utm_value;
}
add_shortcode('wp_utm_content', 'get_utm_content');

function get_utm_campaign() {
  $cookies = $_COOKIE['_t_utmz'];
	$utm_parameters = explode("|", $cookies);
  $this_utm_value = $utm_parameters[4];
  return $this_utm_value;
}
add_shortcode('wp_utm_campaign', 'get_utm_campaign');

function get_utm_id() {
  $cookies = $_COOKIE['_t_utmz'];
	$utm_parameters = explode("|", $cookies);
  $this_utm_value = $utm_parameters[5];
  return $this_utm_value;
}
add_shortcode('wp_utm_id', 'get_utm_id');

function get_utm_fbclid() {
  $cookies = $_COOKIE['_t_fbclid'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_utm_fbclid', 'get_utm_fbclid');

function get_utm_gclid() {
  $cookies = $_COOKIE['_t_gclid'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_utm_gclid', 'get_utm_gclid');

function get_utm_dclid() {
  $cookies = $_COOKIE['_t_dclid'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_utm_dclid', 'get_utm_dclid');

function get_utm_epik() {
  $cookies = $_COOKIE['_t_epik'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_utm_epik', 'get_utm_epik');

function get_url_referer() {
  $cookies = $_COOKIE['_t_ref'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_url_referer', 'get_url_referer');

function get_url_landing() {
  $cookies = $_COOKIE['_t_land'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_url_landing', 'get_url_landing');

function get_url_last() {
  $cookies = $_COOKIE['_t_last'];
  $this_utm_value = $cookies;
  return $this_utm_value;
}
add_shortcode('wp_url_last', 'get_url_last');

function get_url_actual() {
  $this_utm_value = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  return $this_utm_value;
}
add_shortcode('wp_url_actual', 'get_url_actual');
