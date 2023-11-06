<div id="cart" class="w-full flex-col justify-start items-start inline-flex">
	<div class="self-stretch px-6 py-4 bg-white border-b border-gray-200 justify-start items-center gap-2 inline-flex">
		<a href="#" rel="modal:close" class="w-10 h-10 justify-center items-center gap-2.5 flex">
			<svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M15.8775 0.46967C16.1704 0.762563 16.1704 1.23744 15.8775 1.53033L1.8775 15.5303C1.5846 15.8232 1.10973 15.8232 0.816838 15.5303C0.523945 15.2374 0.523945 14.7626 0.816838 14.4697L14.8168 0.46967C15.1097 0.176777 15.5846 0.176777 15.8775 0.46967Z"
					fill="#767676" />
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M0.816838 0.46967C1.10973 0.176777 1.5846 0.176777 1.8775 0.46967L15.8775 14.4697C16.1704 14.7626 16.1704 15.2374 15.8775 15.5303C15.5846 15.8232 15.1097 15.8232 14.8168 15.5303L0.816838 1.53033C0.523945 1.23744 0.523945 0.762563 0.816838 0.46967Z"
					fill="#767676" />
			</svg>
		</a>
		<div class="grow shrink basis-0 text-center text-zinc-900 text-xl font-semibold leading-normal">
			<?php echo __( 'Your cart' ); ?>
		</div>
		<div class="w-10 h-10 opacity-0 justify-center items-center gap-2.5 flex">
			<div class="w-6 h-6 p-1 justify-center items-center flex">
				<div class="w-4 h-4 relative">
				</div>
			</div>
		</div>
	</div>
	<div class="self-stretch grow shrink basis-0 p-6 bg-white flex-col justify-start items-start gap-4 flex">
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
						<div class="text-right text-zinc-900 text-sm font-semibold leading-none">
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
	<div class="self-stretch h-36 p-6 bg-white border-t border-gray-200 flex-col justify-start items-start gap-4 flex">
		<div class="self-stretch justify-start items-center gap-2 inline-flex">
			<div class="grow shrink basis-0 text-zinc-900 text-base font-semibold leading-tight">
				<?php echo __( 'Checkout' ); ?>
			</div>
			<div class="text-right text-green-500 text-xl font-semibold leading-normal">
				<?php echo WC()->cart->get_total(); ?>
			</div>
		</div>
		<div class="self-stretch h-12 px-6 bg-green-500 rounded-md justify-center items-center gap-2 inline-flex">
			<a href="<?php echo wc_get_checkout_url(); ?>" class="text-white text-base font-semibold leading-tight">
				<?php echo __( 'Checkout' ); ?>
			</a>
		</div>
	</div>
</div>
