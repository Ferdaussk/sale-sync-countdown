<?php
namespace ProdSSCDN;
if ( ! defined( 'ABSPATH' ) ) exit;
use ProdSSCDN\PageSettings\Page_Settings;
define( "SSCDN_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "SSCDN_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassProdSSCDN {
	private static $_instance = null;
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function sscdn_all_assets_for_the_admin(){
        wp_enqueue_style( 'sscdn-order', plugin_dir_url( __FILE__ ) . 'assets/admin/order.css', null, '1.0', 'all' );
        wp_enqueue_script( 'sscdn-script', plugin_dir_url( __FILE__ ) . 'assets/admin/script.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'sscdn-datepicker-script', plugin_dir_url( __FILE__ ) . 'assets/admin/datepicker.js', array('jquery'), '1.0', true );
		if (isset($_GET['page']) && $_GET['page'] === 'get-sale-sync-countdown') {
            wp_enqueue_script( 'sscdn-copy-shortcode', plugin_dir_url( __FILE__ ) . 'assets/admin/script-copy-shortcode.js', array('jquery'), '1.0', true );
            wp_enqueue_script( 'sscdn-wheelcolorpicker', plugin_dir_url( __FILE__ ) . 'assets/admin/colorpicker/jquery.wheelcolorpicker.js', array('jquery'), '1.0', true );
            $all_css_js_file = array(
                'sscdn-style' => array('sscdn_path_define'=>SSCDN_ASFSK_ASSETS_ADMIN_DIR_FILE . '/style.css'),
                'sscdn-wheelcolorpicker' => array('sscdn_path_define'=>SSCDN_ASFSK_ASSETS_ADMIN_DIR_FILE . '/colorpicker/wheelcolorpicker.css'),
            );
            foreach($all_css_js_file as $handle => $fileinfo){
                wp_enqueue_style( $handle, $fileinfo['sscdn_path_define'], null, '1.0', 'all');
            }
        }
	}

	public function sscdn_all_assets_for_the_public(){
        wp_enqueue_style( 'sscdn-progress', plugin_dir_url( __FILE__ ) . 'assets/public/js.js', ['jquery'], '1.0', true );
        $all_css_js_file = array(
            'sscdn-style' => array('sscdn_path_define'=>SSCDN_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/style.css'),
            'sscdn-presets' => array('sscdn_path_define'=>SSCDN_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/presets.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['sscdn_path_define'], null, '1.0', 'all');
        }
	}

	public function sscdn_admin_menu_test(){
		if(current_user_can('manage_options')){
			add_submenu_page(
				'woocommerce',
				'Sale Sync Countdown',
				'Sale Sync Countdown',
				'manage_options',
				'get-sale-sync-countdown',
				array($this, 'sscdn_plugin_submenu_about_plugin_page'),
                15
			);
		}
    add_action('admin_init', array($this, 'sscdn_admin_controls'));
	}
    public function sscdn_admin_controls() {
        include 'dashboard/controls.php';
    }

	public function sscdn_plugin_submenu_about_plugin_page() {
        include 'dashboard/dashboard-style.php';
    }
    
    public function sscdn_plugin_function_for_datas_callback() {}

    public function sscdn_plugin_settings_to_whitelist( $options ) {
      $options['sscdn-plugin-settings'] = array(
        'sscdn-notice-position',
        'sscdn-notice-timelabel',
        'sscdn-shipping-icon',
        'sscdn-shipimgsize-check',
        'sscdn-only-countdown-show',
        'sscdn-checkout-page-check',
        'sscdn-thankyou-page-check',
        // *** reason
        'sscdn-reason-box-shadow',
        'sscdn-reason-border-radius',
        'sscdn-reason-box-shadow5',
        'sscdn-reason-border-radius5',
        'sscdn-estimass-bgcolor5',
        'sscdn-reason-fontsize',
        'sscdn-reason-fontweight',
        'sscdn-reason-fontfamilly',
        // *** estimdate
        'sscdn-estimdate-color',
        'sscdn-estimdate-bgcolor',
        'sscdn-estimdate-fontsize',
        'sscdn-estimdate-fontweight',
        'sscdn-estimdate-padding',
        'sscdn-estimdate-margin',
        'sscdn-estimdate-fontfamilly',
        // *** estimdateL
        'sscdn-estimdate-colorL',
        'sscdn-estimdate-fontsizeL',
        'sscdn-estimdate-fontweightL',
        'sscdn-estimdate-paddingL',
        'sscdn-estimdate-marginL',
        'sscdn-estimdate-fontfamillyL',
        // *** estimass
        'sscdn-estimass-color',
        'sscdn-estimass-fontsize',
        'sscdn-estimass-fontweight',
        'sscdn-estimass-padding',
        'sscdn-estimass-margin',
        'sscdn-estimass-fontfamilly',
        // *** style for countdown
        'sscdn-estimass-color_countdown',
        'sscdn-estimass-fontsize_countdown',
        'sscdn-estimass-fontweight_countdown',
        'sscdn-estimass-padding_countdown',
        'sscdn-estimass-margin_countdown',
        'sscdn-estimass-fontfamilly_countdown',
      );
      return $options;
    }

    public function sscdn_taxoes_styles(){
        // *** reason
        $sscdn_reason_bgcolor5_value = get_option( 'sscdn-estimass-bgcolor5');
        $sscdn_reason_box_shadow_value = get_option( 'sscdn-reason-box-shadow', '0 0 10px rgb(104 104 104 / 50%)');
        $sscdn_reason_box_shadow5_value = get_option( 'sscdn-reason-box-shadow5');
        $sscdn_reason_border_radius_value = get_option( 'sscdn-reason-border-radius', '10px');
        $sscdn_reason_border_radius5_value = get_option( 'sscdn-reason-border-radius5');
        $sscdn_reason_fontsize_value = get_option( 'sscdn-reason-fontsize', '20px');
        $sscdn_reason_fontweight_value = get_option( 'sscdn-reason-fontweight');
        $sscdn_reason_bgcolor_value = get_option( 'sscdn-estimass-bgcolor');
        $sscdn_reason_fontfamilly_value = get_option( 'sscdn-reason-fontfamilly', 'roboto' );
        // *** estimdate
        $sscdn_estimdate_color_value = get_option( 'sscdn-estimdate-color', 'aliceblue' );
        $sscdn_estimdate_bgcolor_value = get_option( 'sscdn-estimdate-bgcolor' );
        $sscdn_estimdate_fontsize_value = get_option( 'sscdn-estimdate-fontsize', '20px');
        $sscdn_estimdate_fontweight_value = get_option( 'sscdn-estimdate-fontweight');
        $sscdn_estimdate_padding_value = get_option( 'sscdn-estimdate-padding');
        $sscdn_estimdate_margin_value = get_option( 'sscdn-estimdate-margin');
        $sscdn_estimdate_fontfamilly_value = get_option( 'sscdn-estimdate-fontfamilly', 'circular' );
        // *** style for countdown estimdateL
        $sscdn_estimdate_colorL_value = get_option( 'sscdn-estimdate-colorL', 'aliceblue' );
        $sscdn_estimdate_fontsizeL_value = get_option( 'sscdn-estimdate-fontsizeL', '20px');
        $sscdn_estimdate_fontweightL_value = get_option( 'sscdn-estimdate-fontweightL');
        $sscdn_estimdate_paddingL_value = get_option( 'sscdn-estimdate-paddingL');
        $sscdn_estimdate_marginL_value = get_option( 'sscdn-estimdate-marginL');
        $sscdn_estimdate_fontfamillyL_value = get_option( 'sscdn-estimdate-fontfamillyL', 'circular' );
        // *** style for countdown
        $sscdn_estimass_color_countdown_value = get_option( 'sscdn-estimass-color_countdown');
        $sscdn_estimass_fontsize_countdown_value = get_option( 'sscdn-estimass-fontsize_countdown');
        $sscdn_estimass_fontweight_countdown_value = get_option( 'sscdn-estimass-fontweight_countdown');
        $sscdn_estimass_padding_countdown_value = get_option( 'sscdn-estimass-padding_countdown');
        $sscdn_estimass_margin_countdown_value = get_option( 'sscdn-estimass-margin_countdown');
        $sscdn_estimass_fontfamilly_countdown_value = get_option( 'sscdn-estimass-fontfamilly_countdown');
        // *** estimass
        $sscdn_estimass_color_value = get_option( 'sscdn-estimass-color', 'aliceblue' );
        $sscdn_estimass_fontsize_value = get_option( 'sscdn-estimass-fontsize', '16px');
        $sscdn_estimass_fontweight_value = get_option( 'sscdn-estimass-fontweight', '600');
        $sscdn_estimass_padding_value = get_option( 'sscdn-estimass-padding');
        $sscdn_estimass_margin_value = get_option( 'sscdn-estimass-margin');
        $sscdn_estimass_fontfamilly_value = get_option( 'sscdn-estimass-fontfamilly', 'cursive' );
        $sscdn_shipimgsize_value = get_option( 'sscdn-shipimgsize-check', '60px');
        $sscdn_shipimgsize_value1 = get_option( 'sscdn-shipimgsize-check1', '60px');
        $html = "<style>
        .sscdn-count-down-num, .sscdn-count-down-num:before, .sscdn-count-down-num:after{
            background-color:{$sscdn_reason_bgcolor5_value} !important;
            box-shadow:{$sscdn_reason_box_shadow5_value} !important;
            border-radius:{$sscdn_reason_border_radius5_value} !important;
        }
        .sscdn_cntdn_wrap, .sscdn_cntdn_wrap-shop{
            background-color:{$sscdn_reason_bgcolor_value}  !important;
            font-size:{$sscdn_reason_fontsize_value}  !important;
            font-weight:{$sscdn_reason_fontweight_value}  !important;
            font-family:{$sscdn_reason_fontfamilly_value}  !important;
            box-shadow:{$sscdn_reason_fontsize_value}  !important;
            border-radius:{$sscdn_reason_border_radius_value}  !important;
        }
        .sscdn_sold_stock{
            color:{$sscdn_estimdate_color_value} !important;
            background-color:{$sscdn_estimdate_bgcolor_value} !important;
            font-size:{$sscdn_estimdate_fontsize_value} !important;
            font-weight:{$sscdn_estimdate_fontweight_value} !important;
            font-family:{$sscdn_estimdate_fontfamilly_value} !important;
            padding:{$sscdn_estimdate_padding_value} !important;
            margin:{$sscdn_estimdate_margin_value} !important;
        }
        .sscdn-count-down-title{
            color:{$sscdn_estimdate_colorL_value} !important;
            font-size:{$sscdn_estimdate_fontsizeL_value} !important;
            font-weight:{$sscdn_estimdate_fontweightL_value} !important;
            font-family:{$sscdn_estimdate_fontfamillyL_value} !important;
            padding:{$sscdn_estimdate_paddingL_value} !important;
            margin:{$sscdn_estimdate_marginL_value} !important;
        }
        .sscdn-count-down-num{
            color:{$sscdn_estimass_color_countdown_value} !important;
            font-size:{$sscdn_estimass_fontsize_countdown_value} !important;
            font-weight:{$sscdn_estimass_fontweight_countdown_value} !important;
            font-family:{$sscdn_estimass_fontfamilly_countdown_value} !important;
            padding:{$sscdn_estimass_padding_countdown_value} !important;
            margin:{$sscdn_estimass_margin_countdown_value} !important;
        }
        .sscdn_notice, .sscdn_notice-shop{
            color:{$sscdn_estimass_color_value}  !important;
            font-size:{$sscdn_estimass_fontsize_value}  !important;
            font-weight:{$sscdn_estimass_fontweight_value}  !important;
            font-family:{$sscdn_estimass_fontfamilly_value}  !important;
            padding:{$sscdn_estimass_padding_value}  !important;
            margin:{$sscdn_estimass_margin_value}  !important;
        }
        .sscdn-time-img-shop img, .sscdn-time-img-shop, .sscdn-time-img, .sscdn-time-img img{
            width:{$sscdn_shipimgsize_value}  !important;
            height:{$sscdn_shipimgsize_value1}  !important;
        }
        ";
        $html .= '</style>';
        echo $html;
    }

    public function sscdn_settings_plugin_action_link($links, $file) {
        if (plugin_basename(__FILE__) == $file) {
            $sscdn_settings_link = '<a href="' . admin_url('admin.php?page=get-sale-sync-countdown') . '" target="_blank">' . esc_html__('Settings', 'text-domain') . '</a>';
            array_push($links, $sscdn_settings_link);
        }
        return $links;
    }

    public function add_custom_field_to_general_tab(){
        global $woocommerce, $post;
    
        echo '<div class="options_group">';
        
        // Checkbox Input
        woocommerce_wp_checkbox(
            array(
                'id'            => '_sscdn_custom_checkbox',
                'label'         => __('Discount time', 'sale-sync-countdown'),
                'description'   => __('Discount for the product.', 'sale-sync-countdown'),
                'desc_tip'      => true,
            )
        );
    
        // Date Input
        woocommerce_wp_text_input(
            array(
                'id'            => '_sscdn_custom_discount_date',
                'label'         => __('Select Date', 'sale-sync-countdown'),
                'placeholder'   => __('Select a date when end the discount', 'sale-sync-countdown'),
                'desc_tip'      => true,
                'type'          => 'text',
                'custom_attributes' => array(
                    'step' => '1',  // Allow only whole numbers
                ),
            )
        );
    
        // Time Input
        woocommerce_wp_text_input(
            array(
                'id'            => '_sscdn_custom_discount_time',
                'label'         => __('Select Time', 'sale-sync-countdown'),
                'placeholder'   => __('1:00 PM', 'sale-sync-countdown'),
                'description'   => __('hh:mm TT', 'sale-sync-countdown'),
                'desc_tip'      => true,
                'type'          => 'text',
                'class'         => 'timepicker', // Add a custom class for timepicker
                'custom_attributes' => array(
                    'step' => '1',  // Allow only whole numbers
                ),
            )
        );
    
        // Discount notice Input
        woocommerce_wp_text_input(
            array(
                'id'            => '_sscdn_custom_notice',
                'label'         => __('Discount notice', 'sale-sync-countdown'),
                'placeholder'   => __('The offer will end within', 'sale-sync-countdown'),
                'desc_tip'      => true,
                'type'          => 'text',
                'custom_attributes' => array(
                    'step' => '1',  // Allow only whole numbers
                ),
            )
        );
    
        echo '</div>';
        ?>
        <script>
        </script>
        <?php
    }

    public function sscdn_save_general_product_datas($product_id) {
        $checkbox_value = isset($_POST['_sscdn_custom_checkbox']) ? 'yes' : 'no';
        update_post_meta($product_id, '_sscdn_custom_checkbox', $checkbox_value);
      
        $number_value = isset($_POST['_sscdn_custom_discount_date']) ? sanitize_text_field($_POST['_sscdn_custom_discount_date']) : '';
        update_post_meta($product_id, '_sscdn_custom_discount_date', $number_value);
      
        $discount_time = isset($_POST['_sscdn_custom_discount_time']) ? sanitize_text_field($_POST['_sscdn_custom_discount_time']) : '';
        update_post_meta($product_id, '_sscdn_custom_discount_time', $discount_time);
      
        $notice_value = isset($_POST['_sscdn_custom_notice']) ? sanitize_text_field($_POST['_sscdn_custom_notice']) : '';
        update_post_meta($product_id, '_sscdn_custom_notice', $notice_value);
    }

    public function sscdn_pro_single_page(){
        if(get_option('sscdn-thankyou-page-check','on') == true){ 
            $sscdn_each_id = get_the_id();
            $_custom_checkbox1 = get_post_meta($sscdn_each_id, '_sscdn_custom_checkbox', true);
            $sscdn_Dates1 = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_date', true);
            $sscdn_discount_time1 = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_time', true);
            if ($_custom_checkbox1 == 'yes') {
                if(get_option( 'sscdn-only-countdown-show', 'show' )=='show'){
                    if(get_option( 'sscdn-countdown-position', 'top' )=='top'){
                        if($sscdn_Dates1 || $sscdn_discount_time1==true){
                            $product = wc_get_product($sscdn_each_id);
                        echo '<div class="sscdn_cntdn_wrap">';
                            echo '<div class="sscdn_cntdn_cnt">';
                                echo '<div class="sscdn-time-img">';
                                    echo '<img src="'.get_option( 'sscdn-shipping-icon', plugin_dir_url( __FILE__ ) . 'assets/public/timer-stopwatch.gif').'" alt="" srcset="">';
                                echo '</div>';
                                echo '<div class="sscdn-content">';
                                    $sscdn_separator = $product->get_stock_quantity()==true?'/':'';
                                    if (get_option('sscdn-notice-position', 'top') == 'top') {
                                        if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                            echo '<div id="sscdn-progress-container">';
                                                $progressValue = $product->get_stock_quantity();
                                                $outOfValue = $progressValue+$product->get_total_sales();
                                                $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                                echo '</div>';
                                                echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }else{
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }
                                        echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                    } elseif (get_option('sscdn-notice-position', 'bottom') == 'bottom') {
                                        echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                        if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                            echo '<div id="sscdn-progress-container">';
                                                $progressValue = $product->get_stock_quantity();
                                                $outOfValue = $progressValue+$product->get_total_sales();
                                                $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                            echo '</div>';
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }else{
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        ?>
                        <script>
                        
                        </script>
                        <?php
                        }
                    }
                }
            ?>
            <div class="sscdn-count-down-<?php echo get_option( 'sscdn-estimass-presets', '1' ); ?> sscdn-count-down-common">
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-day sscdn-shape-common" id="countdown_days_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('1', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Days','sale-sync-countdown'):esc_html__('D','sale-sync-countdown'); ?></div>
                </div>
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-hour sscdn-shape-common" id="countdown_hours_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('2', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Hours','sale-sync-countdown'):esc_html__('H','sale-sync-countdown'); ?></div>
                </div>
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-min sscdn-shape-common" id="countdown_minutes_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('4', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Minutes','sale-sync-countdown'):esc_html__('M','sale-sync-countdown'); ?></div>
                </div>
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-sec sscdn-shape-common" id="countdown_seconds_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('45', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Seconds','sale-sync-countdown'):esc_html__('S','sale-sync-countdown'); ?></div>
                </div>
            </div>
            <script>
                function startCountdown(sscdn_each_id, sscdn_Dates, sscdn_discount_time) {
                    var countDownDate = new Date(sscdn_Dates + ' ' + sscdn_discount_time).getTime();
                    function updateCountdown() {
                        var now = new Date().getTime();
                        var distance = countDownDate - now;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById("countdown_days_" + sscdn_each_id).textContent = days;
                        document.getElementById("countdown_hours_" + sscdn_each_id).textContent = hours;
                        document.getElementById("countdown_minutes_" + sscdn_each_id).textContent = minutes;
                        document.getElementById("countdown_seconds_" + sscdn_each_id).textContent = seconds;
                    }
                    setInterval(updateCountdown, 1000);
                }
                var sscdn_each_id = <?php echo json_encode($sscdn_each_id); ?>;
                var sscdn_4Dates = <?php echo json_encode($sscdn_Dates1); ?>;
                var sscdn_4discount_time = <?php echo json_encode($sscdn_discount_time1); ?>;
                var sscdn_short_type = <?php echo json_encode(get_option('sscdn-notice-timelabel', 'full')); ?>;
                startCountdown(sscdn_each_id, sscdn_4Dates, sscdn_4discount_time);
            </script>
            <?php
            if(get_option( 'sscdn-only-countdown-show', 'show' )=='show'){
                if(get_option( 'sscdn-countdown-position', 'top' )=='bottom'){
                    if($sscdn_Dates1 || $sscdn_discount_time1==true){
                        $product = wc_get_product($sscdn_each_id);
                    echo '<div class="sscdn_cntdn_wrap">';
                        echo '<div class="sscdn_cntdn_cnt">';
                            echo '<div class="sscdn-time-img">';
                                echo '<img src="'.get_option( 'sscdn-shipping-icon', plugin_dir_url( __FILE__ ) . 'assets/public/timer-stopwatch.gif').'" alt="" srcset="">';
                            echo '</div>';
                            echo '<div class="sscdn-content">';
                                $sscdn_separator = $product->get_stock_quantity()==true?'/':'';
                                if (get_option('sscdn-notice-position', 'top') == 'top') {
                                    if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                        echo '<div id="sscdn-progress-container">';
                                            $progressValue = $product->get_stock_quantity();
                                            $outOfValue = $progressValue+$product->get_total_sales();
                                            $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                            echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                        echo '</div>';
                                        echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                    }else{
                                        echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                    }
                                    echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                } elseif (get_option('sscdn-notice-position', 'bottom') == 'bottom') {
                                    echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                    if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                        echo '<div id="sscdn-progress-container">';
                                            $progressValue = $product->get_stock_quantity();
                                            $outOfValue = $progressValue+$product->get_total_sales();
                                            $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                            echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                        echo '</div>';
                                        echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                    }else{
                                        echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                    }
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                    }
                }
            }
            }
        }
    }

    public function sscdn_pro_shop_page() {
        if (get_option('sscdn-checkout-page-check', 'on') == true) {
            $product_id = get_the_id();
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
            );
            $products = get_posts($args);
            if (!empty($products)) {
                foreach ($products as $product) {
                    $sscdn_each_id = $product->ID;
                    $_custom_checkbox = get_post_meta($sscdn_each_id, '_sscdn_custom_checkbox', true);
                    $sscdn_Dates = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_date', true);
                    $sscdn_discount_time = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_time', true);
                    if ($_custom_checkbox == true) {
                        if ($sscdn_Dates || $sscdn_discount_time == true) {
                            if ($product_id == $sscdn_each_id) {
                                $product = wc_get_product($sscdn_each_id);
                                if(get_option( 'sscdn-only-countdown-show', 'show' )=='show'){
                                if(get_option( 'sscdn-countdown-position', 'top' )=='top'){
                                echo '<div class="sscdn_cntdn_wrap-shop">';
                                    echo '<div class="sscdn_cntdn_cnt">';
                                        echo '<div class="sscdn-time-img-shop">';
                                            echo '<img src="' . get_option('sscdn-shipping-icon', plugin_dir_url(__FILE__) . 'assets/public/timer-stopwatch.gif') . '" alt="" srcset="">';
                                        echo '</div>';
                                        echo '<div class="sscdn-content">';
                                            $sscdn_separator = $product->get_stock_quantity()==true?'/':'';
                                            if (get_option('sscdn-notice-position', 'top') == 'top') {
                                                if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                                    echo '<div id="sscdn-progress-container">';
                                                        $progressValue = $product->get_stock_quantity();
                                                        $outOfValue = $progressValue+$product->get_total_sales();
                                                        $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                        echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                                    echo '</div>';
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }else{
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }
                                                echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                            } elseif (get_option('sscdn-notice-position', 'bottom') == 'bottom') {
                                                echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                                if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                                    echo '<div id="sscdn-progress-container">';
                                                        $progressValue = $product->get_stock_quantity();
                                                        $outOfValue = $progressValue+$product->get_total_sales();
                                                        $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                        echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                                    echo '</div>';
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }else{
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                }
                                }
                                ?>
                                <div class="sscdn-count-down-<?php echo get_option( 'sscdn-estimass-presets', '1' ); ?> sscdn-count-down-common">
                                    <div class="sscdn-count-down-item">
                                        <div class="sscdn-count-down-num sscdn-day sscdn-shape-common" id="countdown_days_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('1', 'sale-sync-countdown'); ?></div>
                                        <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Days','sale-sync-countdown'):esc_html__('D','sale-sync-countdown'); ?></div>
                                    </div>
                                    <div class="sscdn-count-down-item">
                                        <div class="sscdn-count-down-num sscdn-hour sscdn-shape-common" id="countdown_hours_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('2', 'sale-sync-countdown'); ?></div>
                                        <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Hours','sale-sync-countdown'):esc_html__('H','sale-sync-countdown'); ?></div>
                                    </div>
                                    <div class="sscdn-count-down-item">
                                        <div class="sscdn-count-down-num sscdn-min sscdn-shape-common" id="countdown_minutes_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('4', 'sale-sync-countdown'); ?></div>
                                        <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Minutes','sale-sync-countdown'):esc_html__('M','sale-sync-countdown'); ?></div>
                                    </div>
                                    <div class="sscdn-count-down-item">
                                        <div class="sscdn-count-down-num sscdn-sec sscdn-shape-common" id="countdown_seconds_<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('45', 'sale-sync-countdown'); ?></div>
                                        <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Seconds','sale-sync-countdown'):esc_html__('S','sale-sync-countdown'); ?></div>
                                    </div>
                                </div>
                                <script>
                                    function startCountdown(sscdn_each_id, sscdn_Dates, sscdn_discount_time) {
                                        var countDownDate = new Date(sscdn_Dates + ' ' + sscdn_discount_time).getTime();
                                        function updateCountdown() {
                                            var now = new Date().getTime();
                                            var distance = countDownDate - now;
                                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                            document.getElementById("countdown_days_" + sscdn_each_id).textContent = days;
                                            document.getElementById("countdown_hours_" + sscdn_each_id).textContent = hours;
                                            document.getElementById("countdown_minutes_" + sscdn_each_id).textContent = minutes;
                                            document.getElementById("countdown_seconds_" + sscdn_each_id).textContent = seconds;
                                        }
                                        setInterval(updateCountdown, 1000);
                                    }
                                    var sscdn_each_id = <?php echo json_encode($sscdn_each_id); ?>;
                                    var sscdn_4Dates = <?php echo json_encode($sscdn_Dates); ?>;
                                    var sscdn_4discount_time = <?php echo json_encode($sscdn_discount_time); ?>;
                                    var sscdn_short_type = <?php echo json_encode(get_option('sscdn-notice-timelabel', 'full')); ?>;
                                    startCountdown(sscdn_each_id, sscdn_4Dates, sscdn_4discount_time);
                                </script>
                                <?php
                                if(get_option( 'sscdn-only-countdown-show', 'show' )=='show'){
                                if(get_option( 'sscdn-countdown-position', 'top' )=='bottom'){
                                echo '<div class="sscdn_cntdn_wrap-shop">';
                                    echo '<div class="sscdn_cntdn_cnt">';
                                        echo '<div class="sscdn-time-img-shop">';
                                            echo '<img src="' . get_option('sscdn-shipping-icon', plugin_dir_url(__FILE__) . 'assets/public/timer-stopwatch.gif') . '" alt="" srcset="">';
                                        echo '</div>';
                                        echo '<div class="sscdn-content">';
                                            $sscdn_separator = $product->get_stock_quantity()==true?'/':'';
                                            if (get_option('sscdn-notice-position', 'top') == 'top') {
                                                if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                                    echo '<div id="sscdn-progress-container">';
                                                        $progressValue = $product->get_stock_quantity();
                                                        $outOfValue = $progressValue+$product->get_total_sales();
                                                        $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                        echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                                    echo '</div>';
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }else{
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }
                                                echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                            } elseif (get_option('sscdn-notice-position', 'bottom') == 'bottom') {
                                                echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                                if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                                    echo '<div id="sscdn-progress-container">';
                                                        $progressValue = $product->get_stock_quantity();
                                                        $outOfValue = $progressValue+$product->get_total_sales();
                                                        $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                        echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                                    echo '</div>';
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }else{
                                                    echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                                }
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    // This for the all products page VVVVV
    public function add_custom_content_to_product_name_column($columns) {
        $columns['name'] = __('Product Name', 'sale-sync-countdown');
        return $columns;
    }

    public function display_custom_content_in_product_name_column($column, $post_id) {
        if ($column === 'name') {
            $product_id = get_the_id();
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
            );
            $products = get_posts($args);
            if (!empty($products)) {
                foreach ($products as $product) {
                    $sscdn_each_id = $product->ID;
                    $_custom_checkbox = get_post_meta($sscdn_each_id, '_sscdn_custom_checkbox', true);
                    $sscdn_Dates = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_date', true);
                    $sscdn_discount_time = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_time', true);
                    if($_custom_checkbox ==true){
                        if($sscdn_Dates || $sscdn_discount_time==true){
                            if($product_id == $sscdn_each_id){
                                echo '<div class="sscdn-content">';
                                    echo '<div>'.get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within').'</div>';
                                    echo '<div id="countdown_timer"></div>';
                                echo '</div>';
                                ?>
                                <script>
                                    var sscdn_4Dates = <?php echo json_encode($sscdn_Dates); ?>;
                                    var sscdn_4discount_time = <?php echo json_encode($sscdn_discount_time); ?>;
                                </script>
                            <?php
                            }
                        }
                    }
                }
            }
        }
    }

    public function custom_html_shortcode() {
        ob_start(); // Start output buffering
        $sscdn_each_id = get_the_id();
        $sscdn_Dates0d = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_date', true);
        $sscdn_discount_time0d = get_post_meta($sscdn_each_id, '_sscdn_custom_discount_time', true);
        if ($_custom_checkbox == true) {
            if(get_option( 'sscdn-only-countdown-show', 'show' )=='show'){
                if(get_option( 'sscdn-countdown-position', 'top' )=='top'){
                    if($sscdn_Dates0d || $sscdn_discount_time1==true){
                        $product = wc_get_product($sscdn_each_id);
                        echo '<div class="sscdn_cntdn_wrap">';
                            echo '<div class="sscdn_cntdn_cnt">';
                                echo '<div class="sscdn-time-img">';
                                    echo '<img src="'.get_option( 'sscdn-shipping-icon', plugin_dir_url( __FILE__ ) . 'assets/public/timer-stopwatch.gif').'" alt="" srcset="">';
                                echo '</div>';
                                echo '<div class="sscdn-content">';
                                    $sscdn_separator = $product->get_stock_quantity()==true?'/':'';
                                    if (get_option('sscdn-notice-position', 'top') == 'top') {
                                        if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                            echo '<div id="sscdn-progress-container">';
                                                $progressValue = $product->get_stock_quantity();
                                                $outOfValue = $progressValue+$product->get_total_sales();
                                                $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                            echo '</div>';
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }else{
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }
                                        echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                    } elseif (get_option('sscdn-notice-position', 'bottom') == 'bottom') {
                                        echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                        if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                            echo '<div id="sscdn-progress-container">';
                                                $progressValue = $product->get_stock_quantity();
                                                $outOfValue = $progressValue+$product->get_total_sales();
                                                $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                            echo '</div>';
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }else{
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            }
            ?>
            <div class="sscdn-count-down-<?php echo get_option( 'sscdn-estimass-presets', '1' ); ?> sscdn-count-down-common">
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-day sscdn-shape-common" id="countdown_days_W<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('1', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Days','sale-sync-countdown'):esc_html__('D','sale-sync-countdown'); ?></div>
                </div>
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-hour sscdn-shape-common" id="countdown_hours_W<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('2', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Hours','sale-sync-countdown'):esc_html__('H','sale-sync-countdown'); ?></div>
                </div>
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-min sscdn-shape-common" id="countdown_minutes_W<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('4', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Minutes','sale-sync-countdown'):esc_html__('M','sale-sync-countdown'); ?></div>
                </div>
                <div class="sscdn-count-down-item">
                    <div class="sscdn-count-down-num sscdn-sec sscdn-shape-common" id="countdown_seconds_W<?php echo $sscdn_each_id; ?>"><?php echo esc_html__('45', 'sale-sync-countdown'); ?></div>
                    <div class="sscdn-count-down-title"><?php echo get_option('sscdn-notice-timelabel', 'full')=='full'?esc_html__('Seconds','sale-sync-countdown'):esc_html__('S','sale-sync-countdown'); ?></div>
                </div>
            </div>
            <script>
                function startCountdown0d(sscdn_each_id0d, sscdn_Dates, sscdn_discount_time) {
                    var countDownDate0d = new Date(sscdn_Dates + ' ' + sscdn_discount_time).getTime();
                    function updateCountdown0d() {
                        var now = new Date().getTime();
                        var distance = countDownDate0d - now;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById("countdown_days_W" + sscdn_each_id0d).textContent = days;
                        document.getElementById("countdown_hours_W" + sscdn_each_id0d).textContent = hours;
                        document.getElementById("countdown_minutes_W" + sscdn_each_id0d).textContent = minutes;
                        document.getElementById("countdown_seconds_W" + sscdn_each_id0d).textContent = seconds;
                    }
                    setInterval(updateCountdown0d, 1000);
                }
                var sscdn_each_id0d = <?php echo json_encode($sscdn_each_id); ?>;
                var sscdn_4Dates = <?php echo json_encode($sscdn_Dates0d); ?>;
                var sscdn_4discount_time = <?php echo json_encode($sscdn_discount_time0d); ?>;
                var sscdn_short_type = <?php echo json_encode(get_option('sscdn-notice-timelabel', 'full')); ?>;
                startCountdown0d(sscdn_each_id0d, sscdn_4Dates, sscdn_4discount_time);
            </script>
            <?php
            if(get_option( 'sscdn-only-countdown-show', 'show' )=='show'){
                if(get_option( 'sscdn-countdown-position', 'top' )=='bottom'){
                    if($sscdn_Dates0d || $sscdn_discount_time1==true){
                        $product = wc_get_product($sscdn_each_id);
                        echo '<div class="sscdn_cntdn_wrap">';
                            echo '<div class="sscdn_cntdn_cnt">';
                                echo '<div class="sscdn-time-img">';
                                    echo '<img src="'.get_option( 'sscdn-shipping-icon', plugin_dir_url( __FILE__ ) . 'assets/public/timer-stopwatch.gif').'" alt="" srcset="">';
                                echo '</div>';
                                echo '<div class="sscdn-content">';
                                    $sscdn_separator = $product->get_stock_quantity()==true?'/':'';
                                    if (get_option('sscdn-notice-position', 'top') == 'top') {
                                        if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                            echo '<div id="sscdn-progress-container">';
                                                $progressValue = $product->get_stock_quantity();
                                                $outOfValue = $progressValue+$product->get_total_sales();
                                                $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                            echo '</div>';
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }else{
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }
                                        echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                    } elseif (get_option('sscdn-notice-position', 'bottom') == 'bottom') {
                                        echo '<h2 class="sscdn_notice-shop">' . get_post_meta($sscdn_each_id, '_sscdn_custom_notice', 'The offer will end within') . '</h2>';
                                        if(get_option( 'sscdn-only-countdown-sss', 'progress' )=='progress'){
                                            echo '<div id="sscdn-progress-container">';
                                                $progressValue = $product->get_stock_quantity();
                                                $outOfValue = $progressValue+$product->get_total_sales();
                                                $initialProgress = round(($progressValue / $outOfValue) * 100); $progressSale_totaL = 100-$initialProgress;
                                                echo '<div id="sscdn-progress-bar" progress="' . $product->get_total_sales() . '" outof="' . $outOfValue . '" style="width: ' . $progressSale_totaL . '%;"></div>';
                                            echo '</div>';
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }else{
                                            echo '<div class="sscdn_sold_stock"><span class="sscdn-sold-item">' . $product->get_total_sales() . '</span>' . $sscdn_separator . $product->get_stock_quantity() . esc_html__(' Items sold', 'sale-sync-countdown') . '</div>';
                                        }
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            }
        }
        return ob_get_clean(); // End buffering and return the content
    }
    
	public function __construct() {
        // Show date
        add_action('woocommerce_shop_loop_item_title', [$this, 'sscdn_pro_shop_page']); // For shop page
        add_action('woocommerce_before_add_to_cart_button', [$this, 'sscdn_pro_single_page']); // For product single page
        // For product edit page
        add_action('woocommerce_product_options_general_product_data', [$this,'add_custom_field_to_general_tab']);
        add_action('woocommerce_process_product_meta', [$this,'sscdn_save_general_product_datas']);
        // It's for the admin all products page
        add_filter('manage_product_posts_columns', [$this,'add_custom_content_to_product_name_column']);
        add_action('manage_product_posts_custom_column', [$this,'display_custom_content_in_product_name_column'], 10, 2);
        add_shortcode('bwd_sale_countdown', [$this,'custom_html_shortcode']);
        // Plugins
		add_filter( 'plugin_action_links', [$this,'sscdn_settings_plugin_action_link'], 10, 2 );
		add_filter( 'whitelist_options', [$this,'sscdn_plugin_settings_to_whitelist'] );
        add_action('admin_enqueue_scripts', [$this, 'sscdn_all_assets_for_the_admin']);
        add_action('wp_enqueue_scripts', [$this, 'sscdn_all_assets_for_the_public']);
		add_action('admin_menu', [$this,'sscdn_admin_menu_test']);
        add_action('wp_head', [$this, 'sscdn_taxoes_styles'],99);
	}
}
ClassProdSSCDN::instance();
