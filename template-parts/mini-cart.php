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
	<div class="p-6 w-full">
		<?php get_template_part( 'template-parts/mini-cart', 'items' ); ?>
	</div>
	<div class="self-stretch h-36 p-6 bg-white border-t border-gray-200 flex-col justify-start items-start gap-4 flex">
		<div class="self-stretch justify-start items-center gap-2 inline-flex">
			<div class="grow shrink basis-0 text-zinc-900 text-base font-semibold leading-tight">
				<?php echo __( 'Checkout' ); ?>
			</div>
			<?php get_template_part( 'template-parts/mini-cart', 'amount' ); ?>
		</div>
		<div class="self-stretch h-12 px-6 bg-green-500 rounded-md justify-center items-center gap-2 inline-flex">
			<a href="<?php echo wc_get_checkout_url(); ?>" class="text-white text-base font-semibold leading-tight">
				<?php echo __( 'Checkout' ); ?>
			</a>
		</div>
	</div>
</div>
