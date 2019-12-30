<?php

/*
*
* Custom Post Type: Events
* Displayed on:     Home Page
* Name:             isap_events
*
 */

function ISAP_EVENTS_CPT() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                =>  'Events',
        'singular_name'       =>  'Event',
        'menu_name'           =>  'Events',
        'all_items'           =>  'All Events',
        'view_item'           =>  'View Event',
        'add_new_item'        =>  'Add New Event',
        'add_new'             =>  'Add New',
        'edit_item'           =>  'Edit Event',
        'update_item'         =>  'Update Event',
        'search_items'        =>  'Search Events',
        'not_found'           =>  'No Event Found',
        'not_found_in_trash'  =>  'No Event Found in Trash'
    );

// Set other options for Custom Post Type
    $args = array(
        'label'               =>  'Events',
        'description'         =>  'These events are visable on the home page',
        'labels'              =>  $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array(),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => true,
        'query_var'           => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-post-status',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        // 'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'post'
    );

    // Registering your Custom Post Type
    register_post_type( 'isap_events', $args );

}

/*
*
* Custom Post Type: Events
* Displayed on:     Home Page
* Name:             isap_companies
*
 */

add_action( 'init', 'ISAP_COMPANIES_CPT' );

function ISAP_COMPANIES_CPT() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                =>  'Companies',
            'singular_name'       =>  'Event',
            'menu_name'           =>  'Companies',
            'all_items'           =>  'All Companies',
            'view_item'           =>  'View Company',
            'add_new_item'        =>  'Add New Company',
            'add_new'             =>  'Add New',
            'edit_item'           =>  'Edit Company',
            'update_item'         =>  'Update Company',
            'search_items'        =>  'Search Companies',
            'not_found'           =>  'No Company Found',
            'not_found_in_trash'  =>  'No Company Found in Trash'
        );
    
    // Set other options for Custom Post Type
        $args = array(
            'label'               =>  'Companies',
            'description'         =>  'These companies are visable on the home page',
            'labels'              =>  $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'page-attributes', 'thumbnail'),
            // You can associate this CPT with a taxonomy or custom taxonomy.
            'taxonomies'          => array(),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => true,
            'query_var'           => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_icon'           => 'dashicons-admin-site-alt3',
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 8,
            // 'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => false,
            'capability_type'     => 'post'
        );
    
        // Registering your Custom Post Type
        register_post_type( 'isap_companies', $args );
    
    }
    
    add_action( 'init', 'ISAP_EVENTS_CPT' );