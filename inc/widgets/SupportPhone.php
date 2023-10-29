<?php

class SupportPhone extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'support_phone',
			__( 'Support phone number' ),
			array(
				'description' => __( 'Add support phone number to footer' ),
			)
		);
	}

	public function widget( $args, $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'phone' => '',
			)
		);
		// Before widget tag
		echo $args['before_widget'];

		?>
		<div class="w-12 h-12 px-0.5 py-1.5 justify-center items-center flex">
			<div class="w-11 h-9 relative">
			</div>
		</div>
		<div class="flex-col justify-center items-start gap-1 inline-flex">
			<div class="text-white text-base font-semibold leading-tight">
				Hỗ trợ đặt hàng
			</div>
			<div class="text-green-500 text-xl font-semibold leading-normal">
				<?php echo $instance['phone']; ?>
			</div>
		</div>
		<?php

		// After widget tag
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'phone' => '',
			)
		);

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'phone' ); ?>">
				<?php echo __( 'Phone number' ); ?>
			</label>
			<input class="widefat" type="tel" name="<?php echo $this->get_field_name( 'phone' ); ?>"
				id="<?php echo $this->get_field_id( 'phone' ); ?>" value="<?php echo $instance['phone']; ?>" />
		</p>
		<?php
	}
}
