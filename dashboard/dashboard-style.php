<?php
if ( ! defined( 'ABSPATH' ) ) exit;
// Taxos label check
$sscdn_only_countdown_sss = get_option( 'sscdn-only-countdown-sss', 'number' );
$sscdn_only_countdown_show = get_option( 'sscdn-only-countdown-show', 'show' );
$sscdn_checkout_page_check = get_option( 'sscdn-checkout-page-check', 'on' );
$sscdn_thankyou_page_check = get_option( 'sscdn-thankyou-page-check', 'on' );
// Label controls
// *** style for countdown
$sscdn_estimass_color_countdown_value = get_option( 'sscdn-estimass-color_countdown' );
$sscdn_estimass_bgcolor_countdown_value = get_option( 'sscdn-estimass-bgcolor_countdown' );
$sscdn_estimass_fontsize_countdown_value = get_option( 'sscdn-estimass-fontsize_countdown');
$sscdn_estimass_fontweight_countdown_value = get_option( 'sscdn-estimass-fontweight_countdown');
$sscdn_estimass_padding_countdown_value = get_option( 'sscdn-estimass-padding_countdown');
$sscdn_estimass_margin_countdown_value = get_option( 'sscdn-estimass-margin');
$sscdn_estimass_fontfamilly_countdown_value = get_option( 'sscdn-estimass-fontfamilly_countdown' );
// *** estimass
$sscdn_estimass_color_value = get_option( 'sscdn-estimass-color' );
$sscdn_estimass_bgcolor_value = get_option( 'sscdn-estimass-bgcolor');
$sscdn_estimass_bgcolor5_value = get_option( 'sscdn-estimass-bgcolor5');
$sscdn_estimass_fontsize_value = get_option( 'sscdn-estimass-fontsize');
$sscdn_estimass_fontweight_value = get_option( 'sscdn-estimass-fontweight');
$sscdn_estimass_padding_value = get_option( 'sscdn-estimass-padding');
$sscdn_estimass_margin_value = get_option( 'sscdn-estimass-margin');
$sscdn_estimass_fontfamilly_value = get_option( 'sscdn-estimass-fontfamilly' );
$sscdn_estimass_presets_value = get_option( 'sscdn-estimass-presets', '1' );
// *** estimdate
$sscdn_shipping_icon_value = get_option( 'sscdn-shipping-icon');
$sscdn_shipimgsize_value = get_option( 'sscdn-shipimgsize-check');
$sscdn_shipimgsize_value1 = get_option( 'sscdn-shipimgsize-check1');
$sscdn_notice_position_value = get_option( 'sscdn-notice-position', 'top' );
$sscdn_countdown_position_value = get_option( 'sscdn-countdown-position', 'top' );
$sscdn_notice_timelabel_value = get_option( 'sscdn-notice-timelabel', 'full' );
// *** reason
$sscdn_reason_box_shadow_value = get_option( 'sscdn-reason-box-shadow', '0 0 10px rgb(104 104 104 / 50%)');
$sscdn_reason_box_shadow5_value = get_option( 'sscdn-reason-box-shadow5');
$sscdn_reason_border_radius_value = get_option( 'sscdn-reason-border-radius');
$sscdn_reason_border_radius5_value = get_option( 'sscdn-reason-border-radius5');
$sscdn_reason_fontsize_value = get_option( 'sscdn-reason-fontsize');
$sscdn_reason_fontweight_value = get_option( 'sscdn-reason-fontweight');
$sscdn_reason_fontfamilly_value = get_option( 'sscdn-reason-fontfamilly');
// *** estimdate
$sscdn_estimdate_color_value = get_option( 'sscdn-estimdate-color' );
$sscdn_estimdate_bgcolor_value = get_option( 'sscdn-estimdate-bgcolor' );
$sscdn_estimdate_fontsize_value = get_option( 'sscdn-estimdate-fontsize');
$sscdn_estimdate_fontweight_value = get_option( 'sscdn-estimdate-fontweight');
$sscdn_estimdate_padding_value = get_option( 'sscdn-estimdate-padding');
$sscdn_estimdate_margin_value = get_option( 'sscdn-estimdate-margin');
$sscdn_estimdate_fontfamilly_value = get_option( 'sscdn-estimdate-fontfamilly');

// *** estimdateL style for countdown
$sscdn_estimdate_colorL_value = get_option( 'sscdn-estimdate-colorL');
$sscdn_estimdate_fontsizeL_value = get_option( 'sscdn-estimdate-fontsizeL');
$sscdn_estimdate_fontweightL_value = get_option( 'sscdn-estimdate-fontweightL');
$sscdn_estimdate_paddingL_value = get_option( 'sscdn-estimdate-paddingL');
$sscdn_estimdate_marginL_value = get_option( 'sscdn-estimdate-marginL');
$sscdn_estimdate_fontfamillyL_value = get_option( 'sscdn-estimdate-fontfamillyL');

// Get all font here start
$all_fonts = [
	'' => esc_html__('Default', 'sale-sync-countdown'),
	'Arial, sans-serif' => esc_html__('Arial', 'sale-sync-countdown'),
	'Helvetica, sans-serif' => esc_html__('Helvetica', 'sale-sync-countdown'),
	'Georgia, serif' => esc_html__('Georgia', 'sale-sync-countdown'),
	'fantasy' => esc_html__('Fantasy', 'sale-sync-countdown'),
	'Tahoma, sans-serif' => esc_html__('Tahoma', 'sale-sync-countdown'),
	'Courier New, monospace' => esc_html__('Courier New', 'sale-sync-countdown'),
	'Palatino, serif' => esc_html__('Palatino', 'sale-sync-countdown'),
	'Garamond, serif' => esc_html__('Garamond', 'sale-sync-countdown'),
	'Century Gothic, sans-serif' => esc_html__('Century Gothic', 'sale-sync-countdown'),
	'Futura, sans-serif' => esc_html__('Futura', 'sale-sync-countdown'),
	'Roboto, sans-serif' => esc_html__('Roboto', 'sale-sync-countdown'),
	'Open Sans, sans-serif' => esc_html__('Open Sans', 'sale-sync-countdown'),
	'Lato, sans-serif' => esc_html__('Lato', 'sale-sync-countdown'),
	'Montserrat, sans-serif' => esc_html__('Montserrat', 'sale-sync-countdown'),
	'Raleway, sans-serif' => esc_html__('Raleway', 'sale-sync-countdown'),
	'Poppins, sans-serif' => esc_html__('Poppins', 'sale-sync-countdown'),
	'Nunito, sans-serif' => esc_html__('Nunito', 'sale-sync-countdown'),
	'Playfair Display, serif' => esc_html__('Playfair Display', 'sale-sync-countdown'),
	'Quicksand, sans-serif' => esc_html__('Quicksand', 'sale-sync-countdown'),
];
// Presets
$ss_all_presets = [
  '1' => esc_html__('Style1', 'sale-sync-countdown'),
  '2' => esc_html__('Style2', 'sale-sync-countdown'),
  '3' => esc_html__('Style3', 'sale-sync-countdown'),
  '4' => esc_html__('Style4', 'sale-sync-countdown'),
  '5' => esc_html__('Style5', 'sale-sync-countdown'),
  '6' => esc_html__('Style6', 'sale-sync-countdown'),
  '15' => esc_html__('Style7', 'sale-sync-countdown'),
  '16' => esc_html__('Style8', 'sale-sync-countdown'),
  '17' => esc_html__('Style9', 'sale-sync-countdown'),
  '18' => esc_html__('Style10', 'sale-sync-countdown'),
  '19' => esc_html__('Style11', 'sale-sync-countdown'),
  '20' => esc_html__('Style12', 'sale-sync-countdown'),
  '21' => esc_html__('Style13', 'sale-sync-countdown'),
  '22' => esc_html__('Style14', 'sale-sync-countdown'),
  '23' => esc_html__('Style15', 'sale-sync-countdown'),
  '24' => esc_html__('Style16', 'sale-sync-countdown'),
  '25' => esc_html__('Style17', 'sale-sync-countdown'),
  '26' => esc_html__('Style18', 'sale-sync-countdown'),
  '27' => esc_html__('Style19', 'sale-sync-countdown'),
  '28' => esc_html__('Style20', 'sale-sync-countdown'),
  '29' => esc_html__('Style21', 'sale-sync-countdown'),
  '30' => esc_html__('Style22', 'sale-sync-countdown'),
  '31' => esc_html__('Style23', 'sale-sync-countdown'),
];
?>
<div class="admin-panel">
  <form method="post" action="options.php">
    <div class="header">
			<?php
			settings_fields( 'sscdn-plugin-settings' );
      ?>
      <a href="https://bestwpdeveloper.com/" target="_blank"><h1 class="dashboard-title"><?php echo esc_html__('BEST WP DEVELOPER', 'sale-sync-countdown'); ?></h1></a>
      <?php
			do_settings_sections( 'sscdn-plugin-main-menu' );
      ?>
      <div class="save-button">
        <?php submit_button(); ?>
      </div>
    </div>
    <div class="section">
      <div class="clmn-wrap first-clm">
        <div class="select-container select-control sscdn-style-style">
          <label for=""><?php echo esc_html__('Presets Style', 'sale-sync-countdown');?></label>
          <?php
          echo '<select id="sscdn-estimass-presets" name="sscdn-estimass-presets">';
            foreach($ss_all_presets as $style_slug => $style_title){
              echo '<option value="'.esc_attr($style_slug).'" '.selected(esc_attr($sscdn_estimass_presets_value),esc_attr($style_slug)).'>'.esc_html__($style_title,'sale-sync-countdown').'</option>';
            }
          echo '</select>';
          ?>
        </div>
        <div class="select-container">
          <label for=""><?php echo esc_html__('Sold Position to Label', 'sale-sync-countdown'); ?></label>
          <select name="sscdn-notice-position">
            <option value="top" <?php selected($sscdn_notice_position_value, 'top'); ?>><?php echo esc_html__('Top', 'sale-sync-countdown'); ?></option>
            <option value="bottom" <?php selected($sscdn_notice_position_value, 'bottom'); ?>><?php echo esc_html__('Bottom', 'sale-sync-countdown'); ?></option>
          </select>
        </div>
        <div class="select-container">
          <label for=""><?php echo esc_html__('Label Position to Countdown', 'sale-sync-countdown'); ?></label>
          <select name="sscdn-countdown-position">
            <option value="top" <?php selected($sscdn_countdown_position_value, 'top'); ?>><?php echo esc_html__('Top', 'sale-sync-countdown'); ?></option>
            <option value="bottom" <?php selected($sscdn_countdown_position_value, 'bottom'); ?>><?php echo esc_html__('Bottom', 'sale-sync-countdown'); ?></option>
          </select>
        </div>
        <div class="select-container">
          <label for=""><?php echo esc_html__('Time Label Type', 'sale-sync-countdown'); ?></label>
          <select name="sscdn-notice-timelabel">
            <option value="short" <?php selected($sscdn_notice_timelabel_value, 'short'); ?>><?php echo esc_html__('D H M S', 'sale-sync-countdown'); ?></option>
            <option value="full" <?php selected($sscdn_notice_timelabel_value, 'full'); ?>><?php echo esc_html__('Day Hour Minute Second', 'sale-sync-countdown'); ?></option>
          </select>
        </div>
        <div class="select-container emessage-container">
          <label><?php echo esc_html__('Image Url:', 'sale-sync-countdown'); ?></label>
          <?php echo '<input type="text" name="sscdn-shipping-icon" id="sscdn-shipping-icon" value="'.$sscdn_shipping_icon_value.'" title="If don\'t want empty it."  placeholder="Image url here">';?>
        </div>
        <div class="select-container emessage-container">
          <label><?php echo esc_html__('Image Width', 'sale-sync-countdown'); ?></label>
          <input type="text" name="sscdn-shipimgsize-check" value="<?php echo $sscdn_shipimgsize_value; ?>" title="If don\'t want empty it."  placeholder="px, %, rem">
        </div>
        <div class="select-container emessage-container">
          <label><?php echo esc_html__('Image Height', 'sale-sync-countdown'); ?></label>
          <input type="text" name="sscdn-shipimgsize-check1" value="<?php echo $sscdn_shipimgsize_value1; ?>" title="If don\'t want empty it."  placeholder="px, %, rem">
        </div>
        <div class="select-container emessage-container">
          <label><?php echo esc_html__('Sold/Stock Style', 'sale-sync-countdown'); ?></label>
          <select name="sscdn-only-countdown-sss">
            <option value="number" <?php selected($sscdn_only_countdown_sss, 'number'); ?>><?php echo esc_html__('Number', 'sale-sync-countdown'); ?></option>
            <option value="progress" <?php selected($sscdn_only_countdown_sss, 'progress'); ?>><?php echo esc_html__('Progress', 'sale-sync-countdown'); ?></option>
          </select>
        </div>
        <div class="select-container emessage-container">
          <label><?php echo esc_html__('Countdown Label View', 'sale-sync-countdown'); ?></label>
          <select name="sscdn-only-countdown-show">
            <option value="show" <?php selected($sscdn_only_countdown_show, 'show'); ?>><?php echo esc_html__('Show', 'sale-sync-countdown'); ?></option>
            <option value="hide" <?php selected($sscdn_only_countdown_show, 'hide'); ?>><?php echo esc_html__('Hide', 'sale-sync-countdown'); ?></option>
          </select>
        </div>
        <div class="list-container sscdn_cmmn_chacthak">
          <input type="checkbox" name="sscdn-checkout-page-check" value="on" <?php echo checked( $sscdn_checkout_page_check, 'on', false ); ?>>
          <label class="checker-switch"><?php echo esc_html__('Show in shop page', 'sale-sync-countdown'); ?></label>
        </div>
        <div class="list-container sscdn_cmmn_chacthak">
          <input type="checkbox" name="sscdn-thankyou-page-check" value="on" <?php echo checked( $sscdn_thankyou_page_check, 'on', false ); ?>>
          <label class="checker-switch"><?php echo esc_html__('Show in single page before add-to-cart button (Default)', 'sale-sync-countdown'); ?></label>
        </div>
        <div class="list-container sscdn_cmmn_chacthak">
          <h2 class="checker-switch"><?php echo esc_html__('Use shortcode on single page: (Extra)', 'sale-sync-countdown'); ?></h2>
          <span id="myHeading"><?php echo esc_html__('[bwd_sale_countdown]', 'sale-sync-countdown'); ?></span>
          <button class="list-btn" onclick="copyText()"><?php echo esc_html__('Copy', 'sale-sync-countdown'); ?></button>
        </div>
      </div>
      <div class="secound_clmn_w">
        <h2 for="" class="secound-clmstyle"><?php echo esc_html__('Notice Wrap / Sold Style', 'sale-sync-countdown');?></h2>
        <div class="secound-clm">
          <div class="control_row">
          <label for="" class="sscdn_style_title"><?php echo esc_html__('Label', 'sale-sync-countdown');?></label>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Color', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba" name="sscdn-estimass-color" id="sscdn-estimass-text" value="'.$sscdn_estimass_color_value.'" title="Text">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Size', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-fontsize" id="sscdn-estimass-fontsize" value="'.$sscdn_estimass_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Weight', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-fontweight" id="sscdn-estimass-fontweight" value="'.$sscdn_estimass_fontweight_value.'" title="Number"  placeholder="400">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Padding', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-padding" id="sscdn-estimass-padding" value="'.$sscdn_estimass_padding_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Margin', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-margin" id="sscdn-estimass-margin" value="'.$sscdn_estimass_margin_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="select-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Family', 'sale-sync-countdown');?></label>
              <?php
              echo '<select id="sscdn-estimass-fontfamilly" name="sscdn-estimass-fontfamilly">';
                foreach($all_fonts as $font_slug => $font_title){
                  echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($sscdn_estimass_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'sale-sync-countdown').'</option>';
                }
              echo '</select>';
              ?>
            </div>
          </div>
          <div class="control_row">
            <label for="" class="sscdn_style_title"><?php echo esc_html__('Sold Number', 'sale-sync-countdown');?></label>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Color', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="sscdn-estimdate-color" id="sscdn-estimdate-text" value="'.$sscdn_estimdate_color_value.'" title="Text">';?>
            </div>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Background Color', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="sscdn-estimdate-bgcolor" id="sscdn-estimdate-text" value="'.$sscdn_estimdate_bgcolor_value.'" title="Text">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Size', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-fontsize" id="sscdn-estimdate-fontsize" value="'.$sscdn_estimdate_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Weight', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-fontweight" id="sscdn-estimdate-fontweight" value="'.$sscdn_estimdate_fontweight_value.'" title="Number"  placeholder="400">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Padding', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-padding" id="sscdn-estimdate-padding" value="'.$sscdn_estimdate_padding_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Margin', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-margin" id="sscdn-estimdate-margin" value="'.$sscdn_estimdate_margin_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="select-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Family', 'sale-sync-countdown');?></label>
              <?php
              echo '<select id="sscdn-estimdate-fontfamilly" name="sscdn-estimdate-fontfamilly">';
                foreach($all_fonts as $font_slug => $font_title){
                  echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($sscdn_estimdate_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'sale-sync-countdown').'</option>';
                }
              echo '</select>';
              ?>
            </div>
          </div>
          <div class="control_row">
          <label for="" class="sscdn_style_title"><?php echo esc_html__('Wrap', 'sale-sync-countdown');?></label>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Background Color', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="sscdn-estimass-bgcolor" id="sscdn-estimass-text" value="'.$sscdn_estimass_bgcolor_value.'" title="Text">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Box Shadow', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-reason-box-shadow" id="sscdn-reason-box-shadow" value="'.$sscdn_reason_box_shadow_value.'" title="10px"  placeholder="0 0 10px rgb(104 104 104 / 50%)">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Border Radius', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-reason-border-radius" id="sscdn-reason-border-radius" value="'.$sscdn_reason_border_radius_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Size', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-reason-fontsize" id="sscdn-reason-fontsize" value="'.$sscdn_reason_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Weight', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-reason-fontweight" id="sscdn-reason-fontweight" value="'.$sscdn_reason_fontweight_value.'" title="Number"  placeholder="400">';?>
            </div>
            <div class="select-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Family', 'sale-sync-countdown');?></label>
              <?php
              echo '<select id="sscdn-reason-fontfamilly" name="sscdn-reason-fontfamilly">';
                foreach($all_fonts as $font_slug => $font_title){
                  echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($sscdn_reason_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'sale-sync-countdown').'</option>';
                }
              echo '</select>';
              ?>
            </div>
          </div>
        </div>
<!--  style for countdown -->
        <h2 for="" class="secound-clmstyle"><?php echo esc_html__('Countdown Style', 'sale-sync-countdown');?></h2>
        <div class="secound-clm">
          <div class="control_row">
          <label for="" class="sscdn_style_title"><?php echo esc_html__('Number', 'sale-sync-countdown');?></label>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Color', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba" name="sscdn-estimass-color_countdown" id="sscdn-estimass-text" value="'.$sscdn_estimass_color_countdown_value.'" title="Text">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Size', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-fontsize_countdown" id="sscdn-estimass-fontsize_countdown" value="'.$sscdn_estimass_fontsize_countdown_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Weight', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-fontweight_countdown" id="sscdn-estimass-fontweight_countdown" value="'.$sscdn_estimass_fontweight_countdown_value.'" title="Number"  placeholder="400">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Padding', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-padding_countdown" id="sscdn-estimass-padding" value="'.$sscdn_estimass_padding_countdown_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Margin', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimass-margin_countdown" id="sscdn-estimass-margin" value="'.$sscdn_estimass_margin_countdown_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="select-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Family', 'sale-sync-countdown');?></label>
              <?php
              echo '<select id="sscdn-estimass-fontfamilly" name="sscdn-estimass-fontfamilly_countdown">';
                foreach($all_fonts as $font_slug => $font_title){
                  echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($sscdn_estimass_fontfamilly_countdown_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'sale-sync-countdown').'</option>';
                }
              echo '</select>';
              ?>
            </div>
          </div>
          <div class="control_row">
            <label for="" class="sscdn_style_title"><?php echo esc_html__('Time label style', 'sale-sync-countdown');?></label>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Color', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="sscdn-estimdate-colorL" id="sscdn-estimdate-text" value="'.$sscdn_estimdate_colorL_value.'" title="Text">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Size', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-fontsizeL" id="sscdn-estimdate-fontsizeL" value="'.$sscdn_estimdate_fontsizeL_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Weight', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-fontweight" id="sscdn-estimdate-fontweightL" value="'.$sscdn_estimdate_fontweightL_value.'" title="Number"  placeholder="400">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Padding', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-padding" id="sscdn-estimdate-paddingL" value="'.$sscdn_estimdate_paddingL_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="number-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Margin', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-estimdate-marginL" id="sscdn-estimdate-margin" value="'.$sscdn_estimdate_marginL_value.'" title="Number"  placeholder="0px">';?>
            </div>
            <div class="select-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Font Family', 'sale-sync-countdown');?></label>
              <?php
              echo '<select id="sscdn-estimdate-fontfamilly" name="sscdn-estimdate-fontfamillyL">';
                foreach($all_fonts as $font_slug => $font_title){
                  echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($sscdn_estimdate_fontfamillyL_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'sale-sync-countdown').'</option>';
                }
              echo '</select>';
              ?>
            </div>
          </div>
          <div class="control_row">
          <label for="" class="sscdn_style_title"><?php echo esc_html__('Wrap', 'sale-sync-countdown');?></label>
            <div class="color-control sscdn-style-style">
              <label for=""><?php echo esc_html__('BG', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="sscdn-estimass-bgcolor5" id="sscdn-estimass-text" value="'.$sscdn_estimass_bgcolor5_value.'" title="Text">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Box Shadow', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-reason-box-shadow5" id="sscdn-reason-box-shadow5" value="'.$sscdn_reason_box_shadow5_value.'" title="10px"  placeholder="0 0 10px rgb(104 104 104 / 50%)">';?>
            </div>
            <div class="text-control sscdn-style-style">
              <label for=""><?php echo esc_html__('Border Radius', 'sale-sync-countdown');?></label>
              <?php echo '<input type="text" name="sscdn-reason-border-radius5" id="sscdn-reason-border-radius5" value="'.$sscdn_reason_border_radius5_value.'" title="10px"  placeholder="px, %, rem">';?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </form>
</div>
