<?php
if ( ! defined( 'ABSPATH' ) ) exit;
add_settings_field(
  'sscdn-check-products-taxo-widget',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-notice-position',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-countdown-position',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-notice-timelabel',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-shipimg-check',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-shipping-icon',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-shipimgsize-check',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-shipimgsize-check1',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
// Taxos label check
add_settings_field(
  'sscdn-only-countdown-sss',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-only-countdown-show',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-checkout-page-check',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-thankyou-page-check',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
// controls
// *** style for countdown
add_settings_field(
  'sscdn-estimass-color_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-bgcolor_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-fontsize_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-fontweight_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-padding_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-margin_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-fontfamilly_countdown',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
// *** estimass
add_settings_field(
  'sscdn-estimass-color',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-bgcolor',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-bgcolor5',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-fontsize',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-fontweight',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-padding',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-margin',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-fontfamilly',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimass-presets',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-color',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-bgcolor',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-box-shadow',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-border-radius',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-box-shadow5',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-border-radius5',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-fontsize',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-fontweight',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-reason-fontfamilly',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
// *** dimensions
add_settings_field(
  'sscdn-estimdate-fontsize',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-fontweight',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-padding',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-margin',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-fontfamilly',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
// *** dimensions style for countdown
add_settings_field(
  'sscdn-estimdate-colorL',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-fontsizeL',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-fontweightL',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-paddingL',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-marginL',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);
add_settings_field(
  'sscdn-estimdate-fontfamillyL',
  '',
  'sscdn_plugin_function_for_datas_callback',
  'sscdn-plugin-main-menu',
  'sscdn-plugin-switch-section'
);

// Register Settings all
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-check-products-taxo-widget' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-notice-position' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-countdown-position' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-notice-timelabel' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-shipimg-check' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-shipping-icon' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-shipimgsize-check' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-shipimgsize-check1' 
);
// Taxos label check
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-only-countdown-sss' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-only-countdown-show' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-checkout-page-check' 
);
register_setting(
  'sscdn-plugin-settings', 
  'sscdn-thankyou-page-check' 
);
// controls
// ***  style for countdown
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-color_countdown'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-bgcolor_countdown'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-fontsize_countdown'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-fontweight_countdown'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-padding_countdown'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-margin_countdown'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-fontfamilly_countdown'
);
// *** estimass
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-color'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-bgcolor'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-bgcolor5'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-fontsize'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-fontweight'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-padding'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-margin'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-fontfamilly'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimass-presets'
);
// *** estimdate
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-color'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-bgcolor'
);
// *** reason
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-box-shadow'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-border-radius'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-box-shadow5'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-border-radius5'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-fontsize'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-fontweight'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-reason-fontfamilly'
);
// *** estimdate
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-fontsize'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-fontweight'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-padding'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-margin'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-fontfamilly'
);

// *** estimdate style for countdown
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-colorL'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-fontsizeL'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-fontweightL'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-paddingL'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-marginL'
);
register_setting(
  'sscdn-plugin-settings',
  'sscdn-estimdate-fontfamillyL'
);