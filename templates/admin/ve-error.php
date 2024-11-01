<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<fieldset id="veinteractive_main">
    <div class="ve_header">
        <div class="header_top content_grid">
            <div class="left_header">
                <img src="<?php echo _VEPLATFORM_PLUGIN_URL_; ?>assets/img/main-logo.png" alt="VeInteractive"/>
            </div>
        </div>
    </div>
    <div class="ve_main">
        <div class="thanks_info content_grid">
              <img src="<?php echo _VEPLATFORM_PLUGIN_URL_; ?>assets/img/wpec_logo2_resize.png" alt="WPeCommerce" />
              <div class="faint-line">
                <div class="main_messages">
                      <h1 class="thx-msg">
                        <?php echo __('VE_ERROR_INSTALLING_1', 'veplatform'); ?>
                      </h1>
                </div>
            </div>
            <div class="info_text">
                <p><?php echo __('VE_CONNECTION_ERROR_WITH_VEINTERACTIVE_1', 'veplatform'); ?>
                <a href='#' onclick='location.reload(true); return false;'>
                <?php echo __('VE_CONNECTION_ERROR_WITH_VEINTERACTIVE_2', 'veplatform'); ?>
                </a>
                </p>
                <p><?php echo __('VE_CONNECTION_ERROR_WITH_VEINTERACTIVE_DOUBT', 'veplatform'); ?></p>
                <ul class="social-info">
                    <li><span class="icons-envelope"></span> <a href="mailto:wpecommerce@veinteractive.com">wpecommerce@veinteractive.com</a></li>
                    <li><span class="icons-phone"></span> <span class="country">US:</span> <span>+1 857- 284-7007</span></li>
                    <li><span class="icons-phone"></span> <span class="country">UK:</span> <span>+44 (0)20 337 22555</span></li>
                </ul>
                <p><?php echo __('VE_BEST_REGARDS', 'veplatform'); ?></p>
                <p>Ve Interactive</p>
            </div>
        </div>
    </div>
</fieldset>
