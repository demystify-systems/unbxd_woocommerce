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


add_action('admin_menu','unbxd_pim_acions');


function unbxd_pim_acions(){
    wp_enqueue_script( 'woo_plugin_script', plugins_url('/index.js', __FILE__), array('jquery'), '1.0', true );
    add_menu_page(
        'UNBXD Woocommerce Plugin','Unbxd','manage_options','woocommerceunbxd','woocommerceplugin_admin', plugins_url('images/logo_mini.png',__FILE__),2
    );
}



function woocommerceplugin_admin(){
    $site_url = get_site_url();

    ?>
    <link rel="stylesheet" href="https://pim-static.unbxd.com/prod/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pim-static.unbxd.com/prod/1.13.6/css/bundle.css">

    <div class="wrap">

        <div class="unit marginBottom alnCenter">
            <div class="logo">
                <img src="<?php echo plugins_url('images/-logo.png',__FILE__); ?>">
            </div>
        </div>

        <div class="unit marginBottom alnCenter">
            <h2>Congrats! You just installed Unbxd PIM Plugin successfully!</h2>
        </div>
        <?php echo $site_url; ?>"
    </div>
    <?php
}
?>