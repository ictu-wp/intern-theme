<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<div class="w-full h-20 px-20 bg-white justify-between items-center inline-flex">
	<?php the_custom_logo(); ?>
	<?php get_search_form(); ?>
	<div class="justify-center items-center gap-2 flex">
		<div class="w-8 h-8 px-0.5 py-1 justify-center items-center flex">
			<div class="w-7 h-6 relative">
			</div>
		</div>
		<div class="flex-col justify-center items-start gap-0.5 inline-flex">
			<div class="text-zinc-900 text-sm font-semibold font-['Be Vietnam Pro'] leading-none">0983 345 486</div>
			<div class="text-neutral-500 text-xs font-normal font-['Be Vietnam Pro'] leading-none">Hỗ trợ đặt hàng</div>
		</div>
	</div>
	<div class="justify-center items-center gap-2 flex">
		<div class="w-8 h-8 px-0.5 pt-0.5 pb-px justify-center items-center flex">
			<div class="w-7 h-7 relative">
			</div>
		</div>
		<div class="flex-col justify-center items-start gap-0.5 inline-flex">
			<div class="text-zinc-900 text-sm font-semibold font-['Be Vietnam Pro'] leading-none">
				<?php echo __( 'Cart' ); ?>
			</div>
			<div class="text-neutral-500 text-xs font-normal font-['Be Vietnam Pro'] leading-none">
				<?php echo WC()->cart->get_cart_contents_count(); ?> <?php echo __( 'items' ); ?>
			</div>
		</div>
	</div>
	<?php if ( is_user_logged_in() ) : ?>
		<div class="h-10 justify-center items-center gap-2 flex">
			<img class="w-10 h-10 rounded-full border border-gray-200" src="<?php echo get_avatar_url( get_current_user_id() ); ?>" />
			<div class="flex-col justify-center items-start gap-0.5 inline-flex">
				<div class="text-zinc-900 text-sm font-semibold font-['Be Vietnam Pro'] leading-none">
					<?php echo get_current_user(); ?>
				</div>
				<div class="text-neutral-500 text-xs font-normal font-['Be Vietnam Pro'] leading-none">Developer</div>
			</div>
		</div>
	<?php endif; ?>
</div>

<body <?php body_class(); ?>>
