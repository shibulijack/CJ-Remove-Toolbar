<?php
/*
Plugin Name: CJ Remove WP Toolbar
Plugin URI: http://shibulijack.wordpress.com/cj-remove-wp-toolbar/
Description: Remove the Toolbar (Admin Bar) completely from both front end and back end. <strong>Wordpress 3.3.1</strong> compatible. All the action hooks will be removed, thus optimizing the page load time.
Author: <a href="http://www.shibulijack.wordpress.com/">Shibu Lijack</a> a.k.a <strong>CyberJack</strong>
Version: 3.3.1
Author URI: http://shibulijack.wordpress.com/

/*  

	Copyright 2012 Shibu Lijack (email: shibulijack@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/
add_filter( 'show_admin_bar', '__return_false' );
wp_deregister_script('admin-bar');
wp_deregister_style('admin-bar');
remove_action('wp_footer','wp_admin_bar_render',1000);
remove_action('admin_head','wp_admin_bar_css');
remove_action('admin_head','wp_admin_bar_dev_css');
remove_action('admin_head','wp_admin_bar_rtl_css');
remove_action('admin_head','wp_admin_bar_rtl_dev_css');
remove_action('wp_footer','wp_admin_bar_render',1000);
remove_action('admin_head','wp_admin_bar_render',1000);
remove_action('admin_footer','wp_admin_bar_render',1000);
remove_action('init','wp_admin_bar_init');
remove_action('wp_head','wp_admin_bar_render',1000);
remove_action('wp_head','wp_admin_bar_css');
remove_action('wp_head','wp_admin_bar_dev_css');
remove_action('wp_head','wp_admin_bar_rtl_css');
remove_action('wp_head','wp_admin_bar_rtl_dev_css');
remove_action('wp_footer','wp_admin_bar_js');
remove_action('wp_footer','wp_admin_bar_dev_js');
remove_action('admin_footer','wp_admin_bar_js');
remove_action('admin_footer','wp_admin_bar_dev_js');
remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');
remove_action('personal_options','_admin_bar_pref');
remove_filter('personal_options','_admin_bar_pref');
remove_action('personal_options','_get_admin_bar_pref');
function cj_remove_admin_css(){echo'<style type="text/css">body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top: 0px; }</style>';};
add_action('admin_print_styles','cj_remove_admin_css',21);
?>