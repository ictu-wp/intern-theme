<?php

require __DIR__ . '/widgets/SupportPhone_Widget.php';
require __DIR__ . '/widgets/BaseLocation_Widget.php';
require __DIR__ . '/widgets/ProductCategories_Widget.php';
require __DIR__ . '/widgets/Product_Widget.php';
require __DIR__ . '/widgets/CustomerShowcase_Widget.php';
require __DIR__ . '/widgets/LogoShowcase_Widget.php';
require __DIR__ . '/widgets/FlashSale_Widget.php';
require __DIR__ . '/widgets/BadgeProduct_Widget.php';
require __DIR__ . '/widgets/Banner_Widget.php';

/**
 * Fires after all default WordPress widgets have been registered.
 */
add_action(
	'widgets_init',
	function (): void {
		register_sidebar(
			array(
				'name'          => __( 'Front Page' ),
				'id'            => 'front-sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer Sidebar' ),
				'id'            => 'footer-sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
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
		register_sidebar(
			array(
				'name'          => __( 'Product Right Side' ),
				'id'            => 'product-right',
				'before_widget' => '<div id="%1$s" class="%2$s flex flex-col gap-2">',
				'after_widget'  => '</div>',
			)
		);

		register_widget( SupportPhone_Widget::class );
		register_widget( BaseLocation_Widget::class );
		register_widget( ProductCategories_Widget::class );
		register_widget( Product_Widget::class );
		register_widget( CustomerShowcase_Widget::class );
		register_widget( LogoShowcase_Widget::class );
		register_widget( FlashSale_Widget::class );
		register_widget( BadgeProduct_Widget::class );
		register_widget( Banner_Widget::class );
	}
);
