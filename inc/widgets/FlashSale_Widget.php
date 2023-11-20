<?php

class FlashSale_Widget extends WP_Widget {

	private $defaults = array();

	public function __construct() {
		parent::__construct(
			'flashsale',
			__( 'Flash Sale' ),
			array(
				'description' => __( 'Display flashsale' ),
				'icon'        => 'dashicons-superhero',
			)
		);

		$this->defaults = array(
			'end_at' => ( new DateTime() )->format( 'Y-m-d\TH:i:s' ),
		);
	}

	public function form( $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'end_at' ); ?>">
				<?php echo __( 'End At' ); ?>:
			</label>
			<input class="widefat" type="datetime-local" name="<?php echo $this->get_field_name( 'end_at' ); ?>"
				id="<?php $this->get_field_id( 'end_at' ); ?>" value="<?php echo $instance['end_at']; ?>" />
		</p>
		<?php
	}

	/**
	 * @global WC_Product $product
	 */
	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );

		echo $args['before_widget'];

		?>
		<div id="countdown" class="bg-white px-2 md:px-[89px] py-[50px] flex flex-col gap-6">
			<div class="w-full h-11 justify-start items-center inline-flex">
				<div class="grow shrink basis-0 h-11 justify-start items-start gap-2 flex">
					<div class="justify-start items-start flex">
						<div class="text-green-500 text-3xl font-semibold leading-10">F</div>
						<div class="w-5 pt-1.5 justify-start items-start flex">
							<svg xmlns="http://www.w3.org/2000/svg" width="19" height="32" viewBox="0 0 19 32" fill="none">
								<path
									d="M18.6732 11.0507C18.5846 10.8723 18.3937 10.7579 18.1835 10.7579H11.7787L18.0997 1.40271C18.2051 1.24668 18.2116 1.04909 18.1165 0.887484C18.0214 0.725339 17.8397 0.625 17.643 0.625H8.9952C8.79036 0.625 8.60332 0.733413 8.51148 0.905177L0.40416 16.1044C0.320364 16.261 0.329548 16.4474 0.427912 16.5969C0.526847 16.7463 0.700331 16.8375 0.887876 16.8375H6.4457L0.389529 30.3202C0.286287 30.5508 0.378192 30.8183 0.605703 30.949C0.693237 30.9992 0.790525 31.0234 0.887306 31.0234C1.04242 31.0234 1.19538 30.9611 1.30135 30.8436L18.597 11.5912C18.7326 11.4403 18.7618 11.2295 18.6732 11.0507Z"
									fill="#33B44A" />
							</svg>
						</div>
						<div class="text-green-500 text-3xl font-semibold leading-10">ASH SALE</div>
					</div>
				</div>
				<div class="justify-start items-center gap-2 flex">
					<div class="hidden md:block text-zinc-900 text-base font-semibold leading-tight">
						<?php echo __( 'End after' ); ?>:
					</div>
					<div class="w-10 h-10 p-1 bg-green-100 rounded-md flex-col justify-center items-center gap-2.5 inline-flex">
						<div class="hour text-green-500 text-lg font-semibold leading-snug"></div>
					</div>
					<div class="text-green-500 text-base font-normal leading-snug">:</div>
					<div class="w-10 h-10 p-1 bg-green-100 rounded-md flex-col justify-center items-center gap-2.5 inline-flex">
						<div class="minute text-green-500 text-lg font-semibold leading-snug"></div>
					</div>
					<div class="text-green-500 text-base font-normal leading-snug">:</div>
					<div class="w-10 h-10 p-1 bg-green-100 rounded-md flex-col justify-center items-center gap-2.5 inline-flex">
						<div class="second text-green-500 text-lg font-semibold leading-snug"></div>
					</div>
				</div>
			</div>
			<input id="end_at" class="hidden"
				value="<?php echo ( new DateTime( $instance['end_at'] ) )->format( 'Y/m/d H:i:s' ); ?>">
			<?php

			$sale_products = new WP_Query(
				array(
					'post_type' => 'product',
					'post__in'  => wc_get_product_ids_on_sale(),
				)
			);

			if ( $sale_products->have_posts() ) :
				?>
				<ul class="products-sale rounded-md border-2 border-green-500">
					<?php
					while ( $sale_products->have_posts() ) {
						$sale_products->the_post();
						wc_get_template_part( 'content', 'product' );
					}
					wp_reset_postdata();
					?>
				</ul>
			<?php endif; ?>
		</div>

		<?php
		echo $args['after_widget'];
	}
}
