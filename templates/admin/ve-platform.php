<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<form name="veplatform_conf" id="veplatform_conf" action="<?php echo _VEPLATFORM_PLUGIN_HTTP_URL_; ?>" method="POST">
    <fieldset id="veinteractive_main">
        <div class="ve_header">
            <div class="header_top content_grid">
                <div class="left_header">
                    <img src="<?php echo _VEPLATFORM_PLUGIN_URL_; ?>assets/img/main-logo.png" alt="VeInteractive"/>
                </div>
                <?php if ( $api->showLogin() ): ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="ve_main">
            <div class="company_info content_grid">
                <div class="info_text commerce_logo">
                    <img src="<?php echo _VEPLATFORM_PLUGIN_URL_; ?>assets/img/wpec_logo2_resize.png" alt="WPeCommerce" />
                    <div class="faint-line">
                        <div class="main_messages">
                            <h1 class="conf-msg">
                                <?php echo __('VE_NOW_CHOOSE_APPLICATIONS', 'veplatform'); ?>
                            </h1>
                        </div>
                    </div>
                    <p>
                        <?php echo __('VE_BY_INTEGRATING_VEPLATFORM', 'veplatform'); ?>
                    </p>
                    <ul class="ve-list">
                        <li><?php echo __('VE_REDUCE_BOUNCE_RATE', 'veplatform'); ?></li>
                        <li><?php echo __('VE_RECOVER_LOST_SALES', 'veplatform'); ?></li>
                        <li><?php echo __('VE_INCREASE_CONVERSION', 'veplatform'); ?></li>
                        <li><?php echo __('VE_REACH_PROSPECTS', 'veplatform'); ?></li>
                    </ul>
                    <p><?php echo __('VE_ACTIVATING_VE_APPS', 'veplatform'); ?></p>
                </div>
            </div>
            <div class="product_activation">
                <div class="product_activation_content content_grid">
                    <h2 class="product_act_title"><?php echo __('VE_PLEASE_SELECT_APPS', 'veplatform'); ?></h2>
                    <div id="product_title_underline"></div>
                    <div id="veads-section" class="veads product">
                        <div class="product_logo product-logo-clickable <?php if ($api->isProductActive('veads')): ?>no-clickable<?php endif; ?>" data-target="adsCb"></div>
                        <div class="product_name">
                            <p><?php echo __('VE_DYNAMIC_DISPLAY_ADVERTISING', 'veplatform'); ?></p>
                        </div>
                        <input type="checkbox" class="veplatform-checkbox" id="adsCb" name="product[]" value="veads" checked<?php if ($api->isProductActive('veads')): ?> disabled<?php endif; ?> />
                        <label for="adsCb"></label>
                        <button id="veads_moreinfo" class="quest_btn ve-open-info" data-target="veads_info_content">
                            <?php echo __('VE_FIND_OUT_MORE', 'veplatform'); ?><span class="icons-pike"></span>
                        </button>
                    </div>
                    <div id="veassist-section" class="veassist product">
                        <div class="product_logo product-logo-clickable <?php if ($api->isProductActive('veassist')): ?>no-clickable<?php endif; ?>" data-target="assistCb"></div>
                        <div class="product_name">
                            <p><?php echo __('VE_SEARCH_OPTIMIZATION', 'veplatform'); ?></p>
                        </div>
                        <input type="checkbox" class="veplatform-checkbox" id="assistCb" name="product[]" value="veassist" checked<?php if ($api->isProductActive('veassist')): ?> disabled<?php endif; ?> />
                        <label for="assistCb"></label>
                        <button id="veassist_moreinfo" class="quest_btn ve-open-info" data-target="veassist_info_content">
                            <?php echo __('VE_FIND_OUT_MORE', 'veplatform'); ?> <span class="icons-pike"></span>
                        </button>
                    </div>
                    <div id="veprompt-section" class="veprompt product">
                        <div class="product_logo product-logo-clickable <?php if ($api->isProductActive('veprompt')): ?>no-clickable<?php endif; ?>" data-target="promptCb"></div>
                        <div class="product_name">
                            <p><?php echo __('VE_INCREASE_WEBSITE_CONVERSION', 'veplatform'); ?></p>
                        </div>
                        <input type="checkbox" class="veplatform-checkbox" id="promptCb" name="product[]" value="veprompt" checked<?php if ($api->isProductActive('veprompt')): ?> disabled<?php endif; ?> />
                        <label for="promptCb"></label>
                        <button id="veprompt_moreinfo" class="quest_btn ve-open-info" data-target="veprompt_info_content">
                            <?php echo __('VE_FIND_OUT_MORE', 'veplatform'); ?><span class="icons-pike"></span>
                        </button>
                    </div>
                    <div id="vecontact-section" class="vecontact product">
                        <div class="product_logo product-logo-clickable <?php if ($api->isProductActive('vecontact')): ?>no-clickable<?php endif; ?>" data-target="contactCb"></div>
                        <div class="product_name">
                            <p><?php echo __('VE_RECOVER_LOST_SHOPPING_CARTS', 'veplatform'); ?></p>
                        </div>
                        <input type="checkbox" class="veplatform-checkbox" id="contactCb" name="product[]" value="vecontact" checked<?php if ($api->isProductActive('vecontact')): ?> disabled<?php endif; ?> />
                        <label for="contactCb"></label>
                        <button id="vecontact_moreinfo" class="quest_btn ve-open-info" data-target="vecontact_info_content">
                            <?php echo __('VE_FIND_OUT_MORE', 'veplatform'); ?> <span class="icons-pike"></span>
                        </button>
                    </div>

                    <div class="vebutton">
                        <input name="ve-confirm-btn" id="confirm-btn" class="confirm-btn" type="submit" value="<?php echo __('VE_CONFIRM_SELECTION', 'veplatform'); ?>" />
                    </div>

                    <div class="product-extra-info">
                        <div id="veprompt_info_content" class="hidden ve-info-content">
                            <div class="extra_content">
                                <h2 class="product_act_title product_more">VePrompt: <?php echo __('VE_INCREASE_WEBSITE_CONVERSION', 'veplatform'); ?></h2>
                                <div class="product_logo"></div>
                                <p>
                                    <?php echo __('VE_DESCRIPTION_VEPROMPT', 'veplatform'); ?>
                                </p>
                            </div>
                        </div>
                        <div id="vecontact_info_content" class="hidden ve-info-content">
                            <div class="extra_content">
                                <h2 class="product_act_title product_more">VeContact: <?php echo __('VE_RECOVER_LOST_SHOPPING_CARTS', 'veplatform'); ?></h2>
                                <div class="product_logo"></div>
                                <p>
                                    <?php echo __('VE_DESCRIPTION_VECONTACT', 'veplatform'); ?>
                                </p>
                            </div>
                        </div>
                        <div id="veassist_info_content" class="hidden ve-info-content">
                            <div class="extra_content">
                                <h2 class="product_act_title product_more">VeAssist: <?php echo __('VE_SEARCH_OPTIMIZATION', 'veplatform'); ?></h2>
                                <div class="product_logo"></div>
                                <p>
                                    <?php echo __('VE_DESCRIPTION_VEASSIST', 'veplatform'); ?>
                                </p>
                            </div>
                        </div>
                        <div id="veads_info_content" class="hidden ve-info-content">
                            <div class="extra_content">
                                <h2 class="product_act_title product_more">VeAds: <?php echo __('VE_DYNAMIC_DISPLAY_ADVERTISING', 'veplatform'); ?></h2>
                                <div class="product_logo"></div>
                                <p>
                                    <?php echo __('VE_DESCRIPTION_VEADS', 'veplatform'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
