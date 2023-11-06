<div class="w-full h-20 px-20 bg-white justify-between items-center inline-flex">
	<?php the_custom_logo(); ?>
	<?php get_search_form(); ?>
	<?php if ( false !== $phone = get_theme_mod( 'phone_number' ) ) : ?>
		<div class="header-phone justify-center items-center gap-2 flex">
			<div class="w-8 h-8 px-0.5 py-1 justify-center items-center flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="29" height="26" viewBox="0 0 29 26" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M24.0059 14.7509C23.8959 14.6892 23.7578 14.6572 23.6144 14.6688C23.535 14.6753 23.425 14.7094 22.754 15.0151C22.461 15.1485 22.2965 15.2253 22.1696 15.3173C22.0728 15.3874 22.0417 15.4365 22.0218 15.4948C22.0202 15.502 22.0153 15.5282 22.0115 15.5898C22.0051 15.6929 22.0047 15.8301 22.0047 16.0724V21.9272C22.0047 22.1696 22.0051 22.3068 22.0115 22.4099C22.0153 22.4715 22.0202 22.4976 22.0218 22.5048C22.0417 22.5632 22.0728 22.6123 22.1696 22.6824C22.2965 22.7744 22.461 22.8512 22.754 22.9846C23.425 23.2902 23.535 23.3244 23.6144 23.3308C23.7578 23.3424 23.8959 23.3105 24.0059 23.2488C24.0565 23.2204 24.1245 23.1635 24.5791 22.6114C24.7622 22.389 24.9329 22.1921 25.0976 22.0022C25.3432 21.7191 25.5754 21.4514 25.8155 21.1371C26.189 20.6484 26.4492 20.2042 26.5674 19.7716C26.706 19.2643 26.706 18.7354 26.5674 18.2281C26.4951 17.9633 26.3511 17.6699 26.0415 17.2305C25.725 16.7811 25.2816 16.2416 24.6432 15.4661C24.5518 15.3551 24.492 15.2779 24.4397 15.2105C24.3769 15.1296 24.3251 15.0628 24.2429 14.9686C24.1269 14.8357 24.0528 14.7772 24.0059 14.7509ZM22.0224 22.507C22.0224 22.507 22.0222 22.5064 22.0219 22.505L22.0224 22.507ZM22.0224 15.4927C22.0224 15.4927 22.0223 15.4935 22.0219 15.4947L22.0224 15.4927ZM23.4532 12.6754C23.983 12.6325 24.5194 12.7456 24.9848 13.0068C25.3193 13.1946 25.5691 13.4466 25.7495 13.6533C25.8492 13.7674 25.9839 13.9383 26.082 14.0627C26.1273 14.1201 26.1647 14.1676 26.1872 14.1949L25.4152 14.8305L26.1872 14.1949L26.2119 14.2249C26.8199 14.9633 27.3116 15.5606 27.6766 16.0787C28.0534 16.6137 28.3389 17.1234 28.4967 17.701C28.7296 18.5534 28.7296 19.4463 28.4967 20.2986C28.2793 21.0946 27.8415 21.7798 27.4046 22.3515C27.1402 22.6976 26.8195 23.0692 26.5369 23.3966C26.3824 23.5756 26.2393 23.7415 26.1231 23.8826L25.3511 23.247L26.1231 23.8826C26.0974 23.9138 26.0718 23.9451 26.0462 23.9763C25.7248 24.3684 25.4075 24.7556 24.9848 24.9928C24.5194 25.254 23.983 25.3672 23.4532 25.3243C22.9763 25.2857 22.5209 25.0774 22.0371 24.8559C21.9999 24.8389 21.9625 24.8218 21.925 24.8047C21.898 24.7924 21.8689 24.7794 21.838 24.7656C21.3631 24.5534 20.4677 24.1534 20.1267 23.144C20.0027 22.7768 20.0036 22.3843 20.0045 22.0191C20.0046 21.9883 20.0047 21.9576 20.0047 21.9272V16.0724C20.0047 16.042 20.0046 16.0114 20.0045 15.9806C20.0036 15.6153 20.0027 15.2228 20.1267 14.8557C20.4677 13.8463 21.3632 13.4462 21.838 13.234C21.8689 13.2203 21.898 13.2073 21.925 13.195C21.9625 13.1779 21.9999 13.1608 22.037 13.1438C22.5209 12.9223 22.9763 12.7139 23.4532 12.6754Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M2.56716 14.0991C3.02133 13.5402 3.81622 12.5619 5.2228 12.6756C5.69974 12.7142 6.15509 12.9226 6.63896 13.144C6.67614 13.161 6.71349 13.1781 6.75102 13.1952C6.78011 13.2085 6.80919 13.2217 6.83821 13.2348C7.20181 13.3997 7.55798 13.5612 7.84208 13.8082C8.67259 14.5305 8.67179 15.4838 8.67133 16.0351C8.67132 16.0478 8.67131 16.0604 8.67131 16.0727V21.9275C8.67131 21.9398 8.67132 21.9524 8.67133 21.9651C8.67179 22.5164 8.67259 23.4697 7.84208 24.1919C7.55798 24.439 7.20181 24.6005 6.83822 24.7654C6.80919 24.7785 6.78011 24.7917 6.75102 24.805C6.71348 24.8221 6.67614 24.8392 6.63896 24.8562C6.15508 25.0776 5.69974 25.286 5.2228 25.3246C3.82936 25.4373 3.04885 24.4868 2.59031 23.9284C2.5776 23.9129 2.56513 23.8977 2.55291 23.8829L3.32492 23.2473L2.55291 23.8829C2.43668 23.7417 2.29358 23.5759 2.13906 23.3968C1.85655 23.0695 1.53586 22.6978 1.27138 22.3517C0.834506 21.78 0.396734 21.0949 0.179274 20.2989C-0.053573 19.4466 -0.053573 18.5536 0.179274 17.7013C0.33707 17.1237 0.622573 16.614 0.999447 16.0789C1.36443 15.5608 1.85613 14.9636 2.46415 14.2251L2.48879 14.1952L3.26081 14.8308L2.48879 14.1952C2.51372 14.1649 2.53982 14.1328 2.56716 14.0991ZM4.65931 14.7916C4.48117 14.9249 4.31397 15.1249 4.03282 15.4664C3.39437 16.2419 2.95106 16.7813 2.63451 17.2307C2.32493 17.6702 2.18091 17.9636 2.10858 18.2284C1.96999 18.7356 1.96999 19.2645 2.10858 19.7718C2.22677 20.2045 2.48703 20.6486 2.86052 21.1374C3.10066 21.4516 3.33284 21.7193 3.57838 22.0025C3.74308 22.1924 3.91378 22.3892 4.09693 22.6117C4.35692 22.9275 4.51901 23.1093 4.68004 23.2238C4.79928 23.3086 4.89995 23.3442 5.06158 23.3311C5.14105 23.3247 5.25103 23.2905 5.92201 22.9849C6.43348 22.7519 6.49512 22.7128 6.52963 22.6828C6.58934 22.6309 6.61376 22.588 6.63369 22.5073C6.66307 22.3883 6.67131 22.2302 6.67131 21.9275V16.0727C6.67131 15.77 6.66307 15.6119 6.63369 15.4929C6.61376 15.4122 6.58934 15.3693 6.52963 15.3174C6.49512 15.2874 6.43348 15.2483 5.92201 15.0153C5.25103 14.7097 5.14105 14.6755 5.06158 14.6691C4.89631 14.6557 4.79086 14.6932 4.65931 14.7916Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M14.338 2.6665C9.7356 2.6665 6.00464 6.39746 6.00464 10.9998V14.6665H4.00464V10.9998C4.00464 5.29289 8.63103 0.666504 14.338 0.666504C20.0449 0.666504 24.6713 5.29289 24.6713 10.9998V14.6665H22.6713V10.9998C22.6713 6.39746 18.9403 2.6665 14.338 2.6665Z"
						fill="#2A353D" />
				</svg>
			</div>
			<div class="flex-col justify-center items-start gap-0.5 inline-flex">
				<div class="text-zinc-900 text-sm font-semibold leading-none">
					<?php echo $phone; ?>
				</div>
				<div class="text-neutral-500 text-xs font-normal leading-none">
					<?php echo __( 'Order support' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="justify-center items-center gap-2 flex">
		<div class="w-8 h-8 px-0.5 pt-0.5 pb-px justify-center items-center flex">
			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M10.8992 8.6665H17.7857C19.3664 8.66648 20.6465 8.66646 21.6699 8.79511C22.7363 8.92914 23.6439 9.2146 24.417 9.87014C25.1887 10.5245 25.6234 11.3756 25.9396 12.4102C26.2439 13.4059 26.4686 14.6802 26.7468 16.2579L27.2589 19.1623C27.6454 21.3543 27.9541 23.1049 28.0024 24.4898C28.0521 25.9177 27.8355 27.1422 26.9994 28.1537C26.1611 29.1676 25.0026 29.6019 23.5994 29.8042C22.242 29.9999 20.4839 29.9999 18.2876 29.9998H10.3973C8.20095 29.9999 6.44284 29.9999 5.08551 29.8042C3.68228 29.6019 2.52373 29.1676 1.68548 28.1537C0.849321 27.1422 0.632719 25.9177 0.682492 24.4898C0.730772 23.1049 1.03946 21.3543 1.42599 19.1623L1.93811 16.2579C2.21626 14.6802 2.44093 13.4059 2.74525 12.4102C3.06149 11.3756 3.49615 10.5245 4.26789 9.87014C5.04099 9.2146 5.9486 8.92914 7.01493 8.79511C8.03841 8.66646 9.31849 8.66648 10.8992 8.6665ZM7.26436 10.7795C6.40868 10.887 5.92791 11.0848 5.56135 11.3956C5.19343 11.7075 4.91436 12.1558 4.65791 12.9948C4.39364 13.8594 4.18858 15.0123 3.89641 16.6693L3.40943 19.4312C3.00593 21.7196 2.72409 23.3316 2.68128 24.5595C2.63939 25.7611 2.83681 26.4074 3.22693 26.8793C3.61495 27.3487 4.20223 27.6561 5.37093 27.8247C6.56882 27.9974 8.18212 27.9998 10.4786 27.9998H18.2063C20.5027 27.9998 22.116 27.9974 23.3139 27.8247C24.4826 27.6561 25.0699 27.3487 25.4579 26.8793C25.8481 26.4074 26.0455 25.7611 26.0036 24.5595C25.9608 23.3316 25.6789 21.7196 25.2754 19.4312L24.7885 16.6693C24.4963 15.0123 24.2912 13.8594 24.027 12.9948C23.7705 12.1558 23.4914 11.7075 23.1235 11.3956C22.7569 11.0848 22.2762 10.887 21.4205 10.7795C20.5363 10.6683 19.3822 10.6665 17.7193 10.6665H10.9656C9.30266 10.6665 8.1486 10.6683 7.26436 10.7795Z"
					fill="#1A1A1A" />
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M14.3425 2.6665C11.848 2.6665 9.76995 4.57859 9.5628 7.06446L9.33904 9.74955L7.34595 9.58346L7.5697 6.89837C7.86324 3.37592 10.8078 0.666504 14.3425 0.666504C17.8772 0.666504 20.8217 3.37592 21.1153 6.89837L21.339 9.58346L19.3459 9.74955L19.1222 7.06446C18.915 4.57859 16.837 2.6665 14.3425 2.6665Z"
					fill="#1A1A1A" />
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M14.3425 16C15.996 16 17.2279 14.8661 17.3467 13.575C17.3973 13.0251 17.8841 12.6203 18.4341 12.6709C18.9841 12.7215 19.3889 13.2083 19.3383 13.7583C19.1103 16.2355 16.864 18 14.3425 18C11.8209 18 9.57461 16.2355 9.34667 13.7583C9.29607 13.2083 9.70088 12.7215 10.2508 12.6709C10.8008 12.6203 11.2877 13.0251 11.3383 13.575C11.457 14.8661 12.6889 16 14.3425 16Z"
					fill="#1A1A1A" />
			</svg>
		</div>
		<div class="flex-col justify-center items-start gap-0.5 inline-flex">
			<div class="text-zinc-900 text-sm font-semibold leading-none">
				<?php echo __( 'Cart' ); ?>
			</div>
			<div class="text-neutral-500 text-xs font-normal leading-none">
				<a id="cart-count" href="#mini-cart" rel="modal:open">
					<?php echo WC()->cart->get_cart_contents_count(); ?>
					<?php echo __( 'items' ); ?>
				</a>
			</div>
		</div>
	</div>
	<?php
	if ( is_user_logged_in() ) :
		$user_id = get_current_user_id();
		?>
		<div class="user-dropdown h-10 justify-center items-center gap-2 flex relative" tabindex="-1">
			<img class="w-10 h-10 rounded-full border border-gray-200" src="<?php echo get_avatar_url( $user_id ); ?>" />
			<div class="flex-col justify-center items-start gap-0.5 inline-flex">
				<div class="text-zinc-900 text-sm font-semibold leading-none">
					<?php echo get_userdata( $user_id )->display_name; ?>
				</div>
				<?php if ( false != $phone = get_user_meta( $user_id, 'phone', true ) ) : ?>
					<div class="text-neutral-500 text-xs font-normal leading-none">
						<?php echo $phone; ?>
					</div>
				<?php endif; ?>
			</div>
			<div
				class="dropdown hidden top-14 -left-8 absolute z-20 py-2 bg-white w-fit rounded-md shadow border border-gray-200 ">
				<?php get_template_part( 'template-parts/user-dropdown' ); ?>
			</div>
		</div>
		<div id="mini-cart" class="modal">
			<?php get_template_part( 'template-parts/mini-cart' ); ?>
		</div>
	<?php else : ?>
		<div class="w-48 h-9 justify-center items-center gap-2 inline-flex">
			<div class="w-8 h-8 px-0.5 py-0.5 justify-center items-center flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M20.0657 20.7517C15.9575 18.3054 10.7373 18.3054 6.62912 20.7517C6.40525 20.885 6.15994 21.0241 5.90298 21.1699C4.95284 21.7089 3.84348 22.3383 3.07002 23.0954C2.58986 23.5654 2.38517 23.9531 2.35243 24.2527C2.32643 24.4905 2.38656 24.8826 2.9874 25.4551C4.36853 26.7709 5.77196 27.5837 7.46856 27.5837H19.2262C20.9228 27.5837 22.3263 26.7709 23.7074 25.4551C24.3082 24.8826 24.3684 24.4905 24.3424 24.2527C24.3096 23.9531 24.1049 23.5654 23.6248 23.0954C22.8513 22.3383 21.742 21.7089 20.7918 21.1699C20.5349 21.0241 20.2896 20.885 20.0657 20.7517ZM21.0889 19.0332L20.5773 19.8924L21.0889 19.0332C21.244 19.1256 21.4356 19.2336 21.6525 19.356C22.6029 19.8922 24.0396 20.7027 25.0238 21.6661C25.6393 22.2686 26.2242 23.0626 26.3305 24.0353C26.4436 25.0698 25.9923 26.0406 25.087 26.9031C23.525 28.3912 21.6507 29.5837 19.2262 29.5837H7.46856C5.04415 29.5837 3.16977 28.3912 1.60784 26.9031C0.702481 26.0406 0.251197 25.0698 0.364272 24.0353C0.4706 23.0626 1.05547 22.2686 1.67103 21.6661C2.65525 20.7027 4.09193 19.8922 5.04235 19.356C5.25924 19.2336 5.4508 19.1256 5.60589 19.0332C10.3446 16.2116 16.3502 16.2116 21.0889 19.0332Z"
						fill="#1A1A1A" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M13.3472 2.91699C10.5857 2.91699 8.34717 5.15557 8.34717 7.91699C8.34717 10.6784 10.5857 12.917 13.3472 12.917C16.1086 12.917 18.3472 10.6784 18.3472 7.91699C18.3472 5.15557 16.1086 2.91699 13.3472 2.91699ZM6.34717 7.91699C6.34717 4.051 9.48117 0.916992 13.3472 0.916992C17.2132 0.916992 20.3472 4.051 20.3472 7.91699C20.3472 11.783 17.2132 14.917 13.3472 14.917C9.48117 14.917 6.34717 11.783 6.34717 7.91699Z"
						fill="#2A353D" />
				</svg>
			</div>
			<a href="#auth" rel="modal:open" class="flex-col justify-center items-start gap-0.5 inline-flex">
				<div class="text-zinc-900 text-sm font-semibold leading-none">
					<?php echo __( 'Account' ); ?>
				</div>
				<div class="text-neutral-500 text-xs font-normal leading-none">
					<?php echo __( 'Login/Register' ); ?>
				</div>
			</a>
		</div>
		<?php get_template_part( 'template-parts/auth' ); ?>
	<?php endif; ?>
</div>
