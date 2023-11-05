<div id="auth" class="modal">
	<div class="w-full p-8 bg-white rounded-md flex-col justify-start items-start gap-5 inline-flex">
		<div id="login-area" class="w-full">
			<?php get_template_part( 'template-parts/auth', 'login' ); ?>
		</div>
		<div id="register-area" class="w-full hidden">
			<?php get_template_part( 'template-parts/auth', 'register' ); ?>
		</div>
		<div class="self-stretch justify-center items-center gap-4 inline-flex">
			<div class="grow shrink basis-0 h-[0px] border border-gray-200"></div>
			<div class="text-center text-zinc-900 text-sm font-normal leading-[18.90px]">
				<?php echo __( 'Or' ); ?>
			</div>
			<div class="grow shrink basis-0 h-[0px] border border-gray-200"></div>
		</div>
		<div class="self-stretch h-[50px] px-6 bg-indigo-800 rounded-md justify-center items-center gap-2 inline-flex">
			<div class="w-6 h-6 relative"></div>
			<div class="grow shrink basis-0 text-center text-white text-sm font-semibold leading-[16.80px]">
				Đăng nhập với Facebook
			</div>
		</div>
		<div
			class="self-stretch h-[50px] px-6 bg-white rounded-md border border-gray-200 justify-center items-center gap-2 inline-flex">
			<div class="w-6 h-6 relative"></div>
			<div class="grow shrink basis-0 text-center text-zinc-900 text-sm font-semibold leading-[16.80px]">
				Đăng nhập với Google
			</div>
		</div>
	</div>
</div>
