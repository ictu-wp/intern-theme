<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<div id="header">
	<?php get_template_part( 'template-parts/header' ); ?>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'main-menu',
			'container'      => 'ul',
			'menu_class'     => 'ging-menu',
			'walker'         => new Ging_Walker_Nav_Menu(),
		)
	);
	?>
</div>

<body <?php body_class(); ?>>
