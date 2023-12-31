<?php

class Ging_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		static $is_first = true;

		if ( $is_first ) {
			ob_start();
			?>
			<?php echo get_search_form( array( 'class' => 'w-full flex md:hidden mb-4' ) ); ?>
			<li class="pc-categories">
				<svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.513916 1.3335C0.513916 1.05735 0.737774 0.833496 1.01392 0.833496L11.6806 0.833497C11.9567 0.833497 12.1806 1.05735 12.1806 1.3335C12.1806 1.60964 11.9567 1.8335 11.6806 1.8335L1.01392 1.8335C0.737774 1.8335 0.513916 1.60964 0.513916 1.3335Z"
						fill="#1A1A1A" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.513916 6C0.513916 5.72386 0.737774 5.5 1.01392 5.5L11.6806 5.5C11.9567 5.5 12.1806 5.72386 12.1806 6C12.1806 6.27614 11.9567 6.5 11.6806 6.5L1.01392 6.5C0.737774 6.5 0.513916 6.27614 0.513916 6Z"
						fill="#1A1A1A" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.513916 10.667C0.513916 10.3908 0.737774 10.167 1.01392 10.167L11.6806 10.167C11.9567 10.167 12.1806 10.3909 12.1806 10.667C12.1806 10.9431 11.9567 11.167 11.6806 11.167L1.01392 11.167C0.737774 11.167 0.513916 10.9431 0.513916 10.667Z"
						fill="#1A1A1A" />
				</svg>
				<div class="categories-items" tabindex="-1">
					<?php echo __( 'All categories' ); ?>
					<div>
						<?php categories_items( 12 ); ?>
						<div class="w-full h-11 flex-col justify-center items-center gap-2.5 inline-flex mb-4">
							<div
								class="h-11 px-6 rounded-md border border-green-500 justify-center items-center gap-2.5 inline-flex">
								<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>"
									class="text-center text-green-500 text-base font-semibold leading-tight">
									<?php echo __( 'See all' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M4.55054 9.63965C4.55054 9.08736 4.99665 8.63965 5.54696 8.63965H5.55412C6.10442 8.63965 6.55054 9.08736 6.55054 9.63965C6.55054 10.1919 6.10442 10.6396 5.55412 10.6396H5.54696C4.99665 10.6396 4.55054 10.1919 4.55054 9.63965Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M8.41821 9.63965C8.41821 9.08736 8.86433 8.63965 9.41463 8.63965H9.42179C9.9721 8.63965 10.4182 9.08736 10.4182 9.63965C10.4182 10.1919 9.9721 10.6396 9.42179 10.6396H9.41463C8.86433 10.6396 8.41821 10.1919 8.41821 9.63965Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M0.687988 9.63965C0.687988 9.08736 1.1341 8.63965 1.68441 8.63965H1.69157C2.24188 8.63965 2.68799 9.08736 2.68799 9.63965C2.68799 10.1919 2.24188 10.6396 1.69157 10.6396H1.68441C1.1341 10.6396 0.687988 10.1919 0.687988 9.63965Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M4.55054 5.77441C4.55054 5.22213 4.99665 4.77441 5.54696 4.77441H5.55412C6.10442 4.77441 6.55054 5.22213 6.55054 5.77441C6.55054 6.3267 6.10442 6.77441 5.55412 6.77441H5.54696C4.99665 6.77441 4.55054 6.3267 4.55054 5.77441Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M8.41821 5.77441C8.41821 5.22213 8.86433 4.77441 9.41463 4.77441H9.42179C9.9721 4.77441 10.4182 5.22213 10.4182 5.77441C10.4182 6.3267 9.9721 6.77441 9.42179 6.77441H9.41463C8.86433 6.77441 8.41821 6.3267 8.41821 5.77441Z"
						fill="#2A353D" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M8.41821 1.90918C8.41821 1.35689 8.86433 0.90918 9.41463 0.90918H9.42179C9.9721 0.90918 10.4182 1.35689 10.4182 1.90918C10.4182 2.46146 9.9721 2.90918 9.42179 2.90918H9.41463C8.86433 2.90918 8.41821 2.46146 8.41821 1.90918Z"
						fill="#2A353D" />
				</svg>
				<hr class="w-6 h-px -rotate-90 bg-gray-200" />
			</li>
			<?php
			$output  .= ob_get_clean();
			$is_first = false;
		}

		parent::start_el( $output, $data_object, $depth, $args, $current_object_id );

		if ( $depth == 0 && $args->walker->has_children ) {
			$output .= <<<'SVG'
			<svg xmlns="http://www.w3.org/2000/svg" width="8" height="4" viewBox="0 0 8 4" fill="none">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M3.77588 2.79293L6.42233 0.146485C6.61759 -0.0487776 6.93417 -0.0487776 7.12943 0.146485C7.32469 0.341747 7.32469 0.658329 7.12943 0.853591L4.48299 3.50004C4.47841 3.50461 4.47377 3.50926 4.46907 3.51397C4.39845 3.58468 4.31436 3.66887 4.23228 3.7315C4.13319 3.8071 3.98093 3.89648 3.77588 3.89648C3.57082 3.89648 3.41857 3.8071 3.31948 3.7315C3.23739 3.66887 3.15331 3.58468 3.08269 3.51397C3.07799 3.50926 3.07335 3.50461 3.06877 3.50004L0.422326 0.853591C0.227063 0.658329 0.227063 0.341747 0.422326 0.146485C0.617588 -0.0487776 0.93417 -0.0487776 1.12943 0.146485L3.77588 2.79293ZM3.92761 2.93762C3.92761 2.93761 3.92739 2.93745 3.92695 2.93714L3.92761 2.93762ZM3.62415 2.93762C3.62414 2.93762 3.62436 2.93747 3.62479 2.93715L3.62415 2.93762Z" fill="#1A1A1A"/>
			</svg>
			SVG;
		}
	}
}
