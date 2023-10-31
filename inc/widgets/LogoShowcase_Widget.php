<?php

class LogoShowcase_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'logo_showcase',
			__( 'Logo Showcase' ),
			array(
				'description' => __( 'Your logo showcase' ),
			)
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo logo_showcase();
		echo $args['after_widget'];
	}
}
