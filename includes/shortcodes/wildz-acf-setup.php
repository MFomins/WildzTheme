<?php

/**
 * ACF Setup 
 * 
 * @package WILDZ
 */

// 1. Customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path($path)
{
	$path = WILDZ_TEMPLATE_DIR . '/vendor/acf/';
	return $path;
}

// 2. Customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir($dir)
{
	$dir = WILDZ_DIR_URI . '/vendor/acf/';
	return $dir;
}

// 3. Include ACF
include_once(WILDZ_TEMPLATE_DIR . '/vendor/acf/acf.php');

// Show ACF in admin menu
add_filter('acf/settings/show_admin', 'my_acf_show_admin');
function my_acf_show_admin($show)
{
	return true;
}

//Add theme settings page
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url'      => 'dashicons-superhero-alt',
		'redirect'		=> false
	));
}
