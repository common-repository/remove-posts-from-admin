<?php
/*
	Plugin Name: Remove posts from wp-admin
	Plugin URI: http://developr.nl/plugins/remove-posts-from-wpadmin
	Version: 1
	Description: Remove posts, handy if you use custom post types and don't want to use posts
	Author: developR
	Author URI: http://www.developr.nl

*/

// hehe the header is more lines then the plugin
if (!function_exists('remove_posts_from_admin')) {
	function remove_posts_from_admin() {
		global $menu;
		unset($menu[5]);
	}
}
add_action('admin_menu', 'remove_posts_from_admin');
?>