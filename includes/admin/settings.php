<?php
/**
 *  givedev.dev - give-wepay-settings.php
 *
 * @description:
 * @copyright  : http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since      : 1.0.0
 * @created    : 9/11/2015
 */


/**
 * Register the gateway settings
 *
 * @access      public
 * @since       1.0
 * @return      array
 */
function give_register_wepay_settings( $settings ) {

	$wepay_settings = apply_filters( 'give_gateway_wepay_settings', array(
		array(
			'name' => __( 'WePay Settings', 'give-wepay' ),
			'desc' => '<hr>',
			'id'   => 'give_title_wepay',
			'type' => 'give_title'
		),
		array(
			'id'   => 'wepay_client_id',
			'name' => __( 'Client ID', 'give-wepay' ),
			'desc' => __( 'Enter your WePay client ID', 'give-wepay' ),
			'type' => 'text',
		),
		array(
			'id'   => 'wepay_client_secret',
			'name' => __( 'Client Secret', 'give-wepay' ),
			'desc' => __( 'Enter your Client Secret', 'give-wepay' ),
			'type' => 'text',
		),
		array(
			'id'   => 'wepay_access_token',
			'name' => __( 'Access Token', 'give-wepay' ),
			'desc' => __( 'Enter your Access Token', 'give-wepay' ),
			'type' => 'text',
		),
		array(
			'id'   => 'wepay_account_id',
			'name' => __( 'Account ID', 'give-wepay' ),
			'desc' => __( 'Enter your Account ID', 'give-wepay' ),
			'type' => 'text',
		),
		array(
			'id'   => 'wepay_preapprove_only',
			'name' => __( 'Preapprove Payments?', 'give-wepay' ),
			'desc' => __( 'Check this if you would like to preapprove payments but not charge until a later date.', 'give-wepay' ),
			'type' => 'checkbox'
		),
		array(
			'id'      => 'wepay_payment_type',
			'name'    => __( 'Payment Type', 'give-wepay' ),
			'desc'    => __( 'Select the type of payment you would like to process.', 'give-wepay' ),
			'type'    => 'select',
			'default' => 'DONATION',
			'options' => array(
				'GOODS'    => __( 'Goods', 'give-wepay' ),
				'SERVICE'  => __( 'Service', 'give-wepay' ),
				'DONATION' => __( 'Donation', 'give-wepay' ),
				'EVENT'    => __( 'Event', 'give-wepay' ),
				'PERSONAL' => __( 'Personal', 'give-wepay' ),
			),

		),
		array(
			'id'      => 'wepay_fee_payer',
			'name'    => __( 'Fee Payer', 'give-wepay' ),
			'desc'    => __( 'How would you like to collect the WePay gateway fee?', 'give-wepay' ),
			'type'    => 'radio',
			'options' => array(
				'Payee' => __( 'Recipient', 'give-wepay' ),
				'Payer' => __( 'Donor', 'give-wepay' )
			),
			'default' => 'Payee'
		),
		array(
			'id'      => 'wepay_onsite_payments',
			'name'    => __( 'On Site Payments', 'give-wepay' ),
			'desc'    => __( 'Process credit cards on-site or send customers to WePay\'s terminal? Note: On-site payments require SSL.', 'give-wepay' ),
			'type'    => 'radio',
			'options' => array(
				'onsite'  => __( 'On-Site', 'give-wepay' ),
				'offsite' => __( 'Off-Site', 'give-wepay' )
			),
			'default' => 'offsite'
		)
	) );

	return array_merge( $settings, $wepay_settings );
}

add_filter( 'give_settings_gateways', 'give_register_wepay_settings' );
