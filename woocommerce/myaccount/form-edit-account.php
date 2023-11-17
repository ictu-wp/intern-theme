<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

function _hide( string $haystack ): string {
	$parts = explode( '@', $haystack );
	$len   = min( strlen( $parts[0] ), 3 );

	return substr( $parts[0], 0, -$len ) . str_repeat( '*', $len ) . ( count( $parts ) > 1 ? '@' . $parts[1] : '' );
}

/** @var WP_User $user */
do_action( 'woocommerce_before_edit_account_form' ); ?>

<form class="rounded-md overflow-hidden w-full p-6 bg-white flex-col justify-start items-start gap-6 inline-flex" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?>>
	<div class="self-stretch text-zinc-900 text-2xl font-semibold leading-7">
		<?php echo __( 'Account Information' ); ?>
	</div>
	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
	<div class="flex-col justify-start items-start gap-4 flex">
		<div class="justify-start items-center gap-4 inline-flex">
			<label for="account_display_name" class="w-24 text-zinc-900 text-sm font-normal leading-tight">
				<?php echo __( 'Display name' ); ?>
			</label>
			<div class="w-96 h-11 px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 flex">
				<input name="account_display_name" id="account_display_name"
					value="<?php echo esc_attr( $user->display_name ); ?>"
					class="grow shrink basis-0 text-zinc-900 text-sm font-normal leading-tight" />
			</div>
		</div>
		<div class="justify-start items-center gap-4 inline-flex">
			<label for="account_email" class="w-24 text-zinc-900 text-sm font-normal leading-tight">
				<?php echo __( 'Email' ); ?>
			</label>
			<div
				class="w-96 h-11 px-4 bg-neutral-100 rounded-md border border-gray-200 justify-start items-center gap-2.5 flex">
				<input type="email"
					class="bg-neutral-100 grow shrink basis-0 text-neutral-500 text-sm font-normal leading-tight"
					name="account_email" id="account_email" autocomplete="email"
					value="<?php echo esc_attr( _hide( $user->user_email ) ); ?>" disabled />
			</div>
		</div>
		<div class="justify-start items-center gap-4 inline-flex">
			<label for="billing_phone" class="w-24 text-zinc-900 text-sm font-normal leading-tight">
				<?php echo __( 'Phone' ); ?>
			</label>
			<div
				class="w-96 h-11 px-4 bg-neutral-100 rounded-md border border-gray-200 justify-start items-center gap-2.5 flex">
				<input type="tel"
					class="bg-neutral-100 grow shrink basis-0 text-neutral-500 text-sm font-normal leading-tight"
					name="billing_phone" id="billing_phone" autocomplete="tel"
					value="<?php echo esc_attr( _hide( get_user_meta( $user->ID, 'billing_phone', true ) ) ); ?>"
					disabled />
			</div>
		</div>
	</div>
	<div class="w-full justify-start items-center gap-4 inline-flex">
		<div class="w-24 text-zinc-900 text-sm font-normal leading-tight">
			<?php echo __( 'Address' ); ?>
		</div>
		<?php wc_get_template_part( 'global/address' ); ?>
	</div>
	<?php do_action( 'woocommerce_edit_account_form' ); ?>
	<p>
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" name="save_account_details"
			class="w-36 h-11 px-6 bg-green-500 rounded-md justify-center items-center gap-2 inline-flex">
			<div class="text-white text-sm font-semibold leading-none">
				<?php esc_html_e( 'Save changes', 'woocommerce' ); ?>
			</div>
		</button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
