<?php 
/*
 Plugin Name: Demo Plugin Hooks
 Plugin URI: http://website-in-a-weekend.net/plugins/demo-plugins/
 Description: A brief description of the Plugin.
 Version: 0.1
 Author: Dave Doolin
 Author URI: http://website-in-a-weekend.net/
 */

/*  Copyright 2009 David M. Doolin  (email : david.doolin@gmail.com)
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

if (!class_exists("demo_plugin_hooks")) {

    class demo_plugin_hooks {
    
        function demo_plugin_hooks() {
            add_action('admin_menu', array(&$this, 'add_demo_menu'));
        }
        

        function add_demo_menu() {
            if (function_exists('add_menu_page')) {
            	
                add_menu_page('Menu Page Title', 'Menu Title', 
				              'administrator', __FILE__, 
							  array(&$this, 'demo_menu_page'), 
							  WP_PLUGIN_URL.'/demo-plugin-adminmenu/award_star_gold_1.ico');
							  
                add_submenu_page(__FILE__, 'Page Title', 'Submenu Title', 
				              'administrator', 'submenu_handle', 
							  array(&$this, 'demo_submenu_page'));
            }
        }
		
        function demo_menu_page() {    
			?>
			<div class="wrap">
			    <h2>Demo Menu Page</h2>
			    Does nothing but demonstrate menu.
			</div>
			<?php 
        }

        function demo_submenu_page() {
			?>
			<div class="wrap">
			    <h2>Demo Submenu Page</h2>
			    Does nothing but demonstrate submenu. 
			</div>
			<?php 
        }
    }
}

$wpdpd = new demo_plugin_hooks();

?>

