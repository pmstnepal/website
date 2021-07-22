<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "pn_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'opt_name' => 'pn_options',
    'upn_cdn' => TRUE,
    'display_name' => 'PN Options',
    'display_version' => '1.0.0',
    'page_slug' => 'pn_options',
    'page_title' => 'PN Options',
    'update_notice' => TRUE,
    'intro_text' => 'Customize the theme to your needs.',
    'footer_text' => '',
    'admin_bar' => TRUE,
    'menu_type' => 'menu',
    'menu_title' => 'PMSTNEPAL Settings',
    'allow_sub_menu' => TRUE,
    'page_parent_post_type' => 'your_post_type',
    'customizer' => TRUE,
    'hints' => array(
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'duration' => '500',
                'event' => 'mouseleave unfocus',
            ),
        ),
    ),
    'output' => TRUE,
    'output_tag' => TRUE,
    'settings_api' => TRUE,
    'cdn_check_time' => '1440',
    'compiler' => TRUE,
    'page_permissions' => 'manage_options',
    'save_defaults' => TRUE,
    'show_import_export' => TRUE,
    'database' => 'options',
    'transient_time' => '3600',
    'network_sites' => TRUE,
    'footer_credit'    => 'Option Panel Developed By <a href="http://www.bestnepal.net">Best Nepal</a>',
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url' => 'https://www.facebook.com/pages/bestnepal',
    'title' => 'Like us on Facebook',
    'icon' => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url' => 'http://twitter.com/bestnepal',
    'title' => 'Follow us on Twitter',
    'icon' => 'el el-twitter'
);
$args['share_icons'][] = array(
    'url' => 'http://www.linkedin.com/company/bestnepal',
    'title' => 'Find us on LinkedIn',
    'icon' => 'el el-linkedin'
);

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

// Load the options/general-settings
if ( file_exists( dirname( __FILE__ ) . '/options/general-settings.php' ) ) {
    require_once dirname( __FILE__ ) . '/options/general-settings.php';
}

// Load the options/layout-settings
if ( file_exists( dirname( __FILE__ ) . '/options/layout-settings.php' ) ) {
    require_once dirname( __FILE__ ) . '/options/layout-settings.php';
}

// Load the options/styles-settings
if ( file_exists( dirname( __FILE__ ) . '/options/styles-settings.php' ) ) {
    require_once dirname( __FILE__ ) . '/options/styles-settings.php';
}


// Load the options/advance-settings
if ( file_exists( dirname( __FILE__ ) . '/options/advance-settings.php' ) ) {
    require_once dirname( __FILE__ ) . '/options/advance-settings.php';
}


// Load the options/additional-settings
//if ( file_exists( dirname( __FILE__ ) . '/options/additional-settings.php' ) ) {
//    require_once dirname( __FILE__ ) . '/options/additional-settings.php';
//}

/*
 * <--- END SECTIONS
 */
