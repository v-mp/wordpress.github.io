<?php
function register_styles() {
	// wp_register_style('bootstrap-reboot', get_template_directory_uri() .'/attachment/css/bootstrap-reboot.min.css');
	//   wp_enqueue_style('bootstrap-reboot');
	wp_register_style('bootstrap', get_template_directory_uri() .'/attachment/css/bootstrap.min.css');
	  wp_enqueue_style('bootstrap');
	wp_register_style('style', get_template_directory_uri() .'/style.css');
	  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','register_styles');

function load_my_script(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() .'/attachment/js/jquery-3.3.1.min.js');
	wp_enqueue_script('jquery');
	wp_register_script('js', get_template_directory_uri() .'/attachment/js/index.js');
	wp_enqueue_script('js');
	wp_register_script('bootstrap', get_template_directory_uri() .'/attachment/js/bootstrap.min.js');
	wp_enqueue_script('bootstrap');
	wp_register_script('search', get_template_directory_uri() .'/attachment/js/search.js');
	wp_enqueue_script('search');
}
add_action('wp_enqueue_scripts','load_my_script');
add_theme_support( 'post-thumbnails' );
remove_filter('template_redirect', 'redirect_canonical'); 
