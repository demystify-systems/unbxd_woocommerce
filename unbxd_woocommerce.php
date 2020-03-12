<?php
/*
Plugin Name: Unbxd PIM Woocommerce
Plugin URI: https://unbxd.com
description:Unbxd PIM Get your product content in front of your shoppers faster Eliminate Manual Effort Product Why Unbxd PIM For many brands and online retailers, product data is fragmented across different formats and systems.
Transforming this constantly changing data into meaningful product information is challenging at scale. Unbxd Product Information Management (PIM) offers a centralized, &hellip;
Version: 1.0
Author: Unbxd
Author URI: http://pim.unbxd.io/
License: GPL2
*/


add_action('admin_menu','unbxd_pim_acions');


function unbxd_pim_acions(){
    /*
     *  Hook method to add UNBXD PIM page to Wordpress tab
     * */
    wp_enqueue_script( 'woo_plugin_script', plugins_url('static/js/index.js', __FILE__), array('jquery'), '1.0', true );
    add_menu_page(
        'UNBXD Woocommerce Plugin','Unbxd','manage_options','woocommerceunbxd','woocommerceplugin_admin', plugins_url('static/images/logo.png',__FILE__),2
    );
}

function check_app_initialized($site_url){
    /*
     *  Method to check whether the store is installed on the UNBXD PIM.
     * @param string $site_url - Woocommerce store URL
     * */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://google.com");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close ($ch);
    if ($server_output == "OK") {
        return true;
    } else {
        return false;
    }

}

function woocommerceplugin_admin(){
    $site_url = get_site_url();
    $installation_url = "http://localhost:8000/woocommerce/dashboard/?store_url=".$site_url;
    $unbxd_pim_installed = check_app_initialized($site_url);

    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pim-static.unbxd.com/prod/1.13.6/css/bundle.css">
    <div class="container mt-5" >
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://unbxd.com/wp-content/uploads/2020/01/logo.svg" class="card-img img-responsive mt-5" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Unbxd PIM Woocommerce</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <?php if($unbxd_pim_installed): ?>
                                        <a href="<?php echo $installation_url ?>" target="_blank" style="width: 200px;" type="button" class="btn btn-primary primary-btn login-btn  font-weight-bold">
                                            Dashboard
                                        </a>
                                    <?php else: ?>
                                        <a href="https://pimapps.unbxd.io/setup/woocommerce/install/?store_url=<?php echo $site_url ?>" target="_blank" style="width: 200px;" type="button" class="btn btn-primary primary-btn login-btn  font-weight-bold">
                                            Install Unbxd PIM
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://pim.unbxd.com/"  height="700px;"></iframe>
        </div>
    </div>
    <?php
}
?>