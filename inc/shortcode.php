<?php

add_shortcode( 'logo_showcase', 'logo_showcase' );

function logo_showcase(): string {
	$query = array(
		'post_type' => 'logo',
	);

	$logo_query = new WP_Query( $query );
	ob_start();
	?>
	<div class="logo_showcase w-full h-36 px-20 justify-start items-center gap-12 inline-flex bg-white overflow-x-auto">
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
	return ob_get_clean() ?: '';
}

add_shortcode(
	'woo_categories',
	function ( $args, $content ) {
		$args = wp_parse_args(
			$args,
			array(
				'title' => __( 'Categories' ),
			)
		);

		show_woocommerce_categories( $args['title'], $args['per_page'] );
	}
);


function show_woocommerce_categories( string $title, int $number ): void {
	?>
	<div class="px-2 md:px-[89px] py-[50px] bg-gray-200">
		<div class="w-full h-7 justify-start items-end gap-4 inline-flex mb-2">
			<div class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold leading-7">
				<?php echo $title; ?>
			</div>
			<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>"
				class="text-green-500 text-base font-semibold leading-tight">
				<?php echo __( 'See all' ); ?>
			</a>
		</div>
		<?php categories_items( $number ); ?>
	</div>
	<?php
}

function categories_items( int $number ) {
	/** @var list<WP_Term> */
	$categories = get_categories(
		array(
			'taxonomy'   => 'product_cat',
			'number'     => $number,
		)
	);

	?>
	<div class="bg-white grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6">
		<?php
		foreach ( $categories as $category ) :
			$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
			$image        = wp_get_attachment_url( $thumbnail_id );
			?>
			<div class="w-full p-6 flex-col justify-center items-center gap-4 inline-flex">
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
	<?php
}
