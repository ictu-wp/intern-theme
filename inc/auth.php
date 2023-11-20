<?php

/**
 * Fires non-authenticated Ajax actions for logged-out users.
 */
add_action(
	'wp_ajax_nopriv_login',
	function (): void {
		$credentials = get_user_postdata();

		$user = wp_signon( $credentials );

		if ( is_wp_error( $user ) ) {
			ob_start();
			get_template_part( 'template-parts/auth', 'login', array( 'error' => $user ) );
			wp_send_json_error( ob_get_clean() );
		}

		wp_send_json_success();
	}
);

/**
 * Fires non-authenticated Ajax actions for logged-out users.
 */
add_action(
	'wp_ajax_nopriv_register',
	function (): void {
		$error = new WP_Error();
		$data  = get_user_postdata();

		if ( '' !== $phone = $data['user_phone'] ) {
			if ( ! preg_match( '/(84|0[3|5|7|8|9])+([0-9]{8})\b/', $phone ) ) {
				$error->add( 'invalid_phonenumber', 'Your phone number is not valid.' );

				goto password_step;
			}

			if ( get_users(
				array(
					'meta_key'   => 'billing_phone',
					'meta_value' => $data['user_phone'],
					'number'     => 1,
				)
			) ) {
				$error->add( 'duplicate_phonenumber', 'Your phone already exist.' );

				goto last_step;
			}
		}

		password_step:
		if ( $data['user_repassword'] !== $data['user_password'] ) {
			$error->add( 'wrong_repassword', 'Re-entered password does not match.' );

			goto last_step;
		}

		$id = wc_create_new_customer(
			email: $data['user_login'],
			password: $data['user_password'],
			args: array(
				'display_name' => $data['user_name'],
			)
		);

		if ( is_wp_error( $id ) ) {
			$error->merge_from( $id );
		}

		last_step:
		if ( count( $error->errors ) > 0 ) {
			ob_start();
			get_template_part( 'template-parts/auth', 'register', array( 'error' => $error ) );
			wp_send_json_error( ob_get_clean() );
		}

		add_user_meta( $id, 'billing_phone', $data['user_phone'], true );
		add_user_meta( $id, 'billing_email', $data['user_login'] );
		wp_signon( $data );
		wp_send_json_success();
	}
);

/**
 * @return array{
 *  user_name:string,
 *  user_phone:string,
 *  user_login:string,
 *  user_password:string,
 *  user_repassword:string,
 *  remember:bool
 * }
 */
function get_user_postdata() {
	return wp_parse_args(
		$_POST,
		array(
			'user_name'       => '',
			'user_phone'      => '',
			'user_login'      => '',
			'user_password'   => '',
			'user_repassword' => '',
			'remember'        => true,
		)
	);
}
