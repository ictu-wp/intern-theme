<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 *
 * @var bool   $readonly If the input should be set to readonly mode.
 * @var string $type     The input type attribute.
 */

defined( 'ABSPATH' ) || exit;

/* translators: %s: Quantity. */
$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );

?>
<div class="quantity">
	<?php
	/**
	 * Hook to output something before the quantity input field.
	 *
	 * @since 7.2.0
	 */
	do_action( 'woocommerce_before_quantity_input_field' );
	?>

	<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>">
		<?php echo esc_attr( $label ); ?>
	</label>
	<div
		class="gap-0 flex-row w-[150px] h-[46px] justify-center items-center border bg-white opacity-100 p-0 rounded-[6.5px] border-[#eaeaea] flex">
		<button type="button"
			class="minus gap-2.5 flex-row w-[46px] h-[46px] justify-center items-center border opacity-100 p-[9.5px] rounded-[6.5px_0.5px_0.5px_6.5px] border-[#eaeaea] flex">
			<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M15 11.125H5C4.65833 11.125 4.375 10.8417 4.375 10.5C4.375 10.1583 4.65833 9.875 5 9.875H15C15.3417 9.875 15.625 10.1583 15.625 10.5C15.625 10.8417 15.3417 11.125 15 11.125Z"
					fill="#BAC8D3" />
			</svg>
		</button>
		<div class="gap-2.5 flex-row h-full justify-center items-center flex-1 min-w-0 opacity-100 p-0 flex">
			<input type="<?php echo esc_attr( $type ); ?>" <?php echo $readonly ? 'readonly="readonly"' : ''; ?>
				id="<?php echo esc_attr( $input_id ); ?>"
				class="w-0 min-w-full h-full focus:outline-none text-sm font-normal text-[#374957] text-center <?php echo esc_attr( join( ' ', (array) $classes ) ); ?>"
				name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>"
				aria-label="<?php esc_attr_e( 'Product quantity', 'woocommerce' ); ?>" size="4"
				min="<?php echo esc_attr( $min_value ); ?>"
				max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>" <?php if ( ! $readonly ) : ?>
					step="<?php echo esc_attr( $step ); ?>" placeholder="<?php echo esc_attr( $placeholder ); ?>"
					inputmode="<?php echo esc_attr( $inputmode ); ?>"
					autocomplete="<?php echo esc_attr( isset( $autocomplete ) ? $autocomplete : 'on' ); ?>" <?php endif; ?> />
		</div>
		<button type="button"
			class="plus gap-2.5 flex-row w-[46px] h-[46px] justify-center items-center border opacity-100 p-[9.5px] rounded-[0.5px_6.5px_6.5px_0.5px] border-[#eaeaea] flex">
			<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M15 11.125H5C4.65833 11.125 4.375 10.8417 4.375 10.5C4.375 10.1583 4.65833 9.875 5 9.875H15C15.3417 9.875 15.625 10.1583 15.625 10.5C15.625 10.8417 15.3417 11.125 15 11.125Z"
					fill="#374957" />
				<path
					d="M10 16.125C9.65833 16.125 9.375 15.8417 9.375 15.5V5.5C9.375 5.15833 9.65833 4.875 10 4.875C10.3417 4.875 10.625 5.15833 10.625 5.5V15.5C10.625 15.8417 10.3417 16.125 10 16.125Z"
					fill="#374957" />
			</svg>
		</button>
	</div>
	<?php
	/**
	 * Hook to output something after quantity input field
	 *
	 * @since 3.6.0
	 */
	do_action( 'woocommerce_after_quantity_input_field' );
	?>
</div>
<?php
