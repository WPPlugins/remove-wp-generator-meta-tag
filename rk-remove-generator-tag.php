<?php
/*
Plugin Name: Remove WP Generator Meta Tag
Plugin URI: http://www.ruudkok.nl/wordpress/remove-generator-meta-tag/
Description: This plugin will remove the generator meta tag from the head of your page.
Author: Ruud Kok
Author URI: http://www.ruudkok.nl/
Version: 1.0
*/

remove_action('wp_head','wp_generator');

?>