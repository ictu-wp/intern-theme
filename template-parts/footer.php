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
			<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			<div class="self-stretch opacity-50 justify-start items-start gap-2 inline-flex">
				<div class="pt-1 flex-col justify-start items-start gap-2.5 inline-flex"></div>
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
