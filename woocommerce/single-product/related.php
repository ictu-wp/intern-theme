<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products w-full">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<div class="flex-row inline-flex justify-between items-center w-full">
				<h2>
					<?php echo esc_html( $heading ); ?>
				</h2>
				<div class="w-24 h-10 justify-start items-start gap-4 inline-flex">
					<button class="prev-product w-10 h-10 p-2.5 rounded-md border border-gray-200 justify-center items-center gap-2.5 flex">
						<div class="w-6 h-6 px-2 py-1.5 justify-center items-center flex">
							<i class="fa-solid fa-angle-left"></i>
						</div>
					</button>
					<button class="next-product w-10 h-10 p-2.5 rounded-md border border-gray-200 justify-center items-center gap-2.5 flex">
						<div class="w-6 h-6 px-2 py-1.5 justify-center items-center flex">
							<i class="fa-solid fa-angle-right"></i>
						</div>
					</button>
				</div>
			</div>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>

		<?php foreach ( $related_products as $related_product ) : ?>

			<?php
			$post_object = get_post( $related_product->get_id() );

			setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

			wc_get_template_part( 'content', 'product' );
			?>

		<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();
