<?php

/** @var array{error:WP_Error} */
$args = wp_parse_args(
	$args,
	array(
		'error' => new WP_Error(),
	)
);
$user = get_user_postdata();

?>
<form id="register" action="<?php echo admin_url( 'admin-ajax.php' ); ?>" method="post"
	class="w-full flex-col justify-start items-start gap-5 inline-flex">
	<div class="self-stretch justify-start items-center gap-4 inline-flex">
		<a href="#"
			class="auth-toggle w-[50px] h-[50px] rounded-md border border-gray-200 justify-center items-center gap-2.5 flex">
			<svg xmlns="http://www.w3.org/2000/svg" width="10" height="19" viewBox="0 0 10 19" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M9.5545 0.566331C9.94502 0.956855 9.94502 1.59002 9.5545 1.98054L2.49731 9.03773C2.4039 9.13115 2.32821 9.2069 2.26378 9.27344C2.32821 9.33998 2.4039 9.41573 2.49731 9.50914L9.5545 16.5663C9.94502 16.9569 9.94502 17.59 9.5545 17.9805C9.16398 18.3711 8.53081 18.3711 8.14029 17.9805L1.0831 10.9234C1.07233 10.9126 1.06149 10.9018 1.05061 10.8909C0.857152 10.6976 0.64796 10.4886 0.49518 10.2883C0.316201 10.0537 0.123535 9.71807 0.123535 9.27344C0.123535 8.82881 0.316201 8.49315 0.49518 8.25857C0.64796 8.05832 0.857152 7.8493 1.05061 7.65599C1.06149 7.64511 1.07233 7.63429 1.0831 7.62352L8.14029 0.566331C8.53081 0.175806 9.16398 0.175806 9.5545 0.566331Z"
					fill="#2A353D" />
			</svg>
		</a>
		<div class="grow shrink basis-0 text-zinc-900 text-[32px] font-semibold leading-[43.20px]">
			<?php echo __( 'Register' ); ?>
		</div>
	</div>
	<input name="action" type="hidden" value="register">
	<?php foreach ( $args['error']->get_error_codes() as $code ) : ?>
		<div class="text-red-500 text-sm font-normal leading-[18.90px]">
			<?php echo $args['error']->get_error_message( $code ); ?>
		</div>
	<?php endforeach; ?>
	<div
		class="self-stretch h-[50px] px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
		<input class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]" name="user_name"
			placeholder="<?php echo __( 'Your name' ); ?>" value="<?php echo $user['user_name']; ?>" />
	</div>
	<div
		class="self-stretch h-[50px] px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
		<input class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]" type="tel"
			name="user_phone" placeholder="<?php echo __( 'Your phone' ); ?>"
			value="<?php echo $user['user_phone']; ?>" />
	</div>
	<div
		class="self-stretch h-[50px] px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
		<input class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]" name="user_login"
			type="email" placeholder="<?php echo __( 'Email' ); ?>" value="<?php echo $user['user_login']; ?>" />
	</div>
	<div
		class="self-stretch h-[50px] px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
		<input class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]" type="password"
			type="password" name="user_password" placeholder="<?php echo __( 'Password' ); ?>"
			value="<?php echo $user['user_password']; ?>" />
	</div>
	<div
		class="self-stretch h-[50px] px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
		<input class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]" type="password"
			type="password" name="user_repassword" placeholder="<?php echo __( 'Re-password' ); ?>" />
	</div>
	<button type="submit"
		class="self-stretch h-[50px] px-6 bg-green-500 rounded-md justify-center items-center gap-2 inline-flex">
		<div class="text-white text-base font-semibold leading-tight">
			<?php echo __( 'Register' ); ?>
		</div>
	</button>
</form>
