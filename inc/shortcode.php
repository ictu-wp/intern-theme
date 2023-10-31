<?php

add_shortcode(
	'logo_showcase',
	/**
	 * @param array<string|int> $args
	 * @param string $content
	 */
	function ( $args, $content ) {
		$query = array(
			'post_type' => 'logo',
		);

		$logo_query = new WP_Query( $query );
		ob_start();
		?>
	<div class="w-full h-36 px-20 justify-start items-center gap-12 inline-flex bg-white">
		<?php
		if ( $logo_query->have_posts() ) :
			while ( $logo_query->have_posts() ) :
				$logo_query->the_post();
				?>
				<?php the_post_thumbnail(); ?>
				<?php
				endwhile;
			wp_reset_postdata();
			endif;
		?>
	</div>
		<?php
		return ob_get_clean();
	}
);


add_shortcode(
	'woo_categories',
	function ( $args, $content ) {
		$args = wp_parse_args(
			$args,
			array(
				'title' => __( 'Categories' ),
			)
		);

		show_woocommerce_categories( $args['title'] );
	}
);


function show_woocommerce_categories( string $title ): void {
	/** @var list<WP_Term> */
	$categories = get_categories(
		array( 'taxonomy' => 'product_cat' )
	);

	?>
	<div class="px-[89px] py-[50px]">
		<div class="w-full text-zinc-900 text-2xl font-semibold leading-7 mb-2">
			<?php echo $title; ?>
		</div>
		<div class="grid grid-cols-6 bg-white">
			<?php
			foreach ( $categories as $category ) :
				$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
				$image        = wp_get_attachment_url( $thumbnail_id );
				?>
				<div class="w-52 h-52 p-6 flex-col justify-center items-center gap-4 inline-flex">
					<div class="w-24 h-24 relative">
						<div class="w-24 h-24 left-0 top-0 absolute bg-gray-200 rounded-full"></div>
						<?php if ( $image ) : ?>
							<img class="h-20 left-3 top-3 absolute" src="<?php echo $image; ?>" />
						<?php endif; ?>
					</div>
					<div class="flex-col justify-center items-center gap-1 flex">
						<div class="text-zinc-900 text-sm font-semibold leading-none">
							<a href="<?php echo get_term_link( $category->term_id ); ?>">
								<?php echo $category->name; ?>
							</a>
						</div>
						<div class="text-neutral-500 text-sm font-normal leading-tight">
							<?php echo $category->count; ?>
							<?php echo __( 'products' ); ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php
}
