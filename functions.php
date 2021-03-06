<?php

add_theme_support( 'post-thumbnails');

function shapeSpace_filter_search($query) {
	if (!$query->is_admin && $query->is_search) {
		$query->set('post_type', array('post', 'page'));
	}
	return $query;
}
add_filter('pre_get_posts', 'shapeSpace_filter_search');


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Menu Principal' ),
      'secondary-menu' => __( 'Menu Secundario' ),
      'portals' => __( 'Portais' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'post-formats', array( 'image', 'link' ) );


function banner_init() {
  $labels = array(
      'name'                  => _x( 'Banners', 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( 'Banner', 'Post type singular name', 'textdomain' ),
      'menu_name'             => _x( 'Banners', 'Admin Menu text', 'textdomain' ),
      'name_admin_bar'        => _x( 'Banner', 'Add New on Toolbar', 'textdomain' ),
      'add_new'               => __( 'Add New', 'textdomain' ),
      'add_new_item'          => __( 'Add New Banner', 'textdomain' ),
      'new_item'              => __( 'New Banner', 'textdomain' ),
      'edit_item'             => __( 'Edit Banner', 'textdomain' ),
      'view_item'             => __( 'View Banner', 'textdomain' ),
      'all_items'             => __( 'All Banners', 'textdomain' ),
      'search_items'          => __( 'Search Banners', 'textdomain' ),
      'parent_item_colon'     => __( 'Parent Banners:', 'textdomain' ),
      'not_found'             => __( 'No Banners found.', 'textdomain' ),
      'not_found_in_trash'    => __( 'No Banners found in Trash.', 'textdomain' ),
      'featured_image'        => _x( 'Banner Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'archives'              => _x( 'Banner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
      'insert_into_item'      => _x( 'Insert into Banner', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this Banner', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
      'filter_items_list'     => _x( 'Filter Banners list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
      'items_list_navigation' => _x( 'Banners list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
      'items_list'            => _x( 'Banners list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'Banner' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'menu_icon'           => 'dashicons-format-gallery',
      'supports'           => array( 'title', 'editor', 'author', 'post-formats','page-attributes'),
  );

  register_post_type( 'Banner', $args );
}

add_action( 'init', 'banner_init' );

function event_init() {
  $labels = array(
      'name'                  => _x( 'Inscrições de Eventos', 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( 'Inscrição de Evento', 'Post type singular name', 'textdomain' ),
      'menu_name'             => _x( 'Inscrições de Eventos', 'Admin Menu text', 'textdomain' ),
      'name_admin_bar'        => _x( 'Event', 'Add New on Toolbar', 'textdomain' ),
      'add_new'               => __( 'Add New', 'textdomain' ),
      'add_new_item'          => __( 'Add New Event', 'textdomain' ),
      'new_item'              => __( 'New Event', 'textdomain' ),
      'edit_item'             => __( 'Edit Event', 'textdomain' ),
      'view_item'             => __( 'View Event', 'textdomain' ),
      'all_items'             => __( 'All Events', 'textdomain' ),
      'search_items'          => __( 'Search Events', 'textdomain' ),
      'parent_item_colon'     => __( 'Parent Events:', 'textdomain' ),
      'not_found'             => __( 'No Events found.', 'textdomain' ),
      'not_found_in_trash'    => __( 'No Events found in Trash.', 'textdomain' ),
      'featured_image'        => _x( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'archives'              => _x( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
      'insert_into_item'      => _x( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
      'filter_items_list'     => _x( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
      'items_list_navigation' => _x( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
      'items_list'            => _x( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'Event' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'menu_icon'           => 'dashicons-welcome-write-blog',
      'supports'           => array( 'title', 'editor', 'author','page-attributes', 'custom-fields',),
  );

  register_post_type( 'Event', $args );
}

add_action( 'init', 'event_init' );

// A custom function that calls register_post_type
function register_quickmenu_post_type() {
  // Set various pieces of text, $labels is used inside the $args array
  $labels = array(
     'name' => _x( 'Menus rápido', 'post type general name' ),
     'singular_name' => _x( 'Menu rápido', 'post type singular name' ),
     'menu_name'  => _x( 'Menus rápidos', 'Admin Menu text', 'textdomain' ),

     
  );
  // Set various pieces of information about the post type
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
    'menu_icon'           => 'dashicons-editor-insertmore',
    'supports'  => array( 'title', 'editor', 'author', 'thumbnail','custom-fields', 'page-attributes'),
  );
  // Register the movie post type with all the information contained in the $arguments array
  register_post_type( 'QuickMenus', $args );
}

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'register_quickmenu_post_type' );


function schedule_init() {
  $labels = array(
      'name'                  => _x( 'Agenda', 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( 'Agenda', 'Post type singular name', 'textdomain' ),
      'menu_name'             => _x( 'Agenda', 'Admin Menu text', 'textdomain' ),
      'name_admin_bar'        => _x( 'Schedule', 'Add New on Toolbar', 'textdomain' ),
      'add_new'               => __( 'Add New', 'textdomain' ),
      'add_new_item'          => __( 'Add New Schedule', 'textdomain' ),
      'new_item'              => __( 'New Schedule', 'textdomain' ),
      'edit_item'             => __( 'Edit Schedule', 'textdomain' ),
      'view_item'             => __( 'View Schedule', 'textdomain' ),
      'all_items'             => __( 'All schedule', 'textdomain' ),
      'search_items'          => __( 'Search schedule', 'textdomain' ),
      'parent_item_colon'     => __( 'Parent schedule:', 'textdomain' ),
      'not_found'             => __( 'No schedule found.', 'textdomain' ),
      'not_found_in_trash'    => __( 'No schedule found in Trash.', 'textdomain' ),
      'featured_image'        => _x( 'Schedule Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'archives'              => _x( 'Schedule archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
      'insert_into_item'      => _x( 'Insert into Schedule', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this Schedule', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
      'filter_items_list'     => _x( 'Filter schedule list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
      'items_list_navigation' => _x( 'schedule list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
      'items_list'            => _x( 'schedule list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'schedule' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'menu_icon'           => 'dashicons-format-gallery',
      'supports'           => array( 'title', 'editor', 'page-attributes'),
  );

  register_post_type( 'schedule', $args );
}

add_action( 'init', 'schedule_init' );

?>

