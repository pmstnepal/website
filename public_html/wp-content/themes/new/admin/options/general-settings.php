<?php

/*--------------GENERAL SECTION----------------------*/
//basic site setup
Redux::setSection($opt_name, array(
    'title' => __('Basic', 'pmstnepal'),
    'desc' => __('Basic Configuration Of Your Site.', 'pmstnepal'),
    'id' => 'basic-site-settings',
    'fields' => array(
        array(
            'id' => 'site-main-title',
            'type' => 'text',
            'title' => __('Site Title', 'pmstnepal'),
            'subtitle' => __('Title for your site', 'pmstnepal'),
            'placeholder' => 'Site Title',
        ),
        array(
            'id' => 'site-tagline',
            'type' => 'text',
            'title' => __('Site Tagline', 'pmstnepal'),
            'subtitle' => __('Tagline for your site', 'pmstnepal'),
            'placeholder' => 'Tagline',
        ),
        array(
            'id'       => 'site-favicon',
            'type'     => 'media',
            'title'    => __( 'Favicon', 'pmstnepal' ),
            'subtitle' => __( 'This will appear on the tab on your browser ', 'pmstnepal' ),
        ),
        array(
            'id'       => 'site-logo',
            'type'     => 'media',
            'title'    => __( 'Site Logo', 'pmstnepal' ),
            'subtitle' => __( 'This will appear as logo on your site', 'pmstnepal' ),
        ),
        
    )
));

//branding
Redux::setSection($opt_name, array(
    'title' => __('Branding', 'pmstnepal'),
    'desc' => __('Set Up Your Company Info Here.', 'pmstnepal'),
    'id' => 'branding',
    'fields' => array(
        //company intro
        array(
            'id' => 'company-name',
            'type' => 'text',
            'title' => __('Company Name', 'pmstnepal'),
            'subtitle' => __('Name of your company', 'pmstnepal'),
            'placeholder' => 'Company Name',
        ),
        array(
            'id' => 'company-tagline',
            'type' => 'text',
            'title' => __('Company Tagline', 'pmstnepal'),
            'subtitle' => __('Tagline for your company', 'pmstnepal'),
            'placeholder' => 'Company Tagline',
        ),
        array(
            'id' => 'company-description',
            'type' => 'textarea',
            'title' => __('Company Description', 'pmstnepal'),
            'subtitle' => __('Short description for your company', 'pmstnepal'),
            'placeholder' => 'Company description',
        ),
        array(
            'id' => 'company-reg-no',
            'type' => 'text',
            'title' => __('Company Regd No.', 'pmstnepal'),
            'subtitle' => __('Registration or Pan no of your company', 'pmstnepal'),
            'placeholder' => 'Company Registration No.',
        ),

        //primary address
        array(
            'id'       => 'primary-address-section-start',
            'type'     => 'section',
            'title'    => __( 'Address', 'pmstnepal' ),
            'subtitle' => __('Primary Address of your company', 'pmstnepal'),
            'indent'   => true,
        ),
        array(
            'id'       => 'primary-address-line-1',
            'type'     => 'text',
            'title'    => __( 'Address Line 1', 'pmstnepal' ),
        ),
        array(
            'id'       => 'primary-address-line-2',
            'type'     => 'text',
            'title'    => __( 'Address Line 2', 'pmstnepal' ),
        ),
        array(
            'id'       => 'primary-city',
            'type'     => 'text',
            'title'    => __( 'City', 'pmstnepal' ),
        ),
        array(
            'id'       => 'primary-state',
            'type'     => 'text',
            'title'    => __( 'State/Province/Region', 'pmstnepal' ),
        ),
        array(
            'id'       => 'primary-zip',
            'type'     => 'text',
            'title'    => __( 'Zip/Postal Code', 'pmstnepal' ),
        ),
        array(
            'id'       => 'primary-po-box',
            'type'     => 'text',
            'title'    => __( 'P.O. Box No', 'pmstnepal' ),
        ),
        array(
            'id'       => 'primary-country',
            'type'     => 'text',
            'title'    => __( 'Country', 'pmstnepal' ),
        ),
        array(
            'id'     => 'primary-address-section-end',
            'type'   => 'section',
            'indent' => false,
        ),

        //Primary Contact Info
        array(
            'id'       => 'primary-contact-info-section-start',
            'type'     => 'section',
            'title'    => __( 'Contact Info', 'pmstnepal' ),
            'subtitle' => __('Primary Contact Info of your company', 'pmstnepal'),
            'indent'   => true,
        ),
        array(
            'id' => 'primary-contact-person',
            'type' => 'text',
            'title' => __('Contact Person', 'pmstnepal'),
        ),
        array(
            'id'       => 'additional-contact-person',
            'type'     => 'multi_text',
            'sortable' => true,
            'title'    => __( 'Add Other Contact Persons', 'pmstnepal' ),
        ),
        array(
            'id' => 'primary-phone-no',
            'type' => 'text',
            'title' => __('Phone No.', 'pmstnepal'),
        ),
        array(
            'id'       => 'additional-phone-no',
            'type'     => 'multi_text',
            'sortable' => true,
            'title'    => __( 'Add Other Phone No.s', 'pmstnepal' ),
        ),
        array(
            'id' => 'primary-fax-no',
            'type' => 'text',
            'title' => __('Fax No.', 'pmstnepal'),
        ),
        array(
            'id' => 'primary-email',
            'type' => 'text',
            'title' => __('Email', 'pmstnepal'),
        ),
        array(
            'id'       => 'additional-email',
            'type'     => 'multi_text',
            'sortable' => true,
            'title'    => __( 'Add Other Emails', 'pmstnepal' ),
        ),
        array(
            'id'     => 'primary-contact-info-section-end',
            'type'   => 'section',
            'indent' => false,
        ),

        //primary opening hours info
        array(
            'id'       => 'primary-opening-info-section-start',
            'type'     => 'section',
            'title'    => __( 'Opening Info', 'pmstnepal' ),
            'subtitle' => __('Opening Info of your company', 'pmstnepal'),
            'indent'   => true,
        ),
        array(
            'id' => 'primary-opening-day',
            'type' => 'text',
            'indent' => true,
            'title' => __('Opening Days', 'pmstnepal'),
        ),
        array(
            'id' => 'primary-opening-hours',
            'type' => 'text',
            'indent' => true,
            'title' => __('Opening Hours', 'pmstnepal'),
        ),
        array(
            'id'     => 'primary-opening-info-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
        //social link info
        array(
            'id'       => 'social-link-info-section-start',
            'type'     => 'section',
            'title'    => __( 'Social Links Info', 'pmstnepal' ),
            'subtitle' => __('Social Links Info of your company', 'pmstnepal'),
            'indent'   => true,
        ),
        array(
            'id' => 'social-link-facebook',
            'type' => 'text',
            'indent' => true,
            'sortable' => true,
            'title' => __('Facebook', 'pmstnepal'),
        ),
        array(
            'id' => 'social-link-twitter',
            'type' => 'text',
            'sortable' => true,
            'indent' => true,
            'title' => __('Twitter', 'pmstnepal'),
        ),
        array(
            'id' => 'social-link-skype',
            'type' => 'text',
            'indent' => true,
            'sortable' => true,
            'title' => __('Skype', 'pmstnepal'),
        ),
        array(
            'id' => 'social-link-youtube',
            'type' => 'text',
            'indent' => true,
            'sortable' => true,
            'title' => __('Youtube', 'pmstnepal'),
        ),
        array(
            'id' => 'social-link-linkedin',
            'type' => 'text',
            'indent' => true,
            'sortable' => true,
            'title' => __('Linkedin', 'pmstnepal'),
        ),
        array(
            'id'       => 'additional-social-link',
            'type'     => 'multi_text',
            'sortable' => true,
            'title'    => __( 'Add Other Social Links', 'pmstnepal' ),
        ),
        array(
            'id'     => 'social-link-info-section-end',
            'type'   => 'section',
            'indent' => false,
        ),
    )
));