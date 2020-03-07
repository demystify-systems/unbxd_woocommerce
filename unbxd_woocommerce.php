<?php
   /*
   Plugin Name: Unbxd PIM Woocommerce
   Plugin URI: https://unbxd.com
   description: >-
      Plugin to integrate Unbxd PIM 
   Version: 1.0
   Author: Unbxd
   Author URI: http://pim.unbxd.io/
   License: GPL2
   */


   /**
 * Displays a list of posts ordered by popularity
 *
 * Shows a simple list of post titles ordered by their view count
 *
 * @param integer $post_count The number of posts to show
 *
 */
function add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $position = null ) {
    return add_submenu_page( 'options-general.php', $page_title, $menu_title, $capability, $menu_slug, $function, $position );
}

?>