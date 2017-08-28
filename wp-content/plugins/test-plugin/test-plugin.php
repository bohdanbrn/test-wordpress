<?php
/*
	Plugin Name: test plugin
	Description: test description
	Author URI: https://www.facebook.com/profile.php?id=100003936097779
	Version: 1.0
*/

/*  Copyright 2017

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//перевірка чи скрипт не викликаний напряму
if ( ! defined( 'ABSPATH' ) ) {
	exit; // don't access directly
};

//створення підменю для розділу "Settings"
add_action('admin_menu', 'post_icon_submenu');
function post_icon_submenu() {
    add_submenu_page(
        'options-general.php',                  //parent_slug
        'Settings Test plugin',                 //page_title
        'Test plugin',                          //menu_title
        'edit_dashboard',                       //capability
        'test-pluginn',                         //menu_slug
        'render_test_pluginn_settings_page'     //function
    );
}

//підключення html - форми, через яку здійснюється управління плагіном
function render_test_pluginn_settings_page() {
    require_once 'settings.php';
}
