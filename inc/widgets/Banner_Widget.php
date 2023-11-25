<?php

use Carbon_Fields\Field;
use Carbon_Fields\Widget;

class Banner_Widget extends Widget {
	function __construct() {
		$this->setup(
			'banner',
			'Banner Showcase',
			'Displays a block with banner',
			array(
				Field::make_media_gallery( 'main_slides', 'Main slides' )->set_type( 'image' ),
				Field::make_media_gallery( 'rimages', 'Right images' )->set_type( 'image' ),
			)
		);

		$this->print_wrappers = false;
	}

	/**
	 * Frontend of widget
	 *
	 * @template TInstance of array{main_slides:list<int>,rimages:list<int>}
	 *
	 * @param array{before_widget:string,after_widget:string} $args
	 * @param TInstance                                       $instance
	 * @return void
	 */
	function front_end( $args, $instance ) {
		/**
		 * @var TInstance
		 */
		$instance = wp_parse_args(
			$instance,
			array(
				'main_slides' => array(),
				'rimages'     => array(),
			)
		);

		echo $args['before_widget'];
		?>
		<div class="flex-wrap px-2 md:px-20 flex flex-row gap-4 md:flex-nowrap">
			<div class="w-full md:basis-3/4 grow-0 shrink-0 overflow-hidden">
				<div class="banner-main">
					<?php
					foreach ( $instance['main_slides'] as $id ) :
						/** @var string */
						$image = wp_get_attachment_image_url( $id );
						?>
						<img src="<?php echo $image; ?>" class="rounded-md h-[432px] object-cover">
					<?php endforeach; ?>
				</div>
			</div>
			<div class="grow flex flex-col gap-4">
				<?php
				foreach ( $instance['rimages'] as $id ) :
					/** @var string */
					$image = wp_get_attachment_image_url( $id );
					?>
					<img src="<?php echo $image; ?>" class="rounded-md h-52 object-cover">
				<?php endforeach; ?>
			</div>
		</div>
		<?php
		echo $args['after_widget'];
	}
}
