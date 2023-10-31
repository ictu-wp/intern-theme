<?php

add_action( 'init', 'register_custom_post_type' );

/**
 * Fires after WordPress has finished loading but before any headers are sent.
 */
function register_custom_post_type(): void {
	register_post_type(
		'logo',
		array(
			'labels'             => array(
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
			),
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
		)
	);

	register_post_type(
		'customer',
		array(
			'labels'             => array(
				'name'               => __( 'Customers' ),
				'singular_name'      => __( 'Customer' ),
				'menu_name'          => __( 'Customers' ),
				'name_admin_bar'     => __( 'Customer' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Customer' ),
				'new_item'           => __( 'New Customer' ),
				'edit_item'          => __( 'Edit Customer' ),
				'view_item'          => __( 'View Customer' ),
				'all_items'          => __( 'All Customers' ),
				'search_items'       => __( 'Search Customers' ),
				'parent_item_colon'  => __( 'Parent Customers:' ),
				'not_found'          => __( 'No customers found.' ),
				'not_found_in_trash' => __( 'No customers found in Trash.' ),
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'customer' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'         => array( 'customer_role' ),
		)
	);

	register_taxonomy(
		'customer_role',
		'customer',
		array(
			'hierarchical'      => false,
			'labels'            => array(
				'name'                       => __( 'Customer Roles' ),
				'singular_name'              => __( 'Customer Role' ),
				'search_items'               => __( 'Search Customer Roles' ),
				'popular_items'              => __( 'Popular Customer Roles' ),
				'all_items'                  => __( 'All Customer Roles' ),
				'edit_item'                  => __( 'Edit Customer Role' ),
				'update_item'                => __( 'Update Customer Role' ),
				'add_new_item'               => __( 'Add New Customer Role' ),
				'new_item_name'              => __( 'New Customer Role Name' ),
				'separate_items_with_commas' => __( 'Separate customer roles with commas' ),
				'add_or_remove_items'        => __( 'Add or remove customer roles' ),
				'choose_from_most_used'      => __( 'Choose from the most used customer roles' ),
				'not_found'                  => __( 'No customer roles found.' ),
				'menu_name'                  => __( 'Roles' ),
			),
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'customer_role' ),
		)
	);
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
