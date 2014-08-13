<?php
/**
 * Plugin Name: Teespring OEmbed Provider
 * Plugin URI: http://github.com/jarred-sumner/teespring-oembed-provider
 * Description: This lets you embed Teespring campaigns into your Wordpress site.
 * Version: 1.0
 * Author: Jarred Sumner
 * Author URI: https://github.com/jarred-sumner
 * License: GPL2
 */
 wp_oembed_add_provider( 'http://teespring.com*', 'http://teespring.com/oembed.json' );
