<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>

<div
	class="w-full h-11 my-4 pl-4 pr-1 py-1 bg-white rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
	<input class="grow shrink basis-0 text-stone-300 text-sm font-normal leading-tight" name="coupon_code"
		placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" value="" />
	<button type="submit" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"
		class="w-fit self-stretch px-6 py-2 bg-green-500 rounded justify-start items-center gap-2 flex">
		<div class="text-white text-sm font-semibold leading-none">
			<?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?>
		</div>
	</button>
</div>
