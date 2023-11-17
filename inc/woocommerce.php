<?php

add_filter(
	'woocommerce_pagination_args',
	function ( $args ) {
		return array_merge(
			$args,
			array(
				'prev_text' => <<<'SVG'
		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M5.35367 0.646447C5.54893 0.841709 5.54893 1.15829 5.35367 1.35355L1.82507 4.88215C1.77836 4.92885 1.74052 4.96673 1.70831 5C1.74052 5.03327 1.77836 5.07115 1.82507 5.11785L5.35367 8.64645C5.54893 8.84171 5.54893 9.15829 5.35367 9.35355C5.1584 9.54882 4.84182 9.54882 4.64656 9.35355L1.11796 5.82496C1.11258 5.81957 1.10716 5.81416 1.10172 5.80873C1.00499 5.71207 0.900396 5.60756 0.824006 5.50744C0.734517 5.39015 0.638184 5.22231 0.638184 5C0.638184 4.77769 0.734517 4.60985 0.824006 4.49256C0.900396 4.39244 1.00499 4.28793 1.10172 4.19127C1.10716 4.18584 1.11258 4.18043 1.11796 4.17504L4.64656 0.646447C4.84182 0.451184 5.1584 0.451184 5.35367 0.646447Z" fill="#1A1A1A"/>
		</svg>
		SVG,
				'next_text' => <<<'SVG'
		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.646447 0.646447C0.841709 0.451184 1.15829 0.451184 1.35355 0.646447L4.88215 4.17504C4.88753 4.18043 4.89295 4.18584 4.89839 4.19128C4.99512 4.28793 5.09972 4.39244 5.17611 4.49256C5.2656 4.60985 5.36193 4.77769 5.36193 5C5.36193 5.22231 5.2656 5.39015 5.17611 5.50744C5.09972 5.60756 4.99512 5.71207 4.89839 5.80872C4.89295 5.81416 4.88753 5.81957 4.88215 5.82496L1.35355 9.35355C1.15829 9.54882 0.841709 9.54882 0.646447 9.35355C0.451184 9.15829 0.451184 8.84171 0.646447 8.64645L4.17504 5.11785C4.22175 5.07115 4.25959 5.03327 4.29181 5C4.25959 4.96673 4.22175 4.92885 4.17504 4.88215L0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646447Z" fill="#1A1A1A"/>
		</svg>
		SVG,
			)
		);
	},
	10,
	1
);

/**
 * Fires authenticated Ajax actions for logged-in users.
 */
add_action(
	'wp_ajax_minicart',
	function (): void {

		ob_start();
		get_template_part( 'template-parts/mini-cart', 'items' );
		$items = ob_get_clean();

		ob_start();
		get_template_part( 'template-parts/mini-cart', 'amount' );
		$amount = ob_get_clean();

		wp_send_json_success(
			array(
				'items'  => $items,
				'amount' => $amount,
				'count'  => WC()->cart->get_cart_contents_count(),
			)
		);
	}
);

add_action( 'woocommerce_after_add_to_cart_button', 'add_buy_now_button' );

/**
 * @global WC_Product $product
 */
function add_buy_now_button() {
	global $product;

	if ( ! is_product() ) {
		return;
	}

	?>
	<button id="buynow" type="button" data-id="<?php echo $product->get_id(); ?>"
		class="w-full md:w-56 h-14 px-6 bg-green-500 rounded-md justify-center items-center gap-2 inline-flex">
		<div class="text-white text-base font-semibold leading-tight">
			<?php echo __( 'Buy now' ); ?>
		</div>
	</button>
	<?php
}

add_action(
	'wp_ajax_buynow',
	function () {
		if ( ! isset( $_POST['id'] ) ) {
			return;
		}

		WC()->cart->add_to_cart( $_POST['id'] );
		wp_send_json_success( WC()->cart->get_checkout_url() );
	}
);

add_action(
	'woocommerce_before_add_to_cart_button',
	function () {
		?>
	<div
		class="w-14 h-14 bg-white bg-opacity-80 rounded-md border border-gray-200 justify-center items-center gap-2.5 inline-flex">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
			<g clip-path="url(#clip0_2010_665)">
				<path
					d="M12.5 23.1648C12.1583 23.1648 11.8289 23.041 11.5722 22.8162C10.6026 21.9684 9.66789 21.1717 8.84318 20.4689L8.83897 20.4653C6.42107 18.4048 4.33312 16.6254 2.88037 14.8725C1.25641 12.9129 0.5 11.0549 0.5 9.02521C0.5 7.05316 1.17621 5.23383 2.40393 3.9021C3.6463 2.55463 5.351 1.8125 7.20458 1.8125C8.58995 1.8125 9.85869 2.25049 10.9754 3.1142C11.539 3.55017 12.0499 4.08374 12.5 4.70612C12.9502 4.08374 13.4609 3.55017 14.0247 3.1142C15.1415 2.25049 16.4102 1.8125 17.7956 1.8125C19.649 1.8125 21.3538 2.55463 22.5962 3.9021C23.8239 5.23383 24.5 7.05316 24.5 9.02521C24.5 11.0549 23.7437 12.9129 22.1198 14.8723C20.667 16.6254 18.5793 18.4046 16.1617 20.4649C15.3355 21.1688 14.3993 21.9667 13.4276 22.8165C13.1711 23.041 12.8415 23.1648 12.5 23.1648ZM7.20458 3.21838C5.74834 3.21838 4.41058 3.79956 3.43737 4.85498C2.4497 5.92633 1.9057 7.40729 1.9057 9.02521C1.9057 10.7323 2.54016 12.259 3.9627 13.9755C5.33764 15.6346 7.38274 17.3774 9.75065 19.3954L9.75505 19.399C10.5829 20.1046 11.5213 20.9044 12.498 21.7584C13.4805 20.9027 14.4204 20.1016 15.2499 19.395C17.6176 17.377 19.6625 15.6346 21.0374 13.9755C22.4598 12.259 23.0943 10.7323 23.0943 9.02521C23.0943 7.40729 22.5503 5.92633 21.5626 4.85498C20.5896 3.79956 19.2516 3.21838 17.7956 3.21838C16.7288 3.21838 15.7494 3.5575 14.8846 4.2262C14.1139 4.82239 13.577 5.57605 13.2622 6.10339C13.1004 6.37457 12.8155 6.53644 12.5 6.53644C12.1845 6.53644 11.8996 6.37457 11.7377 6.10339C11.4231 5.57605 10.8863 4.82239 10.1154 4.2262C9.25059 3.5575 8.27116 3.21838 7.20458 3.21838Z"
					fill="#2A353D" />
			</g>
			<defs>
				<clipPath id="clip0_2010_665">
					<rect width="24" height="24" fill="white" transform="translate(0.5 0.5)" />
				</clipPath>
			</defs>
		</svg>
	</div>
		<?php
	}
);

add_filter(
	'woocommerce_account_menu_items',
	/**
	 * @param array<string,string> $items
	 */
	function ( $items ) {
		unset( $items['dashboard'], $items['downloads'], $items['edit-address'] );

		return $items;
	},
	10,
	1
);

add_filter(
	'woocommerce_save_account_details_required_fields',
	/**
	 * @param array<string,string> $fields
	 */
	function ( $fields ) {
		unset( $fields['account_first_name'], $fields['account_last_name'], $fields['account_email'] );

		$fields['billing_address_1'] = 'Main Address';
		$fields['billing_address_2'] = 'Address';

		return $fields;
	}
);

add_action(
	'woocommerce_save_account_details',
	function ( int $user_id ) {
		update_user_meta( $user_id, 'billing_first_name', $_POST['account_display_name'] );
		update_user_meta( $user_id, 'billing_address_1', $_POST['billing_address_1'] );
		update_user_meta( $user_id, 'billing_address_2', $_POST['billing_address_2'] );
	}
);

add_filter(
	'woocommerce_checkout_fields',
	function ( $fields ) {
		$fields['billing']['billing_first_name']['label'] = __( 'Full name' );

		unset(
			$fields['billing']['billing_last_name'],
			$fields['billing']['billing_company'],
			$fields['billing']['billing_country'],
			$fields['billing']['billing_postcode'],
			$fields['billing']['billing_city'],
			$fields['billing']['billing_state'],
		);

		foreach ( $fields['billing'] as &$field ) {
			$field['placeholder'] = $field['label'];
			unset( $field['label'] );
		}

		return $fields;
	}
);

add_action(
	'woocommerce_review_order_before_submit',
	function () {
		wc_get_template_part( 'checkout/form', 'coupon' );
		?>
<div class="w-full justify-start items-start gap-2 inline-flex">
	<div class="grow shrink basis-0 text-zinc-900 text-base font-semibold leading-tight">
		<?php echo __( 'Place order' ); ?>
	</div>
	<div class="total-amount text-right text-green-500 text-xl font-semibold leading-normal">
		<?php echo WC()->cart->get_total(); ?>
	</div>
</div>
		<?php
	}
);

function register_shipping_order_status() {
	$label = 'Shipping <span class="count">(%s)</span>';
	register_post_status(
		'wc-shipping',
		array(
			'label'                     => 'Shipping',
			'public'                    => true,
			'show_in_admin_status_list' => true,
			'show_in_admin_all_list'    => true,
			'exclude_from_search'       => false,
			'label_count'               => _n_noop( $label, $label ),
		)
	);
}
add_action( 'init', 'register_shipping_order_status' );

function custom_wc_order_statuses( $order_statuses ) {
	$new_order_statuses = array();
	foreach ( $order_statuses as $key => $value ) {
		if ( $key == 'wc-on-hold' ) {
			$new_order_statuses['wc-shipping'] = _x( 'Shipping', 'WooCommerce Order Status' );
			continue;
		}

		$new_order_statuses[ $key ] = $value;
	}

	return $new_order_statuses;
}
add_filter( 'wc_order_statuses', 'custom_wc_order_statuses' );

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
remove_action( 'woocommerce_before_checkout_form_cart_notices', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_cart', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );
