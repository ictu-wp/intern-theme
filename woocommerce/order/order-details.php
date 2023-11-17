<?php
/**
 * Order details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

$order = wc_get_order( $order_id ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

if ( ! $order ) {
	return;
}

$order_items           = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
$show_purchase_note    = $order->has_status( apply_filters( 'woocommerce_purchase_note_order_statuses', array( 'completed', 'processing' ) ) );
$show_customer_details = is_user_logged_in() && $order->get_user_id() === get_current_user_id();
$downloads             = $order->get_downloadable_items();
$show_downloads        = $order->has_downloadable_item() && $order->is_download_permitted();

if ( $show_downloads ) {
	wc_get_template(
		'order/order-downloads.php',
		array(
			'downloads'  => $downloads,
			'show_title' => true,
		)
	);
}

$order_statuses = array_reverse( array_slice( wc_get_order_statuses(), 0, 4 ) );
?>

<section class="w-full p-6 bg-white flex-col justify-start items-start gap-6 inline-flex">
	<div class="self-stretch justify-start items-center gap-1 inline-flex">
		<div class="grow shrink basis-0 h-10 justify-start items-center gap-1 flex">
			<div class="w-fit py-2 px-4 rounded-md border border-gray-200 justify-start items-center gap-1 flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M7.53025 0.851506C7.82315 1.1444 7.82315 1.61927 7.53025 1.91217L2.23736 7.20506C2.1673 7.27512 2.11054 7.33193 2.06222 7.38183C2.11054 7.43174 2.1673 7.48855 2.23736 7.55861L7.53025 12.8515C7.82315 13.1444 7.82315 13.6193 7.53025 13.9122C7.23736 14.2051 6.76249 14.2051 6.46959 13.9122L1.1767 8.61927C1.16862 8.6112 1.1605 8.60308 1.15234 8.59492C1.00724 8.44994 0.85035 8.29317 0.735765 8.14299C0.601531 7.96705 0.457031 7.71531 0.457031 7.38184C0.457031 7.04836 0.601531 6.79662 0.735765 6.62068C0.85035 6.4705 1.00724 6.31373 1.15234 6.16875C1.1605 6.16059 1.16862 6.15248 1.1767 6.1444L6.46959 0.851506C6.76249 0.558613 7.23736 0.558613 7.53025 0.851506Z"
						fill="#767676" />
				</svg>
				<a href="<?php echo wc_get_account_endpoint_url( 'orders' ); ?>"
					class="text-neutral-500 text-base font-normal leading-snug">
					<?php echo __( 'Go back' ); ?>
				</a>
			</div>
		</div>
		<?php woocommerce_order_again_button( $order ); ?>
	</div>
	<div class="self-stretch justify-start items-start gap-8 flex flex-wrap">
		<div class="w-96 grow shrink basis-0 flex-col justify-start items-start gap-4 inline-flex">
			<div class="w-full text-zinc-900 text-xl font-semibold leading-normal">
				<?php echo __( 'Order status' ); ?>
			</div>
			<div class="self-stretch justify-start items-start gap-4 inline-flex">
				<div class="flex-col justify-start items-start inline-flex">
					<?php
					$bg        = 'bg-gray-200';
					$classname = 'w-2.5 h-2.5 rounded-full';
					foreach ( $order_statuses as $key => $value ) :
						if ( true == $current = str_ends_with( $key, $order->get_status() ) ) {
							$bg = 'bg-green-500';
						}
						?>

						<div class="pb-1 w-full justify-center items-start gap-2 inline-flex">
							<div class="justify-center items-center flex flex-col gap-1">
								<div class="<?php echo $classname; ?> <?php echo $bg; ?>"></div>
								<?php if ( 'wc-pending' !== $key ) : ?>
									<div class="m-auto w-px h-6 <?php echo $bg; ?>"></div>
								<?php endif; ?>
							</div>
							<div class="w-full text-zinc-900 text-sm font-semibold leading-none">
								<?php echo $value; ?>
							</div>
							<?php if ( $current ) : ?>
								<div class="w-full text-neutral-500 text-sm font-normal leading-tight whitespace-nowrap">
									<?php echo wc_format_datetime( $order->get_date_modified(), 'H:i d/m/Y' ); ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="hidden md:block w-px h-full bg-gray-200"></div>
		<div class="grow basis-0 flex-col justify-start items-start gap-4 inline-flex">
			<?php
			if ( $show_customer_details ) {
				wc_get_template( 'order/order-details-customer.php', array( 'order' => $order ) );
			}
			?>
		</div>
	</div>
</section>

<section class="w-full p-6 bg-white flex-col justify-start items-end gap-4 inline-flex">
	<?php
	foreach ( $order->get_items() as $item_id => $item ) :
		$product = $item->get_product();
		if ( ! $product ) {
			continue;
		}

		$image = wp_get_attachment_image_url( $product->get_image_id() );
		?>
		<div class="self-stretch justify-start items-start gap-4 inline-flex">
			<?php if ( $image ) : ?>
				<img class="w-20 h-20 rounded-md" src="<?php echo $image; ?>" />
			<?php endif; ?>
			<div class="grow shrink basis-0 flex-col justify-start items-start gap-0.5 inline-flex">
				<div class="self-stretch justify-start items-baseline gap-2 inline-flex">
					<div class="grow shrink basis-0 text-zinc-900 text-base font-normal leading-snug">
						<?php echo $product->get_name(); ?> x
						<?php echo $item->get_quantity(); ?>
					</div>
					<div class="text-right text-zinc-900 text-sm font-semibold leading-none">
						<?php echo wc_price( $product->get_price() ); ?>
					</div>
				</div>
				<?php if ( $product instanceof WC_Product_Variation ) : ?>
					<?php foreach ( $product->get_variation_attributes( false ) as $attribute => $value ) : ?>
						<div class="self-stretch justify-start items-start inline-flex">
							<div class="w-20 text-neutral-500 text-sm font-normal leading-tight">
								<?php echo wc_attribute_label( $attribute ); ?>
							</div>
							<div class="text-zinc-900 text-sm font-normal leading-tight">
								<?php echo $value; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	<?php endforeach; ?>
	<div class="self-stretch flex-col justify-start items-start gap-2 flex">
		<div class="self-stretch justify-start items-center gap-2 inline-flex">
			<div class="grow shrink basis-0 text-zinc-900 text-sm font-normal leading-tight">
				<?php echo __( 'Subtotal' ); ?>
			</div>
			<div class="text-right text-zinc-900 text-sm font-semibold leading-none">
				<?php echo wc_price( $order->get_subtotal() ); ?>
			</div>
		</div>
		<div class="self-stretch justify-start items-center gap-2 inline-flex">
			<div class="grow shrink basis-0 text-zinc-900 text-sm font-normal leading-tight">
				<?php echo __( 'Discount' ); ?>
			</div>
			<div class="text-right text-zinc-900 text-sm font-semibold leading-none">
				<?php echo wc_price( $order->get_discount_total() ); ?>
			</div>
		</div>
		<div class="self-stretch justify-start items-center gap-2 inline-flex">
			<div class="grow shrink basis-0 text-zinc-900 text-sm font-normal leading-tight">
				<?php echo __( 'Shipping' ); ?>
			</div>
			<div class="text-right text-zinc-900 text-sm font-semibold leading-none">
				<?php echo wc_price( $order->get_shipping_total() ); ?>
			</div>
		</div>
	</div>
	<div class="self-stretch justify-start items-start gap-2 inline-flex">
		<div class="grow shrink basis-0 text-zinc-900 text-base font-semibold leading-tight">
			<?php echo __( 'Payment' ); ?>
		</div>
		<div class="flex-col justify-center items-end gap-1 inline-flex">
			<div class="text-right text-green-500 text-xl font-semibold leading-normal">
				<?php echo wc_price( $order->get_total() ); ?>
			</div>
			<div class="text-right text-neutral-500 text-sm font-normal leading-tight">
				<?php echo $order->get_payment_method_title(); ?>
			</div>
		</div>
	</div>
</section>

<?php
/**
 * Action hook fired after the order details.
 *
 * @since 4.4.0
 * @param WC_Order $order Order data.
 */
do_action( 'woocommerce_after_order_details', $order );
