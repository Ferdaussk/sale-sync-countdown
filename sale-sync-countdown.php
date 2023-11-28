<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bestwpdeveloper.com
 * @since             1.0
 * @package           Sale Sync Countdown
 *
 * @wordpress-plugin
 * Plugin Name:       Sale Sync Countdown
 * Plugin URI:        https://bestwpdeveloper.com/sale-sync-countdown/
 * Description:       Enhance your WooCommerce store with Sale Sync Countdown – A sleek countdown plugin for showcasing product discounts and sales!
 * Version:           1.0
 * Author:            Best WP Developer
 * Author URI:        https://bestwpdeveloper.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sale-sync-countdown
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once ( plugin_dir_path(__FILE__) ) . '/inc/requires-check.php';
final class FinalSSCDNShop{
	const VERSION = '1.0';
	const MINIMUM_PHP_VERSION = '7.0';
	public function __construct() {
		// Load translation
		add_action( 'sscdn_init', array( $this, 'sscdn_loaded_textdomain' ) );
		// sscdn_init Plugin
		add_action( 'plugins_loaded', array( $this, 'sscdn_init' ) );
		// For woocommerce install check
		if ( ! did_action( 'woocommerce/loaded' ) ) {
			add_action( 'admin_notices', 'sscdn_WooCommerce_register_required_plugins' );
			return;
		}
	}

	public function sscdn_loaded_textdomain() {
		load_plugin_textdomain( 'sale-sync-countdown', false, basename(dirname(__FILE__)).'/languages' );
	}

	public function sscdn_init() {
		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'sscdn_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'prod-ready.php' );
	}

	public function sscdn_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'sale-sync-countdown' ),
			'<strong>' . esc_html__( 'Sale Sync Countdown', 'sale-sync-countdown' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'sale-sync-countdown' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'sale-sync-countdown') . '</p></div>', $message );
	}
}

new FinalSSCDNShop();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );