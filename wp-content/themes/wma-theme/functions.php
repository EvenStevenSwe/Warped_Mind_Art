<?php

//Function that stores all css styles
function load_styles() {
	wp_enqueue_style('style.css', get_template_directory_uri() .'/style.css');
}

function font_awesome() {
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

//Function for Google fonts
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Dosis', false );
}

//Adds Bootstrap to this theme
function bootstrapstarter_enqueue_styles() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	$dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
	$dependencies = array('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
	wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
}

//Function that stores all scripts
function load_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('showhide.js', get_template_directory_uri() . '/assets/js/showhide.js', array('jquery'), '1.0.0', false);
	wp_enqueue_script('jquery.js', get_template_directory_uri() . '/assets/js/jQuery.js', array('jquery'), false);

}

//Function for custom widgets with footer & header menu
function wma_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'wma' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wma' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'wma' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wma' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'wma' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wma' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'wma' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wma' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'wma' ),
		'id'            => 'header-menu',
		'description'   => esc_html__( 'Add widgets here.', 'wma' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}

//Executes and loads all of the css styles
add_action('wp_enqueue_scripts', 'load_styles');

add_action('wp_enqueue_style', 'font_awesome');

//Loads Google fonts
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts');

//Executes and loads all of the scripts
add_action('wp_enqueue_scripts', 'load_scripts');

//Executes and adds the custom menu
add_action( 'init', 'wpb_custom_main_menu' );

//Executes and adds the mobile menu
//add_action( 'after_setup_theme', 'wma_mobile_menu' );

//Add custom widgets
add_action( 'widgets_init', 'wma_widgets_init');

//Add bootstrap
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );



