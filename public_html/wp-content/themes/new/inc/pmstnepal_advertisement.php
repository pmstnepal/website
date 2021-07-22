<?php

/**

 * Contains the necessary code to create the admin section for the newsletter feature

 */



function pmstnepal_advertisement() {



// Set UI labels for Custom Post Type

    $labels = array(

        'name'                => _x( 'Advertisement', 'Post Type General Name', 'se' ),

        'singular_name'       => _x( 'Advertisement', 'Post Type Singular Name', 'se' ),

        'menu_name'           => __( 'Advertisement', 'se' ),

        'parent_item_colon'   => __( 'Parent Advertisement', 'se' ),

        'all_items'           => __( 'All Advertisement', 'se' ),

        'view_item'           => __( 'View Advertisement', 'se' ),

        'add_new_item'        => __( 'Add New Advertisement', 'se' ),

        'add_new'             => __( 'Add New Advertisement', 'se' ),

        'edit_item'           => __( 'Edit Advertisement', 'se' ),

        'update_item'         => __( 'Update Advertisement', 'se' ),

        'search_items'        => __( 'Search Advertisement', 'se' ),

        'not_found'           => __( 'Not Found', 'se' ),

        'not_found_in_trash'  => __( 'Not found in Trash', 'se' ),

    );



// Set other options for Custom Post Type



    $args = array(

        'label'               => __( 'advertisement', 'se' ),

        'labels'              => $labels,

        // Features this CPT supports in Post Editor

        'supports'            => array( 'title'),

        /* A hierarchical CPT is like Pages and can have

        * Parent and child items. A non-hierarchical CPT

        * is like Posts.

        */

        'hierarchical'        => false,

        'public'              => true,

        'show_ui'             => true,

        'show_in_menu'        => true,

        'show_in_nav_menus'   => true,

        'show_in_admin_bar'   => true,

        'menu_position'       => 5,

        'can_export'          => true,

        'has_archive'         => true,

        'exclude_from_search' => false,

        'publicly_queryable'  => true,

        'capability_type'     => 'post',

    );



    // Registering your Custom Post Type

    register_post_type( 'advertisement', $args );



}



/* Hook into the 'init' action so that the function

* Containing our post type registration is not

* unnecessarily executed.

*/



add_action( 'init', 'pmstnepal_advertisement', 0 );







