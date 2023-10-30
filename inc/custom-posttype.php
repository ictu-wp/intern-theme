<?php

add_action( 'init', 'register_custom_post_type' );

/**
 * Fires after WordPress has finished loading but before any headers are sent.
 */
function register_custom_post_type(): void {
	$labels = array(
		'name'               => __( 'Logos' ),
		'singular_name'      => __( 'Logo' ),
		'menu_name'          => __( 'Logos' ),
		'name_admin_bar'     => __( 'Logo' ),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Logo' ),
		'new_item'           => __( 'New Logo' ),
		'edit_item'          => __( 'Edit Logo' ),
		'view_item'          => __( 'View Logo' ),
		'all_items'          => __( 'All Logos' ),
		'search_items'       => __( 'Search Logos' ),
		'parent_item_colon'  => __( 'Parent Logos:' ),
		'not_found'          => __( 'No logos found.' ),
		'not_found_in_trash' => __( 'No logos found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'logo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon'          => 'dashicons-format-image',
	);

	register_post_type( 'logo', $args );
}

/**
 * @template TColumns of array<string,string>
 * @param TColumns $columns
 *
 * @return TColumns
 */
function add_logo_featured_image_column( $columns ) {
	$columns['featured_image'] = __( 'Featured Image' );
	return $columns;
}

add_filter( 'manage_logo_posts_columns', 'add_logo_featured_image_column' );

/**
 * @param string $column
 * @param int    $post_id
 *
 * @return void
 */
function display_logo_featured_image( $column, $post_id ) {
	if ( $column === 'featured_image' ) {
		the_post_thumbnail();
	}
}

add_action( 'manage_logo_posts_custom_column', 'display_logo_featured_image', 10, 2 );
