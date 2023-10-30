<div class="w-full h-full bg-black flex-col justify-start items-center gap-8 inline-flex px-[80px] py-6">
	<div class="self-stretch justify-start items-start gap-48 inline-flex">
		<div id="footer_logo">
			<?php if ( false !== $logo = get_theme_mod( 'footer_logo' ) ) : ?>
				<img class="w-60 h-12" src="<?php echo $logo; ?>" />
			<?php endif; ?>
		</div>
		<div class="h-10 justify-between items-center flex">
			<?php dynamic_sidebar( 'footer-columns-1' ); ?>
		</div>
	</div>
	<div class="self-stretch justify-between items-start inline-flex">
		<div class="w-96 flex-col justify-center items-start gap-6 inline-flex text-white">
			<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			<?php endif; ?>
			<div class="self-stretch opacity-50 justify-start items-start gap-2 inline-flex">
				<div class="pt-1 flex-col justify-start items-start gap-2.5 inline-flex">
					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14" fill="none">
						<path
							d="M14.3354 0.447144H2.08545C1.05157 0.447144 0.210449 1.28827 0.210449 2.32214V3.86886L7.09142 8.98702C7.42607 9.23592 7.81826 9.36039 8.21045 9.36039C8.60264 9.36039 8.99482 9.23596 9.32948 8.98702L16.2104 3.86886V2.32214C16.2104 1.28827 15.3693 0.447144 14.3354 0.447144ZM14.9604 3.24077L8.58348 7.98402C8.36036 8.14999 8.06054 8.14999 7.83745 7.98402L1.46045 3.24077V2.32214C1.46045 1.97752 1.74082 1.69714 2.08545 1.69714H14.3354C14.6801 1.69714 14.9604 1.97752 14.9604 2.32214V3.24077ZM14.9604 6.35649L16.2104 5.42674V11.5721C16.2104 12.606 15.3693 13.4471 14.3354 13.4471H2.08545C1.05157 13.4471 0.210449 12.606 0.210449 11.5721V5.42674L1.46045 6.35649V11.5721C1.46045 11.9168 1.74082 12.1971 2.08545 12.1971H14.3354C14.6801 12.1971 14.9604 11.9168 14.9604 11.5721V6.35649Z"
							fill="#C9C9C9" />
					</svg>
				</div>
				<div class="email grow shrink basis-0 text-stone-300 text-sm font-normal underline leading-tight">
					<?php if ( false !== $email = get_theme_mod( 'email' ) ) : ?>
						<a href="mailto:<?php echo $email; ?>">
							<?php echo $email; ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php dynamic_sidebar( 'footer-columns-2' ); ?>
	</div>
	<div class="self-stretch justify-start items-center gap-60 inline-flex">
		<div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex"></div>
		<div class="text-neutral-500 text-sm font-normal leading-tight copyright">
			Copyright ©
			<?php echo date( 'Y' ); ?>
			<?php echo get_theme_mod( 'copyright' ) ?: 'gingdev'; ?>
		</div>
	</div>
</div>
