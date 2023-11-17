<?php

/**
 * Filters the HTML output of the search form.
 *
 * @param string $form The search form HTML output.
 * @param array  $args The array of arguments for building the search form. See get_search_form() for information on accepted arguments.
 * @return string The search form HTML output.
 */
add_filter(
	'get_search_form',
	function ( string $form, array $args ): string {
		ob_start();
		?>
	<form method="get" action="<?php echo wc_get_page_permalink( 'shop' ); ?>"
		class="hidden md:flex md:w-80 lg:w-96 h-11 pl-4 pr-1 py-1 rounded-md border border-gray-200 justify-start items-center gap-2.5">
		<input name="s"
			class="h-full outline-none grow shrink basis-0 text-stone-300 text-sm font-normal leading-tight" />
		<button type="submit"
			class="w-28 self-stretch px-4 py-2 bg-green-500 rounded justify-start items-center gap-2 flex">
			<div class="w-4 h-4 p-px justify-center items-center flex">
				<i class="fas fa-search text-white"></i>
			</div>
			<div class="text-white text-sm font-semibold leading-none">
				<?php echo __( 'Search' ); ?>
			</div>
		</button>
	</form>
		<?php
		return ob_get_clean();
	},
	10,
	2
);
