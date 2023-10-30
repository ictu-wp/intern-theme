<?php

class ProductCategories extends WP_Widget {

	private $defaults = array(
		'title' => '',
	);

	public function __construct() {
		parent::__construct(
			'woocategories',
			__( 'Woocommerce categories' ),
			array(
				'description' => __( 'List categories of woocommerce' ),
			)
		);
	}

	public function form( $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				<?php echo __( 'Title' ); ?>
			</label>
			<input class="widefat" type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"
				id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<?php
	}

	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		echo $args['before_widget'];
		show_woocommerce_categories( $instance['title'] );
		echo $args['after_widget'];
	}
}
