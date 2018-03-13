<?php
function my_stylesheet()
{

wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','my_stylesheet' );

/*--------------------------Adding Bootstrap file--------------*/
function theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');




function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/a.js' );
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/b.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');

/* Add a function to register menus from dashboard */

function register_my_custom_menu()
{
    register_nav_menu(
    'primary',__('Menu for desktop-version')
    );
}

/* Add hook after_theme_setup to the register_my_custom_menu function */

add_action('after_setup_theme','register_my_custom_menu');



/* Add Customziable featue the theme */

function set_scrolling_text($wp_customize)
{
     // Add Scrolling Text Section 
		  $wp_customize->add_section('scrolling_text',array(
		  'title' => 'Scrolling Text'
		  ));
		  
		  // Add scrollig Text setting
		  
		  $wp_customize->add_setting('scrolling_text_setting',array(
		  'default' => 'EXPAND THE ART AND SCIENCE OF WHAT IS POSSIBLE'
		  ));
		  
		  // Add scrolling Text Control
		  
		  $wp_customize->add_control(new WP_Customize_Control(
		  $wp_customize,'scrolling_text_control',array(
		  'label' => 'Text',
		  'settings' => 'scrolling_text_setting',
		  'section' => 'scrolling_text'
		  )));
    $wp_customize->add_section('header_logo',array(
    'title' => 'LOGO'
    ));
    
    $wp_customize->add_setting('header_logo_setting',array());
    
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
		 $wp_customize,'header_logo_control',array(
		 'label' => 'Image',
		 'section' => 'header_logo',
		 'settings' => 'header_logo_setting',
		 'width' => 300,
		 'height' => 95
         )));
    /* Customizing the contact page email and phone number parts */
		  $wp_customize->add_section('email_and_phone',array(
		  'title' => 'Email And Phone'
		  ));
		  
		  // Add email setting
		  
		  $wp_customize->add_setting('email_setting',array(
		  'default' => 'info@rriskml.com'
		  ));

}



add_action('customize_register','set_scrolling_text');