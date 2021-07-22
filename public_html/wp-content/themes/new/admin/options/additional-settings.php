<?php
/*--------------LAYOUT SECTION----------------------*/
Redux::setSection($opt_name, array(
    'title' => __('Additional Features', 'pmstnepal'),
    'id' => 'additional-features-setup',
    'desc' => __('Additional Features Setup For The Theme', 'pmstnepal'),
    'icon' => 'el el-home'
));

Redux::setSection( $opt_name, array(
    'title'      => __( 'Gallery', 'pmstnepal' ),
    'id'         => 'media-gallery',
    'desc'       => __( 'This uses the default wordpress gallery feature', 'pmstnepal' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-gallery',
            'type'     => 'gallery',
            'title'    => __( 'Add/Edit Gallery', 'pmstnepal' ),
            'subtitle' => __( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'pmstnepal' ),
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Gallery', 'pmstnepal' ),
    'id'         => 'media-gallery',
    'desc'       => __( 'This uses the default wordpress gallery feature', 'pmstnepal' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-gallery',
            'type'     => 'gallery',
            'title'    => __( 'Add/Edit Gallery', 'pmstnepal' ),
            'subtitle' => __( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'pmstnepal' ),
        ),
    )
) );