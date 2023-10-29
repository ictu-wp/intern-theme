<?php

require __DIR__ . '/widgets/SupportPhone.php';
require __DIR__ . '/widgets/BaseLocation.php';

/**
 * Fires after all default WordPress widgets have been registered.
 */
add_action(
	'widgets_init',
	function (): void {
		register_sidebar(
			array(
				'name'          => __( 'Footer Sidebar' ),
				'id'            => 'footer-sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s justify-center items-center gap-3 inline-flex">',
				'after_widget'  => '</div>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer Columns 1' ),
				'id'            => 'footer-columns-1',
				'before_widget' => '<div id="%1$s" class="footer-columns-1 %2$s flex-col justify-start items-start gap-6 inline-flex">',
				'after_widget'  => '</div>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer Columns 2' ),
				'id'            => 'footer-columns-2',
				'before_widget' => '<div id="%1$s" class="footer-columns-2 %2$s flex-col justify-start items-start gap-6 inline-flex">',
				'after_widget'  => '</div>',
			)
		);

		register_widget( SupportPhone::class );
		register_widget( BaseLocation::class );
	}
);
