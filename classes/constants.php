<?php

define('_VEPLATFORM_MINIMUM_WP_VERSION_', '4.0');
define('_VEPLATFORM_PLUGIN_URL_', plugin_dir_url(__FILE__) . '../');
define('_VEPLATFORM_PLUGIN_DIR_', plugin_dir_path(__FILE__) . '../');
define('_VEPLATFORM_PLUGIN_HTTP_URL_', esc_url(add_query_arg(array('page' => 'veplatform-plugin-settings'), admin_url('admin.php'))));
define('_VEPLATFORM_MISSING_WPECOMMERCE_', '<div class="error"><p>' . __('Please install and activate WP eCommerce, before activating VePlatform. If you have WooCommerce or VePlatform module already active please deactivate them.') . '</p></div>');
define('_VEPLATFORM_LOG_INSTALL_CALL_', 'Call webservice to install merchant');
define('_VEPLATFORM_MERCHANT_SUCCESS_', 'Merchant has been properly installed in webservice');
define('_VEPLATFORM_MERCHANT_ERROR_', 'Error in webservice when installing merchant');
define('_VEPLATFORM_MODULE_ACTIVATION_', 'Module has been activated');
define('_VEPLATFORM_MODULE_DEACTIVATION_', 'Module has been deactivated');
define('_VEPLATFORM_PRODUCT_SUCCESS_', 'Products have been properly saved in webservice');
define('_VEPLATFORM_PRODUCT_ERROR_', 'Error in webservice when saving products');
define('_VEPLATFORM_BASE_FILE_', 'veplatformWP/veplatform.php');
define('_VEPLATFORM_WP_VERSION_ERROR', '<p>The <strong>Ve Platform</strong> plugin requires WordPress version ' . _VEPLATFORM_MINIMUM_WP_VERSION_ . ' or greater.</p>');
define('_VEPLATFORM_INFO_', 'INFO');
define('_VEPLATFORM_ERROR_', 'ERROR');
define('_VEPLATFORM_OK_', 'OK');

?>
