<?php

class ProductCategories_Widget extends WP_Widget {

	private $defaults = array(
		'title'    => '',
		'per_page' => 8,
	);

	public function __construct() {
		parent::__construct(
			'woocategories',
			__( 'Woocommerce Categories' ),
			array(
				'description' => __( 'List categories of woocommerce' ),
				'icon'        => 'dashicons-category',
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
		<p>
			<label for="<?php echo $this->get_field_id( 'per_page' ); ?>">
				<?php echo __( 'Per Page' ); ?>
			</label>
			<input class="widefat" type="number" name="<?php echo $this->get_field_name( 'per_page' ); ?>"
				id="<?php echo $this->get_field_id( 'per_page' ); ?>" value="<?php echo $instance['per_page']; ?>" />
		</p>
		<?php
	}

	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		echo $args['before_widget'];
		show_woocommerce_categories( $instance['title'], $instance['per_page'] );
		echo $args['after_widget'];
	}
}
