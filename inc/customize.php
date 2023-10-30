<?php

add_action( 'customize_register', 'gingdev_customize_register' );

/**
 * Fires once WordPress has loaded, allowing scripts and styles to be initialized.
 *
 * @param \WP_Customize_Manager $manager WP_Customize_Manager instance.
 */
function gingdev_customize_register( \WP_Customize_Manager $manager ): void {

	$manager->add_section(
		'footer',
		array(
			'title' => __( 'Footer' ),
		)
	);

	$manager->add_setting(
		'footer_logo',
		array(
			'transport' => 'refresh',
		)
	);

	$manager->add_control(
		new WP_Customize_Image_Control(
			$manager,
			'footer_logo',
			array(
				'label'   => __( 'Footer Logo' ),
				'section' => 'footer',
			)
		)
	);

	$manager->add_setting(
		'copyright',
		array(
			'transport' => 'refresh',
		)
	);

	$manager->add_control(
		'copyright',
		array(
			'label'   => __( 'Copyright' ),
			'type'    => 'text',
			'section' => 'footer',
		)
	);

	$manager->add_setting(
		'email',
		array(
			'transport' => 'refresh',
		)
	);

	$manager->add_control(
		'email',
		array(
			'label'   => __( 'Email' ),
			'type'    => 'email',
			'section' => 'footer',
		)
	);

	$manager->selective_refresh->add_partial(
		'footer_logo',
		array(
			'selector' => '#footer_logo',
		)
	);

	$manager->selective_refresh->add_partial(
		'copyright',
		array(
			'selector' => '.copyright',
		)
	);

	$manager->selective_refresh->add_partial(
		'email',
		array(
			'selector' => '.email',
		)
	);

	$manager->selective_refresh->add_partial(
		'sidebar',
		array(
			'selector' => '#footer-sidebar',
		)
	);
}
