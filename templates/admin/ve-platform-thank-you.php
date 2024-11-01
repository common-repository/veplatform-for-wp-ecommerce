<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<fieldset id="veinteractive_main">
    <div class="ve_header">
        <div class="header_top content_grid">
            <div class="left_header">
                <img src="<?php echo _VEPLATFORM_PLUGIN_URL_; ?>assets/img/main-logo.png" alt="VeInteractive"/>
            </div>
            <?php if ( $api->showLogin() ): ?>
            <div class="right_header">
                <nav class="main_menu">
                    <ul>
                        <li>
                            <span class="cli_quest"><?php echo __('VE_ALREADY_CLIENT', 'veplatform'); ?></span>
                            <a target="_blank" href="http://veplatform.veinteractive.com/Account/Login?ReturnUrl=%2f">
                                <?php echo __('VE_LOGIN', 'veplatform'); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ve_main">
        <div class="thanks_info content_grid">
            <div class="info_text">
                <img src="<?php echo _VEPLATFORM_PLUGIN_URL_; ?>assets/img/wpec_logo2_resize.png" alt="WPeCommerce" />
                <div class="main_messages">
                    <h1 class="thx-msg thanks_message">
                        <?php echo __('VE_THANK_YOU_FOR_SELECTING', 'veplatform'); ?>
                    </h1>
                </div>
                <p><?php echo __('VE_THANK_YOU_FOR_SELECTING_APP', 'veplatform'); ?></p>
                <p><?php echo __('VE_ACCOUNT_MANAGER_CONTACT', 'veplatform'); ?></p>
                <p><?php echo __('VE_CREATIVE_EXAMPLES_APP', 'veplatform'); ?></p>
                <ul class="social-info">
                  <li><span class="icons-envelope"></span><a href="mailto:wpecommerce@veinteractive.com">wpecommerce@veinteractive.com</a></li>
                  <li><span class="icons-phone"></span><span class="country">US:</span><span>+1 857- 284-7007</span></li>
                  <li><span class="icons-phone"></span><span class="country">UK:</span><span>+44 (0)20 337 22555</span></li>
                </ul>
                <p><?php echo __('VE_BEST_REGARDS', 'veplatform'); ?></p>
                <p>Ve Interactive</p>
            </div>
        </div>
    </div>
</fieldset>
