<?php


function register_my_menu(){
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function portfolio_script_styles(){
	
	//Add Jquery
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, '1.10.2', true);
	wp_enqueue_script('jquery');

	//Add Javascripts
	wp_register_script('plugin-js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), false, true);
	wp_enqueue_script('plugin-js');

	wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

		//Localize Scripts
		$php_array = array( 'admin_ajax' => admin_url( 'admin-ajax.php' ) );
		wp_localize_script( 'main-js', 'php_array', $php_array );

	wp_enqueue_script('main-js');
}
add_action( 'wp_enqueue_scripts', 'portfolio_script_styles' );


function get_post_infos() {
	die("coucou");
}
add_action( 'wp_ajax_get_post_infos', 'get_post_infos' );
add_action( 'wp_ajax_nopriv_get_post_infos', 'get_post_infos' );