<?php
use BenTools\WebpackEncoreResolver\AssetPathResolver;

require_once get_template_directory() . '/vendor/autoload.php';

add_action(
	'after_setup_theme',
	function (): void {
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
);


/**
 * Fires when scripts and styles are enqueued.
 *
 */
add_action('wp_enqueue_scripts', function() : void {
	$assetPathResolver = new AssetPathResolver(get_template_directory() . '/build');

	$uri = function (string $uri): string {
		return str_starts_with($uri, '/') ? get_stylesheet_directory_uri() . $uri : $uri;
	};

	foreach ($assetPathResolver->getWebpackCssFiles('main') as $index => $css) {
		wp_enqueue_style("style_{$index}", $uri($css));
	}
	
	foreach ($assetPathResolver->getWebpackJsFiles('main') as $index => $js) {
		wp_enqueue_script("script_{$index}", $uri($js));
	}		
} );
