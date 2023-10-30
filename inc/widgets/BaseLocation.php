<?php

class BaseLocation extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'base_location',
			__( 'Base location' ),
			array(
				'description' => __( 'Base location' ),
			)
		);
	}

	public function widget( $args, $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => '',
				'description' => '',
			)
		);
		// Before widget tag
		echo $args['before_widget'];

		?>
		<div class="bg-black w-full h-14 justify-start items-start gap-2 inline-flex">
			<div class="self-stretch pt-0.5 justify-start items-start gap-2.5 flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.210449 7.32214C0.210449 3.53059 3.29389 0.447144 7.08545 0.447144C10.877 0.447144 13.9604 3.53059 13.9604 7.32214C13.9604 8.53485 13.6402 9.72782 13.0329 10.7726C12.8919 11.0151 12.7346 11.2512 12.565 11.4748C12.5644 11.4756 12.5638 11.4764 12.5632 11.4772L7.72731 17.9471H6.44355L1.60779 11.4772C1.60719 11.4764 1.60658 11.4756 1.60598 11.4748C1.43622 11.2512 1.27892 11.0151 1.13799 10.7726M7.08545 1.94714C4.12232 1.94714 1.71045 4.35901 1.71045 7.32214C1.71045 8.27156 1.9614 9.20427 2.43485 10.0189C2.54534 10.209 2.66906 10.3946 2.80223 10.5699L2.80577 10.5745L7.08544 16.3004L11.3686 10.57C11.5018 10.3946 11.6255 10.209 11.736 10.0189C12.2095 9.20427 12.4604 8.27156 12.4604 7.32214C12.4604 4.35901 10.0486 1.94714 7.08545 1.94714ZM7.08545 6.04089C6.37963 6.04089 5.8042 6.61633 5.8042 7.32214C5.8042 8.02796 6.37963 8.60339 7.08545 8.60339C7.79127 8.60339 8.3667 8.02796 8.3667 7.32214C8.3667 6.61633 7.79127 6.04089 7.08545 6.04089ZM4.3042 7.32214C4.3042 5.7879 5.5512 4.54089 7.08545 4.54089C8.61969 4.54089 9.8667 5.7879 9.8667 7.32214C9.8667 8.85639 8.61969 10.1034 7.08545 10.1034C5.5512 10.1034 4.3042 8.85639 4.3042 7.32214ZM0.210449 7.32214C0.210449 8.53485 0.530752 9.72783 1.13799 10.7726L0.210449 7.32214Z"
						fill="#767676" />
				</svg>
			</div>
			<div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
				<div class="self-stretch text-white text-sm font-semibold leading-none">
					<?php echo $instance['title']; ?>
				</div>
				<div class="self-stretch text-justify text-neutral-500 text-sm font-normal leading-tight">
					<?php echo $instance['description']; ?>
				</div>
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
				'title'       => '',
				'description' => '',
			)
		);

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				<?php echo __( 'Name' ); ?>
			</label>
			<input class="widefat" type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"
				id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'description' ); ?>">
				<?php echo __( 'Description' ); ?>
			</label>
			<input class="widefat" type="text" name="<?php echo $this->get_field_name( 'description' ); ?>"
				id="<?php echo $this->get_field_id( 'description' ); ?>" value="<?php echo $instance['description']; ?>" />
		</p>
		<?php
	}
}
