<?php
/*--------------Additional features SECTION----------------------*/
//custom code
Redux::setSection($opt_name, array(
    'title' => __('Advance Settings', 'pmstnepal'),
    'desc' => __('Use this only if you know what you are doing', 'pmstnepal'),
    'id' => 'custom-code',
    'fields' => array(
        array(
            'id'       => 'google-api-key',
            'type'     => 'text',
            'title' => __('Google API Key', 'pmstnepal'),
            'subtitle' => __('Key for using Google API Services', 'pmstnepal'),
        ),
        array(
            'id'       => 'custom-css-textarea',
            'type'     => 'ace_editor',
            'title' => __('Custom CSS', 'pmstnepal'),
            'subtitle' => __('Custom CSS for overriding default styles', 'pmstnepal'),
            'mode'     => 'css',
            'theme'    => 'monokai',
        ),
        array(
            'id' => 'google-analytics-code',
            'type' => 'ace_editor',
            'title' => __('Google Analytics Code', 'pmstnepal'),
            'subtitle' => __('Track your website using the google analytics code', 'pmstnepal'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
        ),
        array(
            'id' => 'custom-js',
            'type' => 'ace_editor',
            'title' => __('Custom JS', 'pmstnepal'),
            'subtitle' => __('Custom JS for overriding default styles', 'pmstnepal'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
        ),
    ),
));

