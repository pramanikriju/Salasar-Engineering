<?php

/*
* Hide admn bar
*/
show_admin_bar(false);

/*
* Add menu to theme
*
*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

/*
* Add css and js files to header
*
*/
function bizz_scripts() {
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'bizz_scripts' );

// Add footer scripts
function bizz_footer_scripts() {
    wp_register_script( 'jquery111', get_template_directory_uri() . '/js/vendors/jquery/jquery.min.js','','', true );
	wp_register_script( 'popper.min', get_template_directory_uri() . '/js/vendors/wow.min.js','','', true );
	wp_register_script( 'bootstrap.min', get_template_directory_uri() . '/js/vendors/bootstrap.min.js','','', true );
	wp_register_script( 'mega_menu', get_template_directory_uri() . '/js/vendors/own-menu.js','','', true );
	wp_register_script( 'jquery.sticky', get_template_directory_uri() . '/js/vendors/jquery.sticky.js','','', true );
	wp_register_script( 'revolution', get_template_directory_uri() . '/js/vendors/owl.carousel.min.js','','', true );
	wp_register_script( 'themepunch-tools', get_template_directory_uri() . '/rs-plugin/js/jquery.tp.t.min.js','','', true );
	wp_register_script( 'themepunch-revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.tp.min.js','','', true );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js','','', true );
    
    wp_enqueue_script(array('jquery111', 'popper.min', 'bootstrap.min', 'mega_menu', 'jquery.sticky', 'revolution', 'themepunch-tools', 'themepunch-revolution', 'main'));
}
add_action( 'wp_enqueue_scripts', 'bizz_footer_scripts' );


// Activate widget
function quickchic_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar 1', 'quickchic' ),
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
}
add_action( 'init', 'quickchic_widgets_init' );


