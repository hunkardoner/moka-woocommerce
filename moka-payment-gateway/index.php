<?php
/*
 * Plugin Name: Moka Payment Gateway for WooCommerce
 * Plugin URI: https://github.com/optimisthub/moka-woocommerce
 * Description: Moka Payment gateway for woocommerce
 * Version: 1.0.0
 * Author: Optimist Hub
 * Author URI: https://optimisthub.com?ref=mokaPayment
 * Domain Path: /i18n/languages/
 */

if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) 
{
    require __DIR__ . '/vendor/autoload.php';
}

add_filter( 'woocommerce_payment_gateways', 'addOptimisthubMokaGateway' );
function addOptimisthubMokaGateway( $gateways ) {
	$gateways[] = 'OptimistHub_Moka'; 
	return $gateways;
}

add_action( 'plugins_loaded', 'initOptimisthubGatewayClass' );
function initOptimisthubGatewayClass() 
{
	class OptimistHub_Moka extends WC_Payment_Gateway {
 
 		public function __construct() 
        {
 		}
 
 		public function init_form_fields()
        {
	 	}

		public function payment_fields() 
        {
		}

	 	public function payment_scripts() 
        {
	 	}
         
		public function validate_fields() 
        {
		}
        
		public function process_payment( $order_id ) 
        {
	 	}
         
		public function webhook() 
        {
	 	}
 	}
}