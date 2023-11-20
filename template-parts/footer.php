<div class="w-full h-full bg-black flex-col justify-start items-center gap-8 inline-flex px-5 md:px-10 lg:px-20 py-6">
	<div class="self-stretch justify-start items-start inline-flex flex-wrap">
		<div id="footer_logo" class="grow">
			<?php if ( false !== $logo = get_theme_mod( 'footer_logo' ) ) : ?>
				<img class="w-fit md:w-60 h-auto" src="<?php echo $logo; ?>" />
			<?php endif; ?>
		</div>
		<div class="justify-between items-center flex gap-8 flex-wrap md:flex-nowrap">
			<div class="justify-start items-center gap-3 flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="29" viewBox="0 0 35 29" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M25.4008 22.0266C24.3077 22.0266 23.4216 22.9127 23.4216 24.0058C23.4216 25.0988 24.3077 25.9849 25.4008 25.9849C26.4939 25.9849 27.38 25.0988 27.38 24.0058C27.38 22.9127 26.4939 22.0266 25.4008 22.0266ZM21.0466 24.0058C21.0466 21.601 22.9961 19.6516 25.4008 19.6516C27.8055 19.6516 29.755 21.601 29.755 24.0058C29.755 26.4105 27.8055 28.3599 25.4008 28.3599C22.9961 28.3599 21.0466 26.4105 21.0466 24.0058Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M9.56755 22.0266C8.47448 22.0266 7.58838 22.9127 7.58838 24.0058C7.58838 25.0988 8.47448 25.9849 9.56755 25.9849C10.6606 25.9849 11.5467 25.0988 11.5467 24.0058C11.5467 22.9127 10.6606 22.0266 9.56755 22.0266ZM5.21338 24.0058C5.21338 21.601 7.16281 19.6516 9.56755 19.6516C11.9723 19.6516 13.9217 21.601 13.9217 24.0058C13.9217 26.4105 11.9723 28.3599 9.56755 28.3599C7.16281 28.3599 5.21338 26.4105 5.21338 24.0058Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M17.7934 3.20096C17.3019 3.04125 16.6532 3.0266 14.7925 3.0266H1.65088C0.995041 3.0266 0.463379 2.49494 0.463379 1.8391C0.463379 1.18326 0.995041 0.651602 1.65088 0.651602H14.7925C14.867 0.651602 14.9403 0.651573 15.0126 0.651544C16.5675 0.650931 17.6296 0.650513 18.5273 0.942204C20.3349 1.52953 21.7521 2.94671 22.3394 4.75431C22.6311 5.65204 22.6307 6.71419 22.6301 8.269C22.6301 8.34129 22.63 8.41465 22.63 8.4891C22.63 9.76034 22.6447 10.1143 22.7269 10.3674C22.9227 10.9699 23.3951 11.4423 23.9976 11.6381C24.2507 11.7203 24.6046 11.7349 25.8759 11.7349H33.3175C33.9734 11.7349 34.505 12.2666 34.505 12.9224V16.1741C34.5051 17.9678 34.5051 19.4335 34.3495 20.5907C34.1869 21.8003 33.835 22.849 32.9979 23.6861C31.8882 24.7958 30.3967 25.0599 28.6267 25.1482C27.9716 25.1808 27.4142 24.6763 27.3815 24.0213C27.3489 23.3662 27.8534 22.8088 28.5084 22.7761C30.2113 22.6912 30.8864 22.4388 31.3185 22.0067C31.6408 21.6844 31.8685 21.2205 31.9957 20.2742C32.1275 19.2938 32.13 17.9886 32.13 16.0891V14.1099H25.8759C25.8131 14.1099 25.7512 14.11 25.6902 14.11C24.6946 14.1108 23.9242 14.1114 23.2637 13.8968C21.9381 13.4661 20.8989 12.4269 20.4682 11.1013C20.2536 10.4408 20.2542 9.67038 20.2549 8.67481C20.255 8.61376 20.255 8.55187 20.255 8.4891C20.255 6.62846 20.2404 5.97977 20.0807 5.48823C19.7283 4.40367 18.878 3.55336 17.7934 3.20096ZM1.63538 18.0697C2.29041 18.0371 2.84788 18.5416 2.88053 19.1966C2.96541 20.8996 3.21788 21.5746 3.64994 22.0067C4.082 22.4388 4.75708 22.6912 6.46 22.7761C7.11502 22.8088 7.61956 23.3662 7.58691 24.0213C7.55426 24.6763 6.99678 25.1808 6.34176 25.1482C4.57172 25.0599 3.08025 24.7958 1.97056 23.6861C0.860864 22.5764 0.596704 21.0849 0.508473 19.3149C0.475822 18.6599 0.980356 18.1024 1.63538 18.0697ZM11.5467 24.0058C11.5467 23.3499 12.0784 22.8183 12.7342 22.8183H22.2342C22.89 22.8183 23.4217 23.3499 23.4217 24.0058C23.4217 24.6616 22.89 25.1933 22.2342 25.1933H12.7342C12.0784 25.1933 11.5467 24.6616 11.5467 24.0058Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.463379 8.17249C0.463379 7.51665 0.995041 6.98499 1.65088 6.98499H11.1509C11.8067 6.98499 12.3384 7.51665 12.3384 8.17249C12.3384 8.82832 11.8067 9.35999 11.1509 9.35999H1.65088C0.995041 9.35999 0.463379 8.82832 0.463379 8.17249Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.463379 12.9225C0.463379 12.2666 0.995041 11.735 1.65088 11.735H7.98421C8.64005 11.735 9.17171 12.2666 9.17171 12.9225C9.17171 13.5783 8.64005 14.11 7.98421 14.11H1.65088C0.995041 14.11 0.463379 13.5783 0.463379 12.9225Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M26.9165 6.25724C26.2965 6.19463 25.5021 6.19324 24.3262 6.19324H21.4426C20.7868 6.19324 20.2551 5.66158 20.2551 5.00574C20.2551 4.3499 20.7868 3.81824 21.4426 3.81824L24.3851 3.81824C25.4872 3.81821 26.4018 3.81819 27.1551 3.89425C27.9483 3.97436 28.6587 4.1458 29.3292 4.54629C29.9997 4.94679 30.4875 5.49097 30.9341 6.15145C31.3582 6.77858 31.7918 7.58392 32.3143 8.55427L34.3632 12.3594C34.6741 12.9369 34.4581 13.657 33.8806 13.968C33.3032 14.2789 32.583 14.0628 32.2721 13.4854L30.2511 9.73211C29.6936 8.69678 29.3157 7.998 28.9667 7.48183C28.6327 6.98787 28.3785 6.74481 28.1114 6.58527C27.8442 6.42572 27.5097 6.31714 26.9165 6.25724Z"
						fill="white" />
				</svg>
				<div class="flex-col justify-center items-start gap-1 inline-flex">
					<div class="text-white text-base font-semibold leading-tight">
						<?php echo __( 'Free ship' ); ?>
					</div>
					<div class="text-neutral-500 text-sm font-normal leading-tight">
						<?php echo __( 'For orders from 500 USD' ); ?>
					</div>
				</div>
			</div>
			<div class="justify-start items-center gap-3 flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
					<path
						d="M28.8395 2.19952C28.2889 2.19952 27.8424 2.64597 27.8424 3.19683V3.99598C24.8845 1.71852 21.2793 0.484863 17.4843 0.484863C12.9381 0.484863 8.66408 2.2551 5.4493 5.46936C3.15918 7.75929 1.57738 10.6328 0.874525 13.7793C0.191153 16.8406 0.362061 20.0257 1.36933 22.9902C1.51036 23.4054 1.89815 23.667 2.31347 23.667C2.41971 23.667 2.52802 23.6498 2.63425 23.6137C3.15581 23.4366 3.43477 22.8702 3.25788 22.3486C2.36828 19.731 2.21737 16.918 2.82126 14.214C3.44126 11.4377 4.83761 8.90152 6.85941 6.87962C9.69758 4.04195 13.4708 2.47923 17.4843 2.47923C20.8588 2.47923 24.0634 3.58407 26.685 5.62259L25.7767 5.81271C25.2375 5.92542 24.892 6.45395 25.0047 6.99286C25.1032 7.46295 25.5177 7.78604 25.9798 7.78604L28.9792 7.18012C29.4761 7.07519 29.8369 6.63056 29.8369 6.12281V3.19683C29.8369 2.64597 29.3904 2.19952 28.8395 2.19952Z"
						fill="white" />
					<path
						d="M33.5991 12.0166C33.4217 11.4951 32.8557 11.2161 32.3339 11.3932C31.8124 11.5704 31.5334 12.1366 31.7106 12.6581C32.5999 15.276 32.7508 18.0888 32.1472 20.7929C31.5269 23.5691 30.1306 26.1055 28.1088 28.1271C25.2701 30.9655 21.4969 32.5298 17.4842 32.5322H17.4756C14.126 32.5322 10.9445 31.4432 8.33489 29.4322L9.19489 29.2753C9.7367 29.1764 10.0957 28.6569 9.99696 28.1151C9.89774 27.5734 9.37774 27.2144 8.83671 27.3131L6.02972 27.8261C5.52972 27.9172 5.15726 28.3523 5.14401 28.8611L5.06895 31.786C5.05466 32.3366 5.48972 32.7942 6.04011 32.8085C6.04894 32.8088 6.05751 32.8088 6.06634 32.8088C6.60504 32.8088 7.04867 32.3789 7.0627 31.8372L7.08451 30.9868C10.0473 33.2827 13.6652 34.5265 17.4756 34.5265H17.4852C22.0301 34.5239 26.3039 32.7521 29.5189 29.5374C31.809 27.2474 33.3911 24.3739 34.0937 21.2274C34.7773 18.1662 34.6061 14.9812 33.5991 12.0166Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M22.8339 11.4486L12.1373 11.4486C11.7456 11.4486 11.4281 11.7662 11.4281 12.1578L11.4281 22.8536C11.4281 23.2453 11.7456 23.5628 12.1373 23.5628L22.8339 23.5628C23.2257 23.5628 23.5432 23.2453 23.5432 22.8536L23.5432 12.1579C23.5432 11.7662 23.2256 11.4486 22.8339 11.4486ZM12.1373 9.32104C10.5705 9.32104 9.30029 10.5911 9.30029 12.1578L9.30029 22.8536C9.30029 24.4203 10.5705 25.6904 12.1373 25.6904L22.8339 25.6904C24.4008 25.6904 25.671 24.4203 25.671 22.8536L25.671 12.1579C25.671 10.5911 24.4008 9.32104 22.8339 9.32104L12.1373 9.32104Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M17.6376 9.95874C18.2252 9.95874 18.7015 10.435 18.7015 11.0225V15.0072C18.7015 15.5947 18.2252 16.071 17.6376 16.071C17.05 16.071 16.5737 15.5947 16.5737 15.0072V11.0225C16.5737 10.435 17.05 9.95874 17.6376 9.95874Z"
						fill="white" />
				</svg>
				<div class="flex-col justify-center items-start gap-1 inline-flex">
					<div class="text-white text-base font-semibold leading-tight">
						<?php echo __( 'Easy refund' ); ?>
					</div>
					<div class="text-neutral-500 text-sm font-normal leading-tight">
						<?php echo __( 'In 7 day per week' ); ?>
					</div>
				</div>
			</div>
			<div class="justify-start items-center gap-3 flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
					<path
						d="M34.4996 15.5412C34.4706 15.2655 34.3288 15.0142 34.1079 14.8468L31.4113 12.8042L32.3924 9.56696C32.4728 9.30167 32.4398 9.01498 32.3013 8.77495C32.1627 8.53493 31.9309 8.363 31.661 8.29997L28.3667 7.53077L27.9461 4.17434C27.9116 3.89935 27.7649 3.65082 27.5407 3.48792C27.3165 3.32496 27.0349 3.26226 26.7627 3.31439L23.4404 3.95161L21.6909 1.0564C21.5475 0.81924 21.3123 0.651891 21.0413 0.594313C20.7701 0.536668 20.4872 0.593847 20.2599 0.752221L17.4842 2.68568L14.7084 0.752221C14.4809 0.593847 14.1981 0.536668 13.927 0.594313C13.6558 0.651957 13.4207 0.819174 13.2774 1.05647L11.528 3.95174L8.20576 3.31452C7.93363 3.26246 7.65192 3.32509 7.42766 3.48806C7.20346 3.65102 7.05665 3.89941 7.02221 4.17447L6.60168 7.5309L3.30735 8.3001C3.03741 8.36313 2.8057 8.53507 2.66707 8.77509C2.52845 9.01517 2.49547 9.3018 2.57585 9.56702L3.55681 12.8044L0.860537 14.8469C0.639599 15.0142 0.497847 15.2655 0.468858 15.5412C0.439936 15.8169 0.52637 16.0922 0.707682 16.3018L2.92046 18.8603L1.28792 21.823C1.15421 22.0658 1.12689 22.3531 1.21252 22.6167C1.29816 22.8802 1.48911 23.0966 1.74004 23.2143L4.80219 24.6515L4.5157 28.0222C4.49223 28.2984 4.58411 28.572 4.76961 28.778C4.95505 28.9839 5.21754 29.1039 5.49459 29.1095L8.87682 29.1769L9.9859 32.3726C10.0768 32.6344 10.272 32.847 10.5252 32.9597C10.7784 33.0724 11.067 33.0753 11.3224 32.9677L14.4396 31.6537L16.7528 34.122C16.9423 34.3242 17.2071 34.439 17.4843 34.439C17.7615 34.439 18.0263 34.3242 18.2158 34.122L20.529 31.6537L23.6461 32.9677C23.9014 33.0752 24.19 33.0724 24.4432 32.9597C24.6965 32.8469 24.8917 32.6345 24.9825 32.3726L26.0918 29.1769L29.4738 29.1095C29.751 29.104 30.0134 28.9839 30.1989 28.778C30.3843 28.572 30.4763 28.2985 30.4528 28.0222L30.1663 24.6515L33.2287 23.2143C33.4795 23.0966 33.6705 22.8802 33.7562 22.6166C33.8418 22.3531 33.8145 22.0658 33.6807 21.823L32.048 18.8603L34.2609 16.3018C34.4421 16.0922 34.5285 15.8169 34.4996 15.5412ZM29.9547 19.2165L31.4082 21.8539L28.6821 23.1332C28.3022 23.3116 28.0736 23.7076 28.1092 24.1257L28.3642 27.1261L25.3535 27.1862C24.934 27.1946 24.564 27.4633 24.4264 27.8597L23.4389 30.7046L20.6642 29.5348C20.2775 29.3718 19.8302 29.4668 19.5433 29.773L17.4842 31.9702L15.4251 29.773C15.2315 29.5664 14.965 29.4559 14.6933 29.4559C14.5623 29.4559 14.43 29.4816 14.3041 29.5347L11.5292 30.7044L10.5419 27.8596C10.4042 27.4632 10.0344 27.1944 9.61477 27.1861L6.60387 27.126L6.85892 24.1256C6.89449 23.7075 6.66584 23.3114 6.286 23.1331L3.56014 21.8537L5.01342 19.2162C5.21594 18.8487 5.16807 18.394 4.89368 18.0766L2.92385 15.799L5.32419 13.9808C5.65868 13.7274 5.79997 13.2926 5.6783 12.8909L4.80505 10.009L7.73762 9.32434C8.14625 9.22893 8.45216 8.88905 8.50442 8.4727L8.87875 5.48488L11.8362 6.05209C12.2483 6.13121 12.666 5.94511 12.883 5.58594L14.4403 3.00868L16.9113 4.72978C17.2557 4.9696 17.713 4.9696 18.0572 4.72978L20.5281 3.00868L22.0855 5.58601C22.3025 5.94511 22.72 6.13121 23.1324 6.05209L26.0898 5.48488L26.4641 8.4727C26.5163 8.88905 26.8223 9.22893 27.2309 9.32434L30.1635 10.009L29.2901 12.8909C29.1684 13.2925 29.3097 13.7274 29.6442 13.9808L32.0446 15.799L30.0747 18.0766C29.8 18.3941 29.7521 18.849 29.9547 19.2165Z"
						fill="white" />
					<path
						d="M17.4841 7.91284C12.1946 7.91284 7.89136 12.2161 7.89136 17.5055C7.89136 22.7948 12.1947 27.0982 17.4841 27.0982C22.7734 27.0982 27.0768 22.7949 27.0768 17.5055C27.0768 12.2162 22.7735 7.91284 17.4841 7.91284ZM17.4841 25.0933C13.3002 25.0933 9.89636 21.6894 9.89636 17.5055C9.89636 13.3217 13.3002 9.91784 17.4841 9.91784C21.6679 9.91784 25.0718 13.3217 25.0718 17.5055C25.0718 21.6894 21.6679 25.0933 17.4841 25.0933Z"
						fill="white" />
					<path
						d="M21.4146 14.6493C21.0229 14.2577 20.3882 14.2577 19.9967 14.6493L16.4105 18.2354L14.9718 16.7967C14.5803 16.4052 13.9455 16.4053 13.554 16.7967C13.1626 17.1882 13.1626 17.823 13.5541 18.2145L15.7017 20.362C15.8975 20.5577 16.154 20.6556 16.4106 20.6556C16.6671 20.6556 16.9237 20.5577 17.1194 20.362L21.4145 16.067C21.806 15.6756 21.806 15.0407 21.4146 14.6493Z"
						fill="white" />
				</svg>
				<div class="flex-col justify-center items-start gap-1 inline-flex">
					<div class="text-white text-base font-semibold leading-tight">
						<?php echo __( 'Quality assurance' ); ?>
					</div>
					<div class="text-neutral-500 text-sm font-normal leading-tight">
						<?php echo __( 'Pioneering technology' ); ?>
					</div>
				</div>
			</div>
			<?php dynamic_sidebar( 'footer-columns-1' ); ?>
		</div>
	</div>
	<div class="border-t border-neutral-200 w-full opacity-20"></div>
	<div class="self-stretch justify-between items-start inline-flex flex-wrap gap-6 md:gap-0">
		<div class="w-full md:w-96 flex-col justify-center items-start gap-6 inline-flex text-white">
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
	<div class="border-t border-neutral-200 w-full opacity-20"></div>
	<div class="self-stretch justify-start items-center inline-flex flex-wrap">
		<div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex"></div>
		<div class="w-fit text-neutral-500 text-sm font-normal leading-tight copyright">
			Copyright ©
			<?php echo date( 'Y' ); ?>
			<?php echo get_theme_mod( 'copyright' ) ?: 'gingdev'; ?>
		</div>
	</div>
</div>
