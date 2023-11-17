<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.6.0
 */

defined( 'ABSPATH' ) || exit;
?>

<h2 class="w-full text-zinc-900 text-xl font-semibold leading-normal">
	<?php esc_html_e( 'Billing address', 'woocommerce' ); ?>
</h2>
<div class="w-full flex-col justify-start items-start gap-1 flex">
	<div class="w-full text-zinc-900 text-sm font-semibold leading-none">
		<?php echo esc_html( $order->get_billing_first_name() ); ?>
	</div>
	<div class="w-full text-neutral-500 text-sm font-normal leading-tight">
		<?php echo esc_html( $order->get_billing_phone() ); ?>
	</div>
	<div class="w-full text-neutral-500 text-sm font-normal leading-tight">
		<?php echo esc_html( $order->get_billing_address_2() ); ?>
		<?php echo esc_html( $order->get_billing_address_1() ); ?>
	</div>
</div>

<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
