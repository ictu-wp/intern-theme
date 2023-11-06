<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @var array<int,string> $catalog_orderby_options
 * @var int $orderby
 */

?>
<div class="flex justify-end">
	<div
		class="order-dropdown w-fit h-10 py-1.5 bg-white border-b border-gray-200 justify-start items-center gap-2.5 inline-flex relative">
		<div class="w-5 h-4 px-0.5 py-px justify-center items-center flex">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
				<path
					d="M16.7981 3.01847L13.6733 0.206226C13.523 0.0708045 13.3192 0 13.1206 0C12.9227 0 12.718 0.0710858 12.5679 0.206226L9.44319 3.01847C9.13808 3.29308 9.13808 3.73826 9.44319 4.01283C9.74831 4.2874 10.243 4.28744 10.5481 4.01283L12.3394 2.40064V15.2969C12.3394 15.6852 12.6891 16 13.1206 16C13.5521 16 13.9019 15.6852 13.9019 15.2969V2.40064L15.6931 4.01283C15.9982 4.2874 16.4929 4.28744 16.798 4.01283C17.1032 3.73826 17.1032 3.29304 16.7981 3.01847Z"
					fill="#767676" />
				<path
					d="M7.45147 11.9872L5.66014 13.5994V0.703124C5.66014 0.314788 5.31038 0 4.87889 0C4.44741 0 4.09765 0.314788 4.09765 0.703124V13.5994L2.30636 11.9872C2.00124 11.7126 1.50656 11.7126 1.20148 11.9872C0.896402 12.2618 0.896362 12.707 1.20148 12.9815L4.32647 15.794C4.46827 15.9216 4.66964 16 4.87893 16C5.076 16 5.28151 15.9289 5.43139 15.794L8.55639 12.9815C8.8615 12.7069 8.8615 12.2617 8.55639 11.9872C8.25127 11.7126 7.75654 11.7126 7.45147 11.9872Z"
					fill="#767676" />
			</svg>
		</div>
		<div class="justify-start items-center gap-2 flex">
			<div class="text-neutral-500 text-sm font-normal leading-tight">
				<?php echo __( 'Sort' ); ?>:
			</div>
			<div class="text-zinc-900 text-sm font-normal leading-tight">
				<?php echo $catalog_orderby_options[ $orderby ]; ?>
			</div>
		</div>
		<div class="w-4 h-4 px-1 py-1.5 justify-center items-center flex">
			<svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M5 4.29169C4.96673 4.25948 4.92885 4.22164 4.88215 4.17493L1.35355 0.646334C1.15829 0.451072 0.841709 0.451072 0.646447 0.646334C0.451184 0.841596 0.451184 1.15818 0.646447 1.35344L4.17504 4.88204C4.18043 4.88742 4.18584 4.89284 4.19127 4.89828C4.28793 4.99501 4.39244 5.0996 4.49256 5.17599C4.60985 5.26548 4.77769 5.36182 5 5.36182C5.22231 5.36182 5.39015 5.26548 5.50744 5.17599C5.60756 5.0996 5.71207 4.99501 5.80873 4.89828C5.81416 4.89284 5.81957 4.88742 5.82496 4.88204L9.35355 1.35344C9.54882 1.15818 9.54882 0.841596 9.35355 0.646334C9.15829 0.451072 8.84171 0.451072 8.64645 0.646334L5.11785 4.17493C5.07115 4.22164 5.03327 4.25948 5 4.29169Z"
					fill="#767676" />
			</svg>
		</div>
		<div
			class="dropdown-items rounded-md shadow border border-gray-200 py-1 absolute z-10 bg-white left-0 top-8 hidden">
			<ul class="w-64 flex-col justify-start items-start inline-flex">
				<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
					<li class="self-stretch p-4 bg-white justify-start items-start gap-2.5 inline-flex">
						<a href="?
						<?php
						echo build_query(
							array(
								'orderby' => $id,
								'paged'   => get_query_var( 'paged' ) ?: 1,
							)
						);
						?>
						" class="grow shrink basis-0 text-zinc-900 text-sm font-normal leading-tight">
							<?php echo esc_html( $name ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
