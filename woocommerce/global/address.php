<?php

enqueue( 'address' );

$user_id = get_current_user_id();

?>

<div class="grow flex-col justify-start items-start gap-3 inline-flex">
	<div class="w-full h-11 px-4 rounded-md border border-gray-200 justify-start items-center gap-2.5 inline-flex">
		<input name="billing_address_2" class="grow shrink basis-0 text-zinc-900 text-sm font-normal leading-tight"
			value="<?php echo get_user_meta( $user_id, 'billing_address_2', true ); ?>"
			placeholder="<?php echo __( 'Your address' ); ?>" />
	</div>
	<div id="address" class="w-full justify-start items-start gap-4 inline-flex">
		<div class="grow shrink basis-0 h-11 px-4 rounded-md border border-gray-200 justify-start items-center">
			<select id="province" name="province"
				class="bg-white w-full h-full grow shrink basis-0 text-zinc-900 invalid:text-gray-200 text-sm font-normal leading-tight">
				<option disabled selected value="">City</option>
			</select>
		</div>
		<div class="grow shrink basis-0 h-11 px-4 rounded-md border border-gray-200 justify-start items-center">
			<select id="district" name="district"
				class="bg-white w-full h-full grow shrink basis-0 text-zinc-900 invalid:text-gray-200 text-sm font-normal leading-tight">
				<option disabled selected value="">District</option>
			</select>
		</div>
		<div class="grow shrink basis-0 h-11 px-4 rounded-md border border-gray-200 justify-start items-center">
			<select id="ward" name="ward"
				class="bg-white w-full h-full grow shrink basis-0 text-zinc-900 invalid:text-gray-200 text-sm font-normal leading-tight">
				<option disabled selected value="">Ward</option>
			</select>
		</div>
	</div>
</div>
<input type="hidden" name="billing_address_1"
	value="<?php echo get_user_meta( $user_id, 'billing_address_1', true ); ?>">
