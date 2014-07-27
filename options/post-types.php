<?php  
/*
register_post_type('custom-type', array(
	'labels' => array(
		'name'	 => 'Custom Types',
		'singular_name' => 'Custom Type',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Custom Type' ),
		'view_item' => 'View Custom Type',
		'edit_item' => 'Edit Custom Type',
		'new_item' => __('New Custom Type'),
		'view_item' => __('View Custom Type'),
		'search_items' => __('Search Custom Types'),
		'not_found' =>  __('No custom types found'),
		'not_found_in_trash' => __('No custom types found in Trash'),
	),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => array(
		"slug" => "custom-type",
		"with_front" => false,
	),
	'query_var' => true,
	'supports' => array('title', 'editor', 'page-attributes'),
));
*/

register_post_type('inf_influencer', array(
	'labels' => array(
		'name'	 => 'Influencers',
		'singular_name' => 'Influencer',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Influencer' ),
		'view_item' => 'View Influencer',
		'edit_item' => 'Edit Influencer',
		'new_item' => __('New Influencer'),
		'view_item' => __('View Influencer'),
		'search_items' => __('Search Influencers'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => array(
		"slug" => "influencer",
		"with_front" => false,
	),
	'query_var' => true,
	'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
));

register_post_type('inf_instagram', array(
	'labels' => array(
		'name'	 => 'Shop this Instagram',
		'singular_name' => 'Instagram Item',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Instagram' ),
		'view_item' => 'View Instagram',
		'edit_item' => 'Edit Instagram',
		'new_item' => __('New Instagram'),
		'view_item' => __('View Instagram'),
		'search_items' => __('Search Instagrams'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => true,
	'exclude_from_search' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => array(
		"slug" => "instagram",
		"with_front" => false,
	),
	'query_var' => false,
	'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
));

/** register_post_type('inf_product', array(
	'labels' => array(
		'name'	 => 'Products',
		'singular_name' => 'Product',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Product' ),
		'view_item' => 'View Product',
		'edit_item' => 'Edit Product',
		'new_item' => __('New Product'),
		'view_item' => __('View Product'),
		'search_items' => __('Search Products'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => false,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => false,
	'query_var' => true,
	'supports' => array('title', 'page-attributes', 'thumbnail'),
));
*/

register_post_type('inf_video', array(
	'labels' => array(
		'name'	 => 'Videos',
		'singular_name' => 'Video',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Video' ),
		'view_item' => 'View Video',
		'edit_item' => 'Edit Video',
		'new_item' => __('New Video'),
		'view_item' => __('View Video'),
		'search_items' => __('Search Videos'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => false,
	'exclude_from_search' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => false,
	'query_var' => true,
	'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
));

//#Influencer
register_post_type('inf_hash_influencer', array(
	'labels' => array(
		'name'	 => '#Influencer',
		'singular_name' => '#Influencer',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Item' ),
		'view_item' => 'View Item',
		'edit_item' => 'Edit Item',
		'new_item' => __('New Item'),
		'view_item' => __('View Item'),
		'search_items' => __('Search Items'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => false,
	'exclude_from_search' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => false,
	'query_var' => true,
	'supports' => array('title', 'page-attributes', 'thumbnail'),
));

//Q & A
register_post_type('inf_qanda', array(
	'labels' => array(
		'name'	 => 'Q & A',
		'singular_name' => 'Q & A',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Item' ),
		'view_item' => 'View Item',
		'edit_item' => 'Edit Item',
		'new_item' => __('New Item'),
		'view_item' => __('View Item'),
		'search_items' => __('Search Items'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => false,
	'exclude_from_search' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => false,
	'query_var' => true,
	'supports' => array('title', 'page-attributes', 'thumbnail'),
));

//Featured Themes
register_post_type('inf_theme', array(
	'labels' => array(
		'name'	 => 'Themes',
		'singular_name' => 'Theme',
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add new Theme' ),
		'view_item' => 'View Theme',
		'edit_item' => 'Edit Theme',
		'new_item' => __('New Theme'),
		'view_item' => __('View Theme'),
		'search_items' => __('Search Themes'),
		'not_found' =>  __('No entries found'),
		'not_found_in_trash' => __('No entries found in Trash'),
	),
	'public' => true,
	'exclude_from_search' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => array(
		"slug" => "theme",
		"with_front" => false,
	),
	'query_var' => true,
	'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
));