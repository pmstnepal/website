<?php
function pmstnepal_enqueue_styles(){
	/* main css */
	 wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('bootstrap');
	wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
	wp_enqueue_style('style');
	/*jquery & iscroll & dropdown */
	wp_enqueue_script('jquery');
    wp_register_script('vendor', get_template_directory_uri().'/assets/js/vendor/jquery-1.11.0.min.js' , array('jquery'),1.2, true );
	wp_enqueue_script('vendor');
	wp_enqueue_script( 'iscroll-min.js', '//cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.1/iscroll-min.js', array('jquery'), 5.1, true ); 
	wp_register_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js' , array('jquery'),1.2, true );
	wp_enqueue_script('bootstrapjs');
	wp_register_script('drawer', get_template_directory_uri().'/assets/js/jquery.drawer.min.js' , array('jquery'),1.2, true );
	wp_enqueue_script('drawer');
	wp_register_script('lightslider', get_template_directory_uri().'/assets/js/lightslider.min.js' , array('jquery'),1.12, true );
	wp_enqueue_script('lightslider');
	wp_register_script('plugins', get_template_directory_uri().'/assets/js/plugins.js' , array('jquery'),0.122, true );
	wp_enqueue_script('plugins');
	wp_register_script('main', get_template_directory_uri().'/assets/js/main.js' , array('jquery'),0.123, true );
	wp_enqueue_script('main');
	wp_register_script('ekko-lightbox', get_template_directory_uri().'/assets/js/ekko-lightbox.js' , array('jquery'),1.02, false );
	wp_enqueue_script('ekko-lightbox');

}
add_action('wp_enqueue_scripts','pmstnepal_enqueue_styles');