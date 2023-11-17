<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 * @var object{orders:list<WC_Order>,total:int} $customer_orders
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>

	<div class="flex flex-col gap-4">
		<?php
		foreach ( $customer_orders->orders as $customer_order ) {
			$order      = wc_get_order( $customer_order );
			$item_count = $order->get_item_count() - $order->get_item_count_refunded();
			?>
			<div class="w-full px-6 py-4 bg-white flex-col justify-start items-end gap-3 inline-flex">
				<div class="self-stretch justify-start items-center gap-2 inline-flex">
					<div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
						<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>"
							class="text-zinc-900 text-sm font-normal leading-tight">
							<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
							-
							<?php echo $order->get_item_count(); ?>
							<?php echo __( 'items' ); ?>
						</a>
					</div>
					<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>"
						class="justify-start items-center gap-2 flex">
						<div class="text-green-500 text-sm font-normal leading-tight">
							<?php echo wc_get_order_status_name( $order->get_status() ); ?>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M0.646447 0.528283C0.841709 0.33302 1.15829 0.33302 1.35355 0.528283L4.88215 4.05688C4.88753 4.06226 4.89295 4.06767 4.89839 4.07311C4.99512 4.16977 5.09972 4.27428 5.17611 4.3744C5.2656 4.49169 5.36193 4.65952 5.36193 4.88184C5.36193 5.10415 5.2656 5.27198 5.17611 5.38927C5.09972 5.48939 4.99512 5.59391 4.89839 5.69056C4.89295 5.696 4.88753 5.70141 4.88215 5.70679L1.35355 9.23539C1.15829 9.43065 0.841709 9.43065 0.646447 9.23539C0.451184 9.04013 0.451184 8.72355 0.646447 8.52828L4.17504 4.99969C4.22175 4.95298 4.25959 4.9151 4.29181 4.88184C4.25959 4.84857 4.22175 4.81069 4.17504 4.76398L0.646447 1.23539C0.451184 1.04013 0.451184 0.723545 0.646447 0.528283Z"
								fill="#1A1A1A" />
						</svg>
					</a>
				</div>
				<div class="w-full">
					<?php
					$products = array_map(
						function ( WC_Order_Item $item ) {
							return $item->get_name();
						},
						$order->get_items()
					);

					echo join( ', ', $products );
					?>
				</div>
				<div class="self-stretch justify-start items-center gap-3 inline-flex flex-wrap">
					<div class="w-40 text-neutral-500 text-sm font-normal leading-tight">
						<?php echo wc_format_datetime( $order->get_date_created() ); ?>
					</div>
					<div class="grow shrink basis-0 h-6 justify-end items-center gap-2 flex">
						<div class="text-zinc-900 text-sm font-normal leading-tight">
							<?php echo __( 'Payment' ); ?>:
						</div>
						<div class="text-right text-green-500 text-xl font-semibold leading-normal">
							<?php echo wc_price( $order->get_total() ); ?>
						</div>
					</div>
					<div class="justify-end items-start gap-2 flex">
						<a href="<?php echo $order->get_cancel_order_url(); ?>"
							class="w-36 h-10 px-4 rounded-md border border-red-500 justify-center items-center gap-2 flex">
							<div class="text-red-500 text-sm font-semibold leading-none">
								<?php echo __( 'Cancel order' ); ?>
							</div>
						</a>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button<?php echo esc_attr( $wp_button_class ); ?>"
					href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>">
					<?php esc_html_e( 'Previous', 'woocommerce' ); ?>
				</a>
			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button<?php echo esc_attr( $wp_button_class ); ?>"
					href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>">
					<?php esc_html_e( 'Next', 'woocommerce' ); ?>
				</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>

	<?php wc_print_notice( esc_html__( 'No order has been made yet.', 'woocommerce' ) . ' <a class="woocommerce-Button button' . esc_attr( $wp_button_class ) . '" href="' . esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ) . '">' . esc_html__( 'Browse products', 'woocommerce' ) . '</a>', 'notice' ); // phpcs:ignore WooCommerce.Commenting.CommentHooks.MissingHookComment ?>

<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
