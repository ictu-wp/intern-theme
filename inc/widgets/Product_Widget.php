<?php

class Product_Widget extends WP_Widget {

	private $defaults = array(
		'term_id' => -1,
	);

	public function __construct() {
		parent::__construct(
			'woo_product_widget',
			'Woocommerce Products',
			array(
				'description' => 'Widget to display products for Woocommerce',
				'icon'        => 'dashicons-cart',
			)
		);
	}

	/**
	 * @global WC_Product $product
	 */
	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		$title    = null;

		$query = array(
			'post_type' => 'product',
		);

		if ( $instance['term_id'] != -1 ) {
			$query['tax_query'] = array(
				array(
					'taxonomy' => 'product_cat',
					'field'    => 'term_id',
					'terms'    => $instance['term_id'],
				),
			);

			// @phpstan-ignore-next-line
			$title = get_term( $instance['term_id'] )->name;
		}

		$products = new WP_Query( $query );

		echo $args['before_widget'];
		if ( $products->have_posts() ) : ?>
			<div class="px-2 md:px-[80px] py-12 bg-white flex flex-col gap-4">
				<div class="w-96 text-zinc-900 text-2xl font-semibold leading-7">
					<?php echo $title ?: __( 'All Products' ); ?>
				</div>
				<ul class="hide-scrollbar multiple-items">
					<?php
					while ( $products->have_posts() ) :
						$products->the_post();
						global $product;
						$thumbnail = get_the_post_thumbnail_url( $product->get_id() );
						?>
						<li class="flex flex-col gap-2">
							<?php if ( $thumbnail ) : ?>
								<img src="<?php echo $thumbnail; ?>" alt="Product" class="w-32 h-32 md:w-64 md:h-64 rounded-md">
							<?php endif; ?>
							<div class="w-32 md:w-64 text-zinc-900 text-base font-normal leading-snug">
								<a href="<?php echo $product->get_permalink(); ?>">
									<?php echo $product->get_title(); ?>
								</a>
							</div>
							<div>
								<?php echo $product->get_price_html(); ?>
							</div>
						</li>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</ul>
			</div>
			<?php
		endif;
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$instance   = wp_parse_args( $instance, $this->defaults );
		$categories = get_categories( array( 'taxonomy' => 'product_cat' ) );

		$categories   = array_map(
			function ( WP_Term $term ) {
				return array( $term->term_id, $term->name );
			},
			$categories
		);
		$categories[] = array( -1, 'All' );

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'term_id' ); ?>">Select Category:</label>
			<select class="widefat" id="<?php echo $this->get_field_id( 'term_id' ); ?>"
				name="<?php echo $this->get_field_name( 'term_id' ); ?>">
				<?php foreach ( $categories as $category ) : ?>
					<option value="<?php echo $category[0]; ?>" <?php selected( $instance['term_id'], $category[0] ); ?>>
						<?php echo $category[1]; ?>
					</option>
				<?php endforeach; ?>
			</select>
		</p>
		<?php
	}
}
