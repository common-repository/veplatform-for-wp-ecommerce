<?php

if (!defined('ABSPATH'))
{
    exit; // Exit if accessed directly
}

require_once('class-helper.php');
require_once('class-api.php');
require_once('constants.php');

if(!class_exists('VePlatform'))
{
    class VePlatform
    {
        public function __construct()
        {
            add_action('admin_init', array(&$this, 'admin_init'));
            add_action('admin_menu', array(&$this, 'add_menu'));
            add_action('plugins_loaded', array(&$this, 'veplatform_load_textdomain'));
        }

        /**
         * Adding settings link for the activate Ve Platform plugin
         *
         * @param array $links
         */
        public static function veplatform_plugin_settings_link($links)
        {
            if (array_key_exists( 'edit', $links ))
            {
                unset($links['edit']);
            }

            $settings_link = '<a href="' . _VEPLATFORM_PLUGIN_HTTP_URL_ . '">'. __('Settings') . '</a>';
            array_unshift($links, $settings_link);
            return $links;
        }

        public function veplatform_plugin_activation()
        {
            global $wp_version;
            $api = new Ve_API();

            if(version_compare($wp_version, _VEPLATFORM_MINIMUM_WP_VERSION_, '<'))
            {
                $error = _VEPLATFORM_WP_VERSION_ERROR;

                deactivate_plugins(_VEPLATFORM_BASE_FILE_);
                wp_die($error, 'Plugin Activation Error', array( 'response' => 200, 'back_link' => true ));
            }

            if ($api->isInstalled() === false)
            {
                VeHelper::veplatform_log(_VEPLATFORM_LOG_INSTALL_CALL_, _VEPLATFORM_INFO_);

                if ($api->installModule() === true)
                {
                    VeHelper::veplatform_log(_VEPLATFORM_MERCHANT_SUCCESS_, _VEPLATFORM_INFO_);
                }
                else
                {
                    VeHelper::veplatform_log(_VEPLATFORM_MERCHANT_ERROR_, _VEPLATFORM_ERROR_);
                }
            }
        }

        public function veplatform_plugin_activated()
        {
            VeHelper::veplatform_log(_VEPLATFORM_MODULE_ACTIVATION_, _VEPLATFORM_INFO_);

            exit(wp_redirect(_VEPLATFORM_PLUGIN_HTTP_URL_ ));
        }

        public function veplatform_plugin_uninstall()
        {
            $api = new Ve_API();
            $api->uninstallModule();

            VeHelper::veplatform_log(_VEPLATFORM_MODULE_DEACTIVATION_, _VEPLATFORM_INFO_);
        }

        public function veplatform_plugin_deactivated()
        {
            VeHelper::veplatform_log(_VEPLATFORM_MODULE_DEACTIVATION_, _VEPLATFORM_INFO_);
        }

        public function admin_init()
        {
            if (!is_admin() || !current_user_can('activate_plugins') || !is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ||
                is_plugin_active('woocommerce/woocommerce.php') || is_plugin_active('veplatform/veplatform.php'))
                {
                    add_action('admin_notices', array(&$this,'missing_wpcommerce'));
                    deactivate_plugins(_VEPLATFORM_BASE_FILE_);

                    if (isset($_GET['activate']))
                    {
                        unset($_GET['activate']);
                    }

                    return;
               }

            $this->init_settings();
        }

        public function missing_wpcommerce()
        {
            echo _VEPLATFORM_MISSING_WPECOMMERCE_;
        }

        public function init_settings()
        {
            register_setting('veplatform-group', 've_platform');
        }

        public function add_menu()
        {
            $products_page = 'edit.php?post_type=wpsc-product';

            add_submenu_page(
                             $products_page,
                             'Ve Platform',
                             'Ve Platform',
                             'manage_options',
                             'veplatform-plugin-settings',
                             array(&$this, 'veplatform_plugin_settings_page')
                            );
        }

        public function veplatform_plugin_settings_page()
        {
            $template = 've-platform-thank-you';
            $api = new Ve_API();

            if ($api->isInstalled() === false && VeHelper::getHasRun()==0)
            {

                VeHelper::veplatform_log(_VEPLATFORM_LOG_INSTALL_CALL_, _VEPLATFORM_INFO_);

                if ($api->installModule() === false)
                {
                    VeHelper::veplatform_log(_VEPLATFORM_MERCHANT_ERROR_, _VEPLATFORM_ERROR_);
                    $template = 've-error';
                }

                VeHelper::veplatform_log(_VEPLATFORM_MERCHANT_SUCCESS_, _VEPLATFORM_INFO_);
            }

            include( _VEPLATFORM_PLUGIN_DIR_ . '/templates/admin/' . $template . '.php');
            wp_enqueue_style( 'veplatform_admin_styles_ve_veplatform_admin', _VEPLATFORM_PLUGIN_URL_ . 'assets/css/ve_veplatform_admin.css', array());
            wp_enqueue_script( 'veplatform_admin_js_app', _VEPLATFORM_PLUGIN_URL_ . 'assets/js/app.js', array());
            wp_enqueue_script( 'veplatform_admin_js_admin', _VEPLATFORM_PLUGIN_URL_ . 'assets/js/libs/ve_veplatform_admin.js', array());
        }

        public function veplatform_load_textdomain()
        {
            $locale = apply_filters( 'plugin_locale', get_locale(), 'veplatform' );
            $pluginPath = dirname(plugin_dir_path(__FILE__));

            if (file_exists($pluginPath . '/languages/' . $locale . '.mo'))
            {
                load_textdomain( 'veplatform', $pluginPath . '/languages/' . $locale . '.mo' );
            }
            else
            {
                load_textdomain( 'veplatform', $pluginPath . '/languages/en_US.mo' );
            }
        }

    }
}

?>
