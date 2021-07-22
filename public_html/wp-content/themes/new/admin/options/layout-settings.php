<?php
/*--------------LAYOUT SECTION----------------------*/

//home layout
Redux::setSection($opt_name, array(
    'title' => __('FrontPage', 'pmstnepal'),
    'desc' => __('Configure the home page layout ', 'pmstnepal'),
    'id' => 'home-layout',
//    'subsection' => true,
    'fields' => array(

     //Top Header Adverticement Section
        array(
            'id'       => 'top-header-add-section-start',
            'type'     => 'section',
            'title'    => __( 'Top Header Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the top header Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'top-header-add-section-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Advertisement', 'pmstnepal' ),
            'subtitle' => __( 'Select Advertisement to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'top-header-add-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		
		 //Man Header Adverticement Section
        array(
            'id'       => 'main-header-add-section-start',
            'type'     => 'section',
            'title'    => __( 'Main Header Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the top header Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'main-header-add-section-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Advertisement', 'pmstnepal' ),
            'subtitle' => __( 'Select Advertisement to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'main-header-add-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		//end
		
				//Full Adverticement Section 1
        array(
            'id'       => 'full-add-1-section-start',
            'type'     => 'section',
            'title'    => __( 'Full 1 Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the top header Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'full-add-1-section-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Advertisement', 'pmstnepal' ),
            'subtitle' => __( 'Select Advertisement to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'full-add-1-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		
		//Full Adverticement Section 2
        array(
            'id'       => 'full-add-2-section-start',
            'type'     => 'section',
            'title'    => __( 'Full 2 Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the top header Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'full-add-2-section-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Advertisement', 'pmstnepal' ),
            'subtitle' => __( 'Select Advertisement to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'full-add-2-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		
		//Full Adverticement Section 3
        array(
            'id'       => 'full-add-3-section-start',
            'type'     => 'section',
            'title'    => __( 'Full 3 Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the top header Section', 'pmstnepal'),
            'indent'   => true,
        ),
		array(
            'id'       => 'full-add-3-section-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Advertisement', 'pmstnepal' ),
            'subtitle' => __( 'Select Advertisement to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'full-add-3-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
       
	   //Sidebar Left Adverticement Section
        array(
            'id'       => 'side-add-2-section-start',
            'type'     => 'section',
            'title'    => __( 'Sidebar Left Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the Detail Side Top Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'side-add-2-section-id',
            'type'     => 'select',
            'data'     => 'posts',
			'multi'     => true,
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Sidebar Left', 'pmstnepal' ),
            'subtitle' => __( 'Select Sidebar Left to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'side-add-2-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		//Sidebar Left Adverticement Section
	   //Sidebar Right Adverticement Section
        array(
            'id'       => 'side-add-1-section-start',
            'type'     => 'section',
            'title'    => __( 'Sidebar Right Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the Detail Side Top Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'side-add-1-section-id',
            'type'     => 'select',
            'data'     => 'posts',
			//'multi'     => true,
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Sidebar Right', 'pmstnepal' ),
            'subtitle' => __( 'Select Sidebar Right to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'side-add-1-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		//Sidebar Right Adverticement Section




		
			   //Medium Adverticement Section 1
        array(
            'id'       => 'medium-add-section-start',
            'type'     => 'section',
            'title'    => __( 'Medium Advertisement', 'pmstnepal' ),
            'subtitle' => __('This will be displayed in the top header Section', 'pmstnepal'),
            'indent'   => true,
        ),
       
        array(
            'id'       => 'medium-add-section-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'advertisement' ),'posts_per_page' => -1),
            'title'    => __( 'Advertisement', 'pmstnepal' ),
            'subtitle' => __( 'Select Advertisement to link', 'pmstnepal' ),
        ),
        array(
            'id'     => 'medium-add-section-end',
            'type'   => 'section',
            'indent' => false,
        ),


		
        //Breaking Vieo Section
        array(
            'id'       => 'breaking-section-start',
            'type'     => 'section',
            'title'    => __( 'Breaking Video', 'pmstnepal' ),
            'subtitle' => __('This page will be displayed in the home page as Upcoming Events Section', 'pmstnepal'),
            'indent'   => true,
        ),
        
        array(
            'id'       => 'breaking-section-post-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'video' ),'posts_per_page' => 10),
            //'multi'     => true,
            //'sortable'  => true,
            'title'    => __( 'Breaking Video', 'pmstnepal' ),
            'subtitle' => __( 'Select Breaking Video to link', 'pmstnepal' ),
        ),
		array(
            'id' => 'video-iframe',
            'type' => 'textarea',
            'title' => __('Video Embed Code', 'pmstnepal'),
            'subtitle' => __('Embed Code of your Video', 'pmstnepal'),
            'placeholder' => 'Video Embed Code',
        ),
		array(
            'id' => 'short-text',
            'type' => 'text',
            'title' => __('Video short text', 'pmstnepal'),
            'subtitle' => __('Short Text of your Video', 'pmstnepal'),
            'placeholder' => 'Video Short Text',
        ),
        array(
            'id'     => 'breaking-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
		
		//Popular Video Section
        array(
            'id'       => 'popular-section-start',
            'type'     => 'section',
            'title'    => __( 'Popular Video', 'pmstnepal' ),
            'subtitle' => __('This page will be displayed in the home page as Upcoming Events Section', 'pmstnepal'),
            'indent'   => true,
        ),
        
        array(
            'id'       => 'popular-section-post-id',
            'type'     => 'select',
            'data'     => 'posts',
            'args'     => array( 'post_type' =>  array( 'video' ),'posts_per_page' => -1),
            'multi'     => true,
            'sortable'  => true,
            'title'    => __( 'Popular Video', 'pmstnepal' ),
            'subtitle' => __( 'Select Breaking Video to link', 'pmstnepal' ),
        ),
		
        array(
            'id'     => 'popular-section-end',
            'type'   => 'section',
            'indent' => false,
        ),

        //Tab Video Section
        array(
            'id'       => 'tabvideo-section-start',
            'type'     => 'section',
            'title'    => __( 'Tab Video', 'pmstnepal' ),
            'subtitle' => __('This page will be displayed in the home page as Upcoming Events Section', 'pmstnepal'),
            'indent'   => true,
        ),
        
        array(
            'id'       => 'tabvideo-section-post-id',
            'type'     => 'select',
            'data'     => 'categories',
            'args'     => array( 'taxonomy' => 'type','hide_empty'=> false),
            'multi'     => true,
            'sortable'  => true,
            'title'    => __( 'Tab Video', 'pmstnepal' ),
            'subtitle' => __( 'Select Breaking Video to link', 'pmstnepal' ),
        ),
		
        array(
            'id'     => 'tabvideo-section-end',
            'type'   => 'section',
            'indent' => false,
        ),

	//End Tab Vieo Section

        
       
       
    )

));


