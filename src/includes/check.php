<?php
/**
 * WP Sharks™ Core RV check.
 *
 * @since 160229 First documented version.
 *
 * @copyright WebSharks, Inc. <http://websharks-inc.com>
 * @license GNU General Public License, version 3
 */
// PHP v7.0.4 compatible.

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
if (!function_exists('wp_sharks_core_rv')) {
    require_once __DIR__.'/functions/wp.php';
    add_filter('plugins_api', '___wp_sharks_core_plugins_api', 10, 3);
    add_filter('pre_site_transient_update_plugins', '___wp_sharks_core_rv_pre_site_transient_update_plugins', 10, 1);
}
___wp_sharks_core_rv_initialize(); // Run initilization routines.
return wp_sharks_core_rv(); // True if running a compatible version.
