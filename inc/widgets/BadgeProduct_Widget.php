<?php

class BadgeProduct_Widget extends WP_Widget {
	private $defaults = array(
		'title'   => '',
		'icon'    => '',
		'content' => '',
		'color'   => '#F5F5F5',
	);

	public function __construct() {
		parent::__construct(
			'product_badge',
			__( 'Badge for product' ),
			array(
				'description' => __( 'Badge for WooCommerce product' ),
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
			<label for="<?php echo $this->get_field_id( 'content' ); ?>">
				<?php echo __( 'content' ); ?>
			</label>
			<textarea class="widefat" name="<?php echo $this->get_field_name( 'content' ); ?>"
				id="<?php echo $this->get_field_id( 'content' ); ?>"><?php echo $instance['content']; ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'icon' ); ?>">
				<?php echo __( 'icon' ); ?>
			</label>
			<input class="widefat" type="text" name="<?php echo $this->get_field_name( 'icon' ); ?>"
				id="<?php echo $this->get_field_id( 'icon' ); ?>" value="<?php echo esc_html( $instance['icon'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'color' ); ?>">
				<?php echo __( 'color' ); ?>
			</label>
			<input class="widefat" type="color" name="<?php echo $this->get_field_name( 'color' ); ?>"
				id="<?php echo $this->get_field_id( 'color' ); ?>" value="<?php echo $instance['color']; ?>" />
		</p>
		<?php
	}

	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );

		echo $args['before_widget'];
		?>
		<div class="w-48 p-5 border-neutral-100 border rounded-md flex-col justify-start items-start gap-4 inline-flex"
			style="background-color: <?php echo $instance['color']; ?>;">
			<?php if ( '' != $icon = $instance['icon'] ) : ?>
				<div class="w-8 h-8 px-0.5 py-1 justify-center items-center inline-flex">
					<?php echo $icon; ?>
				</div>
			<?php endif; ?>
			<div class="self-stretch flex-col justify-center items-start gap-2 flex">
				<div class="self-stretch text-zinc-900 text-sm font-semibold leading-none">
					<?php echo $instance['title']; ?>
				</div>
				<div class="self-stretch opacity-60 text-zinc-900 text-sm font-normal leading-tight">
					<?php echo nl2br( $instance['content'] ); ?>
				</div>
			</div>
		</div>
		<?php
		echo $args['after_widget'];
	}
}
