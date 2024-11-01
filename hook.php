<?php
/*
Plugin Name: TCBD WP Admin Bar Hide
Description: Hide your admin bar when you are login.
Plugin URI: http://demos.tcoderbd.com/wordpress_plugins/
Author: Md Touhidul Sadeek
Author URI: http://tcoderbd.com
Version: 1.0
License: GPL2
*/

/*

    Copyright (C) 2015  Author  Email

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

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Hide Admin Bar
add_filter('show_admin_bar', '__return_false');
