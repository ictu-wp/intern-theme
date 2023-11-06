<div id="auth" class="modal">
	<div class="flex w-14 h-14 p-4 md:p-8 justify-center items-center gap-10 absolute right-0">
		<a href="#" rel="modal:close">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M15.3775 0.743107C15.6704 1.036 15.6704 1.51087 15.3775 1.80377L1.3775 15.8038C1.0846 16.0967 0.609731 16.0967 0.316838 15.8038C0.0239447 15.5109 0.0239447 15.036 0.316838 14.7431L14.3168 0.743107C14.6097 0.450214 15.0846 0.450214 15.3775 0.743107Z"
					fill="#767676" />
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M0.316838 0.743107C0.609731 0.450214 1.0846 0.450214 1.3775 0.743107L15.3775 14.7431C15.6704 15.036 15.6704 15.5109 15.3775 15.8038C15.0846 16.0967 14.6097 16.0967 14.3168 15.8038L0.316838 1.80377C0.0239447 1.51087 0.0239447 1.036 0.316838 0.743107Z"
					fill="#767676" />
			</svg>
		</a>
	</div>
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
