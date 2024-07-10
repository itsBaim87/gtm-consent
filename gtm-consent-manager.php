<?php
/*
Plugin Name: BoltBlue's GTM Consent Europe
Plugin URI:  https://homewisesolar.com.au/
Description: Manages user consent and Google Tag Manager container settings.
Version:     1.0
Author:      BoltBlue
Author URI:  https://boltblue.com.au/
License:     GPL2
*/

defined('ABSPATH') or die('Access denied.');

include_once 'settings.php';
include_once 'front-end.php';

function gtm_enqueue_scripts() {
    wp_enqueue_script('gtm-consent-js', plugins_url('consent.js', __FILE__), array('jquery'), '1.0', true);
    wp_enqueue_style('gtm-consent-css', plugins_url('consent.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'gtm_enqueue_scripts');
