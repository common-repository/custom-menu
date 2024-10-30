<?php
/*  Copyright 2011  Evolonix  (email : info@evolonix.com)

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
?>
<?php

class Custom_Menu_Shortcode {

	function content($atts) {
		if ( !isset( $atts['name'] ) )
			return;
		
		// Get menu
		$nav_menu = wp_get_nav_menu_object( $atts['name'] );
	
		if ( !$nav_menu )
			return;
			
		if ( !empty($atts['title']) )
			echo '<h3 class="custom-menu-title">' . $atts['title'] . '</h3>';
		
		return wp_nav_menu( array( 'fallback_cb' => '', 'menu' => $nav_menu, 'echo' => false ) );
	}
	
}

?>
