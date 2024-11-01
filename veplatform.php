<?php
/**
 * Plugin Name: Ve Platform for WP eCommerce
 * Plugin URI: http://www.veinteractive.com
 * Description: Instantly increase your sales by adding the VePlatform's integrated remarketing and re-engagement apps that convert customers who abandon your site.
 * Version: 16.1.6.1
 * Author: Ve Interactive
 * Author URI: http://www.veinteractive.com
 * License: GPL2
 */
require_once('classes/class-veplatform.php');
require_once('templates/frontend/tag.php');
require_once('templates/frontend/pixel.php');

if(class_exists('VePlatform'))
{
    $veplatform = new VePlatform();

    register_activation_hook(__FILE__, array('VePlatform', 'veplatform_plugin_activation'));
    register_deactivation_hook(__FILE__, array('VePlatform', 'veplatform_plugin_uninstall'));
    add_action('wp_footer', 'insert_tag');
    add_action('wpsc_transaction_results_shutdown', 'insert_pixel');

    //add settings link for module in
    $plugin = plugin_basename(__FILE__);
    add_filter("plugin_action_links_".$plugin, array('VePlatform','veplatform_plugin_settings_link'));
}
