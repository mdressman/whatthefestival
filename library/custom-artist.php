<?php

// let's create the function for the custom type
function custom_artist() { 
	// creating (registering) the custom type 
	register_post_type( 'artist', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Artists', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Artist', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Artists', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Artist', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Artists', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Artist', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Artist', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Artists', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Performing artist at WTF', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			// 'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'artist', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'artist', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'artist');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'artist');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_artist');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    // register_taxonomy( 'artist_cat', 
    // 	array('custom_artist'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    // 		'labels' => array(
    // 			'name' => __( 'Artist Categories', 'bonestheme' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Artist Category', 'bonestheme' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Artist Categories', 'bonestheme' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Artist Categories', 'bonestheme' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Artist Category', 'bonestheme' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Artist Category:', 'bonestheme' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Artist Category', 'bonestheme' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Artist Category', 'bonestheme' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Artist Category', 'bonestheme' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Artist Category Name', 'bonestheme' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true, 
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 		'rewrite' => array( 'slug' => 'artist-category' ),
    // 	)
    // );   
    
	// now let's add custom tags (these act like categories)
    // register_taxonomy( 'custom_tag', 
    // 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    // 		'labels' => array(
    // 			'name' => __( 'Custom Tags', 'bonestheme' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Custom Tag', 'bonestheme' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Custom Tags', 'bonestheme' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Custom Tags', 'bonestheme' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Custom Tag', 'bonestheme' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Custom Tag:', 'bonestheme' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Custom Tag', 'bonestheme' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Custom Tag', 'bonestheme' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Custom Tag', 'bonestheme' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Custom Tag Name', 'bonestheme' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true,
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 	)
    // ); 
    
add_filter( 'cmb_meta_boxes', 'promoter_artist_info' );
function promoter_artist_info( $meta_boxes ) {

	$prefix = '_artist_'; // Prefix for all fields

	$meta_boxes[] = array(
		'id' => 'artist_metabox',
		'title' => 'Artist Details',
		'pages' => array('artist'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Social Links',
				'id' => $prefix . 'social_title',
				'type' => 'title'
			),
			array(
				'name' => 'Website',
				'id' => $prefix . 'website',
				'type' => 'text'
			),
			array(
				'name' => 'Facebook',
				'id' => $prefix . 'facebook',
				'type' => 'text'
			),
			array(
				'name' => 'Twitter',
				'id' => $prefix . 'twitter',
				'type' => 'text'
			),
			array(
				'name' => 'Soundcloud',
				'id' => $prefix . 'soundcloud',
				'type' => 'text'
			),
			array(
				'name' => 'Instagram',
				'id' => $prefix . 'instagram',
				'type' => 'text'
			),
			array(
				'name' => 'Media Embed',
				'id' => $prefix . 'media_embed',
				'type' => 'title'
			),
			array(
				'name' => 'YouTube Embed',
				'id' => $prefix . 'youtube_embed',
				'type' => 'text'
			),
			array(
				'name' => 'Vimeo Embed',
				'id' => $prefix . 'vimeo_embed',
				'type' => 'text'
			),
			array(
				'name' => 'Soundcloud Embed',
				'id' => $prefix . 'soundcloud_embed',
				'type' => 'text'
			),
			array(
				'name' => 'Music Player',
				'id' => $prefix . 'music_player_title',
				'type' => 'title'
			),
			array(
				'name' => 'Track ID',
				'id' => $prefix . 'mp3_id',
				'type' => 'text'
			),
			array(
				'name' => 'Track Name',
				'id' => $prefix . 'mp3_name',
				'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}

add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'js/libs/metabox/init.php' );
	}
}


?>
