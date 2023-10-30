<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<?php get_template_part( 'template-parts/header' ); ?>
<?php
	wp_nav_menu(
		array(
			'theme_location' => 'main-menu',
			'container'      => 'ul',
			'menu_class'     => 'w-full h-14 px-20 py-3 bg-white border-t border-b border-gray-200 justify-start items-center gap-8 inline-flex',
		)
	);
	?>
<body <?php body_class(); ?>>
