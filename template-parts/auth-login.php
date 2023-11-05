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
<form id="login" action="<?php echo admin_url( 'admin-ajax.php' ); ?>" method="post"
	class="flex-col justify-start items-start gap-5 inline-flex w-full">
	<div class="self-stretch text-zinc-900 text-[32px] font-semibold leading-[43.20px]">
		<?php echo __( 'Login' ); ?>
	</div>
	<input name="action" type="hidden" value="login">
	<?php foreach ( $args['error']->get_error_codes() as $code ) : ?>
		<div class="text-red-500 text-sm font-normal leading-[18.90px]">
			<?php echo $args['error']->get_error_message( $code ); ?>
		</div>
	<?php endforeach; ?>
	<div class="self-stretch flex-col justify-start items-start gap-2 flex">
		<div
			class="self-stretch h-12 px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
			<input type="email" name="user_login"
				class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]" placeholder="Email"
				value="<?php echo $user['user_login']; ?>" required />
		</div>
	</div>
	<div class="self-stretch flex-col justify-start items-start gap-2 flex">
		<div
			class="self-stretch h-12 px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
			<input type="password" name="user_password"
				class="grow shrink basis-0 text-neutral-500 text-sm font-normal leading-[18.90px]"
				placeholder="<?php echo __( 'Password' ); ?>" value="<?php echo $user['user_password']; ?>" required />
		</div>
	</div>
	<button type="submit"
		class="self-stretch h-[50px] px-6 bg-green-500 rounded-md justify-center items-center gap-2 inline-flex">
		<div class="text-white text-base font-semibold leading-tight">
			<?php echo __( 'Sign in' ); ?>
		</div>
	</button>
	<div class="self-stretch justify-between items-start inline-flex">
		<a href="#" class="auth-toggle w-full h-[30px] text-center text-blue-500 text-sm font-normal leading-[18.90px]">
			<?php echo __( 'Register' ); ?>
		</a>
		<div class="w-full h-[30px] text-center text-blue-500 text-sm font-normal leading-[18.90px]">
			<?php echo __( 'Forgot password?' ); ?>
		</div>
	</div>
</form>
