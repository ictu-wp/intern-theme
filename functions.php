<?php
use BenTools\WebpackEncoreResolver\AssetPathResolver;

require get_template_directory() . '/vendor/autoload.php';
require get_template_directory() . '/inc/custom-searchform.php';
require get_template_directory() . '/inc/customize.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/custom-posttype.php';
require get_template_directory() . '/inc/shortcode.php';
require get_template_directory() . '/inc/woocommerce.php';
require get_template_directory() . '/inc/auth.php';

/**
 * @see https://woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Fires after WordPress has finished loading but before any headers are sent.
 */
add_action(
	'init',
	function (): void {
		register_nav_menu( 'main-menu', __( 'Main menu' ) );
	}
);

add_action(
	'after_setup_theme',
	function (): void {
		add_theme_support( 'title-tag' );
		add_theme_support(
			'custom-logo',
			array(
				'height'               => 100,
				'width'                => 400,
				'flex-height'          => true,
				'flex-width'           => true,
				'header-text'          => array( 'site-title', 'site-description' ),
				'unlink-homepage-logo' => true,
			)
		);
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'block-template-parts' );
		add_theme_support( 'widgets' );
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
		add_theme_support( 'woocommerce' );
	}
);


/**
 * Fires when scripts and styles are enqueued.
 */
add_action(
	'wp_enqueue_scripts',
	function (): void {
		$assetPathResolver = new AssetPathResolver( get_template_directory() . '/build' );

		$resolve = function ( string $uri ): string {
			return ( str_starts_with( $uri, '/' ) ? get_stylesheet_directory_uri() : '' ) . $uri;
		};

		$enqueue = function ( string $entrypoint ) use ( $assetPathResolver, $resolve ) {
			foreach ( $assetPathResolver->getWebpackCssFiles( $entrypoint ) as $css ) {
				wp_enqueue_style( wp_unique_id( $entrypoint ), $resolve( $css ) );
			}

			foreach ( $assetPathResolver->getWebpackJsFiles( $entrypoint ) as $js ) {
				wp_enqueue_script( wp_unique_id( $entrypoint ), $resolve( $js ) );
			}
		};

		$enqueue( 'main' );

		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' );
		wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap' );
	}
);

/**
 * Prints scripts or data in the head tag on the front end.
 */
add_action(
	'wp_head',
	function (): void {
		?>
	<script>
		const admin_ajax = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
	</script>
		<?php
	}
);

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
