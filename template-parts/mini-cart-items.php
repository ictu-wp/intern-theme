<div class="product-items self-stretch grow shrink basis-0 flex-col justify-start items-start gap-4 flex">
	<?php
	foreach ( WC()->cart->get_cart() as $item_key => $item ) :
		/** @var WC_Product */
		$product = $item['data'];
		?>
		<div class="mini-item self-stretch justify-start items-start gap-4 inline-flex">
			<?php echo $product->get_image(); ?>
			<div class="grow shrink basis-0 flex-col justify-start items-start gap-0.5 inline-flex">
				<div class="self-stretch justify-start items-baseline gap-2 inline-flex">
					<div class="grow shrink basis-0 text-zinc-900 text-base font-normal leading-snug">
						<?php echo $product->get_name(); ?>
					</div>
					<div class="product-price text-right text-zinc-900 text-sm font-semibold leading-none">
						<?php echo $product->get_price_html(); ?>
					</div>
				</div>
				<?php if ( $product instanceof WC_Product_Variation ) : ?>
					<?php foreach ( $item['variation'] as $attribute => $value ) : ?>
						<div class="self-stretch justify-start items-start gap-2 inline-flex">
							<div class="grow shrink basis-0 h-5 justify-start items-start flex">
								<div class="w-20 text-neutral-500 text-sm font-normal leading-tight">
									<?php echo wc_attribute_label( substr( $attribute, 10 ) ); ?>
								</div>
								<div class="text-zinc-900 text-sm font-normal leading-tight">
									<?php echo $value; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif ?>
				<div class="self-stretch justify-start items-start gap-2 inline-flex">
					<div class="flex-grow"></div>
					<div class="flex-col justify-start items-end gap-1 inline-flex">
						<div class="text-right text-zinc-900 text-sm font-normal leading-tight">
							x
							<?php echo $item['quantity']; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="w-6 h-6 justify-center items-center gap-2.5 flex">
				<a href="<?php echo wc_get_cart_remove_url( $item_key ); ?>"
					class="remove-item w-4 h-4 p-0.5 justify-center items-center flex">
					<svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M10.3676 0.979699C10.5628 1.17496 10.5628 1.49154 10.3676 1.68681L1.03422 11.0201C0.838955 11.2154 0.522373 11.2154 0.327111 11.0201C0.131849 10.8249 0.131849 10.5083 0.327111 10.313L9.66044 0.979699C9.85571 0.784436 10.1723 0.784436 10.3676 0.979699Z"
							fill="#767676" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M0.327111 0.979699C0.522373 0.784436 0.838955 0.784436 1.03422 0.979699L10.3676 10.313C10.5628 10.5083 10.5628 10.8249 10.3676 11.0201C10.1723 11.2154 9.85571 11.2154 9.66044 11.0201L0.327111 1.68681C0.131849 1.49154 0.131849 1.17496 0.327111 0.979699Z"
							fill="#767676" />
					</svg>
				</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
