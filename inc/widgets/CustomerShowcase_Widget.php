<?php

class CustomerShowcase_Widget extends WP_Widget {

	private $defaults = array(
		'title' => '',
	);

	public function __construct() {
		parent::__construct(
			'customer_showcase',
			__( 'Customer Showcase' ),
			array(
				'description' => __( 'Your customer showcase' ),
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

	/**
	 * @global WP_Post $post
	 */
	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );

		echo $args['before_widget'];

		$customers = new WP_Query(
			array(
				'post_type' => 'customer',
			)
		);

		if ( $customers->have_posts() ) :
			?>
			<div class="px-[89px] py-[50px] flex flex-col gap-4">
				<div class="w-full h-10 justify-start items-center inline-flex">
					<div class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold leading-7">
						<?php echo $instance['title']; ?>
					</div>
					<div class="justify-start items-start gap-4 flex">
						<div
							class="prev-customer w-10 h-10 p-2.5 rounded-md border border-gray-300 justify-center items-center gap-2.5 flex">
							<i class="fa-solid fa-angle-left"></i>
						</div>
						<div
							class="next-customer w-10 h-10 p-2.5 rounded-md border border-gray-300 justify-center items-center gap-2.5 flex">
							<i class="fa-solid fa-angle-right"></i>
						</div>
					</div>
				</div>
				<ul class="customer-showcase">
					<?php
					while ( $customers->have_posts() ) :
						$customers->the_post();
						global $post;
						$avatar = get_the_post_thumbnail_url( $post );
						$roles  = get_the_term_list( $post->ID, 'customer_role', sep: ' & ' );
						?>
						<div
							class="p-8 bg-white rounded-md border border-gray-200 flex-col justify-start items-start gap-6 inline-flex">
							<div class="self-stretch justify-start items-center gap-5 inline-flex">
								<?php if ( $avatar ) : ?>
									<img class="w-24 h-24 rounded-full border border-gray-200" src="<?php echo $avatar; ?>" />
								<?php endif; ?>
								<div class="flex-col justify-start items-start gap-0.5 inline-flex">
									<div class="text-green-500 text-xl font-semibold leading-normal">
										<?php the_title(); ?>
									</div>
									<div class="text-neutral-500 text-sm font-normal leading-tight">
										<?php echo $roles; ?>
									</div>
								</div>
							</div>
							<div class="self-stretch text-zinc-900 text-sm font-normal leading-tight">
								<?php the_content(); ?>
							</div>
						</div>
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
}
