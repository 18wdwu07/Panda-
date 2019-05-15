<?php

function add_event_post_type(){

    $labels = array(
		'name'               => _x( 'Events', 'post type general name', '18wdwu07Panda' ),
		'singular_name'      => _x( 'Event', 'post type singular name', '18wdwu07Panda' ),
		'menu_name'          => _x( 'Events', 'admin menu', '18wdwu07Panda' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', '18wdwu07Panda' ),
		'add_new'            => _x( 'Add New', 'event', '18wdwu07Panda' ),
		'add_new_item'       => __( 'Add New Event', '18wdwu07Panda' ),
		'new_item'           => __( 'New Event', '18wdwu07Panda' ),
		'edit_item'          => __( 'Edit Event', '18wdwu07Panda' ),
		'view_item'          => __( 'View Event', '18wdwu07Panda' ),
		'all_items'          => __( 'All Events', '18wdwu07Panda' ),
		'search_items'       => __( 'Search Events', '18wdwu07Panda' ),
		'parent_item_colon'  => __( 'Parent Events:', '18wdwu07Panda' ),
		'not_found'          => __( 'No events found.', '18wdwu07Panda' ),
		'not_found_in_trash' => __( 'No events found in Trash.', '18wdwu07Panda' )
	);


    $args = array(
        'labels' => $labels,
        'description' => 'A list of events which will be held',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-tickets',
        'supports' => array('title', 'thumbnail')
    );

    register_post_type('event', $args);
}
add_action('init', 'add_event_post_type');
