<?php
/**
 * Grouped product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/grouped.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product, $post;

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart grouped_form"
	action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>"
	method="post" enctype='multipart/form-data'>
	<table cellspacing="0" class="woocommerce-grouped-product-list group_table">
		<tbody>
			<?php
			$quantites_required      = false;
			$previous_post           = $post;
			$grouped_product_columns = apply_filters(
				'woocommerce_grouped_product_columns',
				array(
					'quantity',
					'label',
					'price',
				),
				$product
			);
			$show_add_to_cart_button = false;

			do_action( 'woocommerce_grouped_product_list_before', $grouped_product_columns, $quantites_required, $product );

			foreach ( $grouped_products as $grouped_product_child ) {
				$post_object        = get_post( $grouped_product_child->get_id() );
				$quantites_required = $quantites_required || ( $grouped_product_child->is_purchasable() && ! $grouped_product_child->has_options() );
				$post               = $post_object; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				setup_postdata( $post );

				if ( $grouped_product_child->is_in_stock() ) {
					$show_add_to_cart_button = true;
				}

				echo '<tr id="product-' . esc_attr( $grouped_product_child->get_id() ) . '" class="woocommerce-grouped-product-list-item ' . esc_attr( implode( ' ', wc_get_product_class( '', $grouped_product_child ) ) ) . '">';

				// Output columns for each product.
				foreach ( $grouped_product_columns as $column_id ) {
					do_action( 'woocommerce_grouped_product_list_before_' . $column_id, $grouped_product_child );

					switch ( $column_id ) {
						case 'quantity':
							ob_start();

							if ( ! $grouped_product_child->is_purchasable() || $grouped_product_child->has_options() || ! $grouped_product_child->is_in_stock() ) {
								woocommerce_template_loop_add_to_cart();
							} elseif ( $grouped_product_child->is_sold_individually() ) {
								echo '<input type="checkbox" name="' . esc_attr( 'quantity[' . $grouped_product_child->get_id() . ']' ) . '" value="1" class="wc-grouped-product-add-to-cart-checkbox" id="' . esc_attr( 'quantity-' . $grouped_product_child->get_id() ) . '" />';
								echo '<label for="' . esc_attr( 'quantity-' . $grouped_product_child->get_id() ) . '" class="screen-reader-text">' . esc_html__( 'Buy one of this item', 'woocommerce' ) . '</label>';
							} else {
								do_action( 'woocommerce_before_add_to_cart_quantity' );

								woocommerce_quantity_input(
									array(
										'input_name'  => 'quantity[' . $grouped_product_child->get_id() . ']',
										'input_value' => isset( $_POST['quantity'][ $grouped_product_child->get_id() ] ) ? wc_stock_amount( wc_clean( wp_unslash( $_POST['quantity'][ $grouped_product_child->get_id() ] ) ) ) : '', // phpcs:ignore WordPress.Security.NonceVerification.Missing
										'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 0, $grouped_product_child ),
										'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $grouped_product_child->get_max_purchase_quantity(), $grouped_product_child ),
										'placeholder' => '0',
									)
								);

								do_action( 'woocommerce_after_add_to_cart_quantity' );
							}

							$value = ob_get_clean();
							break;
						case 'label':
							$value  = '<label for="product-' . esc_attr( $grouped_product_child->get_id() ) . '">';
							$value .= $grouped_product_child->is_visible() ? '<a href="' . esc_url( apply_filters( 'woocommerce_grouped_product_list_link', $grouped_product_child->get_permalink(), $grouped_product_child->get_id() ) ) . '">' . $grouped_product_child->get_name() . '</a>' : $grouped_product_child->get_name();
							$value .= '</label>';
							break;
						case 'price':
							$value = $grouped_product_child->get_price_html() . wc_get_stock_html( $grouped_product_child );
							break;
						default:
							$value = '';
							break;
					}

					echo '<td class="woocommerce-grouped-product-list-item__' . esc_attr( $column_id ) . '">' . apply_filters( 'woocommerce_grouped_product_list_column_' . $column_id, $value, $grouped_product_child ) . '</td>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

					do_action( 'woocommerce_grouped_product_list_after_' . $column_id, $grouped_product_child );
				}

				echo '</tr>';
			}
			$post = $previous_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
			setup_postdata( $post );

			do_action( 'woocommerce_grouped_product_list_after', $grouped_product_columns, $quantites_required, $product );
			?>
		</tbody>
	</table>

	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />

	<?php if ( $quantites_required && $show_add_to_cart_button ) : ?>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<button type="submit"
			class="grow h-14 px-4 rounded-md border border-green-500 justify-center items-center gap-2 inline-flex">
			<svg xmlns="http://www.w3.org/2000/svg" width="21" height="23" viewBox="0 0 21 23" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M7.66757 6.75H12.8324C14.0179 6.74998 14.978 6.74997 15.7456 6.84645C16.5454 6.94698 17.2261 7.16108 17.8059 7.65272C18.3847 8.14351 18.7107 8.78179 18.9479 9.55779C19.1761 10.3045 19.3446 11.2603 19.5532 12.4435L19.9373 14.6219C20.2272 16.2659 20.4587 17.5788 20.4949 18.6175C20.5323 19.6884 20.3698 20.6068 19.7427 21.3654C19.114 22.1259 18.2451 22.4515 17.1927 22.6033C16.1747 22.75 14.8561 22.75 13.2089 22.75H7.29111C5.64387 22.75 4.32529 22.75 3.3073 22.6033C2.25487 22.4515 1.38596 22.1259 0.757271 21.3654C0.130155 20.6068 -0.032297 19.6884 0.00503343 18.6175C0.0412433 17.5788 0.272762 16.2658 0.562656 14.6219L0.946743 12.4435C1.15536 11.2603 1.32386 10.3045 1.5521 9.55779C1.78928 8.78179 2.11527 8.14351 2.69408 7.65272C3.27391 7.16108 3.95461 6.94698 4.75436 6.84645C5.52197 6.74997 6.48203 6.74998 7.66757 6.75ZM4.94143 8.33474C4.29967 8.41541 3.9391 8.56369 3.66418 8.7968C3.38824 9.03078 3.17894 9.36694 2.98659 9.99624C2.78839 10.6447 2.6346 11.5094 2.41547 12.7521L2.05023 14.8235C1.74761 16.5398 1.53623 17.7488 1.50412 18.6698C1.47271 19.5709 1.62077 20.0557 1.91336 20.4096C2.20438 20.7616 2.64484 20.9922 3.52136 21.1186C4.41978 21.2482 5.62976 21.25 7.35209 21.25H13.1479C14.8702 21.25 16.0802 21.2482 16.9786 21.1186C17.8551 20.9922 18.2956 20.7616 18.5866 20.4096C18.8792 20.0557 19.0273 19.5709 18.9959 18.6698C18.9637 17.7488 18.7524 16.5398 18.4497 14.8235L18.0845 12.7521C17.8654 11.5094 17.7116 10.6447 17.5134 9.99624C17.321 9.36694 17.1117 9.03078 16.8358 8.7968C16.5609 8.56369 16.2003 8.41541 15.5585 8.33474C14.8954 8.25138 14.0298 8.25 12.7826 8.25H7.71733C6.47016 8.25 5.60461 8.25138 4.94143 8.33474Z"
					fill="#33B44A" />
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M10.2503 2.25C8.37948 2.25 6.82093 3.68407 6.66557 5.54847L6.49775 7.56228L5.00293 7.43772L5.17075 5.4239C5.3909 2.78206 7.59934 0.75 10.2503 0.75C12.9013 0.75 15.1098 2.78206 15.3299 5.4239L15.4977 7.43772L14.0029 7.56228L13.8351 5.54847C13.6797 3.68407 12.1212 2.25 10.2503 2.25Z"
					fill="#33B44A" />
				<path d="M10.25 11.9526L10.25 17.547" stroke="#5CC36E" stroke-width="1.5" stroke-linecap="round" />
				<path d="M13.0479 14.75L7.45349 14.75" stroke="#5CC36E" stroke-width="1.5" stroke-linecap="round" />
			</svg>
			<div class="text-green-500 text-base leading-tight">
				<?php echo esc_html( $product->single_add_to_cart_text() ); ?>
			</div>
		</button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<?php endif; ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
