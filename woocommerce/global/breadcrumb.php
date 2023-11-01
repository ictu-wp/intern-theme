<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.0
 * @see     woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @var string $wrap_before
 * @var string $before
 * @var string $after
 * @var string $wrap_after
 */

if ( ! empty( $breadcrumb ) ) {
	echo $wrap_before;

	foreach ( $breadcrumb as $key => $crumb ) {
		echo $before;

		if ( ! $key ) {
			?>
			<a href="<?php echo esc_url( $crumb[1] ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
					<path d="M18.7536 10.1959C18.2839 9.72625 10.8395 2.28179 10.4952 1.93746C10.2219 1.66408 9.77875 1.66408 9.5055 1.93746C9.12891 2.31405 1.70892 9.7339 1.24703 10.1959C0.973646 10.4692 0.973646 10.9123 1.24703 11.1857C1.52028 11.459 1.96344 11.459 2.23669 11.1857L2.41836 11.0041V18.9492C2.41836 19.3358 2.7318 19.6491 3.11823 19.6491H16.8824C17.2689 19.6491 17.5823 19.3358 17.5823 18.9492V11.0041L17.7638 11.1857C18.0372 11.459 18.4804 11.459 18.7536 11.1857C19.027 10.9123 19.027 10.4692 18.7536 10.1959ZM12.0533 18.2493H7.94747V14.1435H12.0533V18.2493ZM16.1826 18.2493H13.4531V13.4436C13.4531 13.0571 13.1398 12.7438 12.7532 12.7438H7.2476C6.86103 12.7438 6.54773 13.0571 6.54773 13.4436V18.2493H3.81823V9.60432L10.0003 3.42209L16.1826 9.60432V18.2493Z" fill="#767676"/>
				</svg>
			</a>
			<?php

			goto arrow;
		}

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			?>
			<div class="text-[#1A1A1A]"><?php echo esc_html( $crumb[0] ); ?></div>
			<?php
		}

		echo $after;

		arrow:
		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			?>
			<svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M0.646447 0.337365C0.841709 0.142102 1.15829 0.142102 1.35355 0.337365L4.88215 3.86596C4.88753 3.87135 4.89295 3.87676 4.89839 3.88219C4.99512 3.97885 5.09972 4.08336 5.17611 4.18348C5.2656 4.30077 5.36193 4.4686 5.36193 4.69092C5.36193 4.91323 5.2656 5.08106 5.17611 5.19835C5.09972 5.29847 4.99512 5.40299 4.89839 5.49964C4.89295 5.50508 4.88753 5.51049 4.88215 5.51588L1.35355 9.04447C1.15829 9.23973 0.841709 9.23973 0.646447 9.04447C0.451184 8.84921 0.451184 8.53263 0.646447 8.33737L4.17504 4.80877C4.22175 4.76206 4.25959 4.72419 4.29181 4.69092C4.25959 4.65765 4.22175 4.61977 4.17504 4.57307L0.646447 1.04447C0.451184 0.849209 0.451184 0.532627 0.646447 0.337365Z" fill="#767676"/>
			</svg>
			<?php
		}
	}

	echo $wrap_after;
}
