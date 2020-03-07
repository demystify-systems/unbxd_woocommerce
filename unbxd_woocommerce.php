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
        'UNBXD Woocommerce Plugin','Unbxd','manage_options','woocommerceunbxd','woocommerceplugin_admin', plugins_url('images/logo.svg',__FILE__),2
    );
}



function woocommerceplugin_admin(){
    $site_url = get_site_url();

    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pim-static.unbxd.com/prod/1.13.6/css/bundle.css">
    <div class="container mt-5" >
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://unbxd.com/wp-content/uploads/2020/01/logo.svg" class="card-img img-responsive mt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Unbxd PIM Woocommerce</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="http://localhost:8000/woocommerce/install/?store_url="<?php echo $site_url ?> target="_blank" style="width: 200px;" type="button" class="btn btn-primary primary-btn login-btn  font-weight-bold">
                                Install Unbxd PIM
                            </a>
                            <a href="http://localhost:8000/woocommerce/dashboard/?store_url="<?php echo $site_url ?> target="_blank" style="width: 200px;" type="button" class="btn btn-primary primary-btn login-btn  font-weight-bold">Go To </a>
                        </div>
                    </div>
                </div>>
            </div>
        </div>
    </div>
    <?php
}
?>