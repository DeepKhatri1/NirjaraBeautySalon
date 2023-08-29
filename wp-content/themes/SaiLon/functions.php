<?php

register_nav_menus(
    array('primary-menu'=>'Top Menu'),
);

// Theme Logo
add_theme_support( 'custom-logo' );



// Enable custom header support
add_theme_support( 'custom-header' );


// Include INC bootstrapmenu.php
require get_template_directory(). '/inc/bootstrapmenu.php';


// For supporting featurd Image
function child_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );


// SOCIAL MEDIA LINKS

function custom_theme_customize_register($wp_customize) {
	// Create a new section for social media links
	$wp_customize->add_section('social_media_section', array(
	  'title' => __('Social Media Links', 'custom-theme'),
	  'priority' => 30,
	));
  
	// Create a setting for each social media link
	$wp_customize->add_setting('facebook_link', array(
	  'default' => '',
	  'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('instagram_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	  ));
	$wp_customize->add_setting('tiktok_link', array(
	  'default' => '',
	  'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('youtube_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	  ));

  
	// Add a control for each social media link setting
	$wp_customize->add_control('facebook_link_control', array(
	  'label' => __('Facebook Link', 'custom-theme'),
	  'section' => 'social_media_section',
	  'settings' => 'facebook_link',
	  'type' => 'text',
	));
	$wp_customize->add_control('tiktok_link_control', array(
	  'label' => __('tiktok Link', 'custom-theme'),
	  'section' => 'social_media_section',
	  'settings' => 'tiktok_link',
	  'type' => 'text',
	));
	$wp_customize->add_control('instagram_link_control', array(
		'label' => __('Instagram Link', 'custom-theme'),
		'section' => 'social_media_section',
		'settings' => 'instagram_link',
		'type' => 'text',
	));
	$wp_customize->add_control('youtube_link_control', array(
		'label' => __('Youtube Link', 'custom-theme'),
		'section' => 'social_media_section',
		'settings' => 'youtube_link',
		'type' => 'text',
	));
  }
  add_action('customize_register', 'custom_theme_customize_register');

//   =========================================================================================
  

// About US Main Page Customization++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function about_us_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('about_us', array(
		'title'      => __('About Us (Main Page)', 'nirjara'),
		'priority'   => 30,
	));


	// Add a text field
	$wp_customize->add_setting('landing_about_us', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('landing_about_us', array(
		'label'    => __('Add About Us in Main Page', 'nirjara'),
		'section'  => 'about_us',
		'settings' => 'landing_about_us',
		'type'     => 'textarea',
	));
}
add_action('customize_register', 'about_us_customize');





// Background Image_____________________________________________________________________________________
function background_image_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('background_image', array(
		'title'      => __('Background Image', 'nirjara'),
		'priority'   => 30,
	));

	// Add BG Image for Testimonial
	$wp_customize->add_setting('testimonial_background_image', array(
		'default'   => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_background_image', array(
		'label'    => __('Testimonial Background Image', 'nirjara'),
		'section'  => 'background_image',
		'settings' => 'testimonial_background_image',
	)));

	// Background Image for Contact
	$wp_customize->add_setting('contact_background_image', array(
		'default'   => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_background_image', array(
		'label'    => __('Contact Form Background Image', 'nirjara'),
		'section'  => 'background_image',
		'settings' => 'contact_background_image',
	)));

	// Background Image for Other Page
	$wp_customize->add_setting('other_background_image', array(
		'default'   => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'other_background_image', array(
		'label'    => __('Background Image for Other Page', 'nirjara'),
		'section'  => 'background_image',
		'settings' => 'other_background_image',
	)));

}
add_action('customize_register', 'background_image_customize');
// ______________________________________________________________________________________________________________________


// Opening Hour----------------------------------------
function salon_information_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('salon_information', array(
		'title'      => __('Salon Information', 'nirjara'),
		'priority'   => 30,
	));


	// Add a text field
	$wp_customize->add_setting('opening_time', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('opening_time', array(
		'label'    => __('Opening Time', 'nirjara'),
		'section'  => 'salon_information',
		'settings' => 'opening_time',
		'type'     => 'text',
	));

	// Add a textarea field
	$wp_customize->add_setting('opening_days', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('opening_days', array(
		'label'    => __('Salon Opening Days', 'nirjara'),
		'section'  => 'salon_information',
		'settings' => 'opening_days',
		'type'     => 'text',
	));

	// Add Phone Information
	// Add a text field
	$wp_customize->add_setting('phone_number', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('phone_number', array(
		'label'    => __('Phone/ Mobile Number', 'nirjara'),
		'section'  => 'salon_information',
		'settings' => 'phone_number',
		'type'     => 'text',
	));

	// Add Salon Location
	// Add a new section
	$wp_customize->add_section('location', array(
		'title'      => __('Salons Loaction', 'nirjara'),
		'priority'   => 30,
	));


	// Add a text field
	$wp_customize->add_setting('salons_location', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('salons_loaction', array(
		'label'    => __('Salons Location', 'nirjara'),
		'section'  => 'salon_information',
		'settings' => 'salons_location',
		'type'     => 'text',
	));

	// Add Salon Email
	// Add a new section
	$wp_customize->add_section('email', array(
		'title'      => __('Salons Email', 'nirjara'),
		'priority'   => 30,
	));


	// Add a text field
	$wp_customize->add_setting('salons_email', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('salons_email', array(
		'label'    => __('Salons Email', 'nirjara'),
		'section'  => 'email',
		'settings' => 'salon_information',
		'type'     => 'text',
	));


	// Add Salon Aim
	$wp_customize->add_section('aim', array(
		'title'      => __('Our Aim', 'nirjara'),
		'priority'   => 30,
	));


	// Add a text field
	$wp_customize->add_setting('salons_aim', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('salons_aim', array(
		'label'    => __('Our Aim', 'nirjara'),
		'section'  => 'salon_information',
		'settings' => 'salons_aim',
		'type'     => 'textarea',
	));

	// Add Email of Salon
	// Add a text field
	$wp_customize->add_setting('salons_email', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('salons_email', array(
		'label'    => __('Salons Email', 'nirjara'),
		'section'  => 'salon_information',
		'settings' => 'salons_email',
		'type'     => 'text',
	));



}
add_action('customize_register', 'salon_information_customize');
// Salon Information customization end-------------------------------------


// Phone Number Customization----------------------------------------
// function phone_customize($wp_customize)
// {
// 	// Add a new section
// 	$wp_customize->add_section('phone', array(
// 		'title'      => __('SALON Mobile/ Phone Number', 'nirjara'),
// 		'priority'   => 30,
// 	));


// 	// Add a text field
// 	$wp_customize->add_setting('phone_number', array(
// 		'default'   => '',
// 		'transport' => 'postMessage',
// 	));

// 	$wp_customize->add_control('phone_number', array(
// 		'label'    => __('Phone/ Mobile Number', 'nirjara'),
// 		'section'  => 'phone',
// 		'settings' => 'phone_number',
// 		'type'     => 'text',
// 	));

// }
// add_action('customize_register', 'phone_customize');
// Phone Number customization end-------------------------------------



// ________________________________________________________________________________________________



// Location Customization----------------------------------------
function location_customize($wp_customize)
{
	// Add a new section
	// $wp_customize->add_section('location', array(
	// 	'title'      => __('Salons Loaction', 'nirjara'),
	// 	'priority'   => 30,
	// ));


	// // Add a text field
	// $wp_customize->add_setting('salons_location', array(
	// 	'default'   => '',
	// 	'transport' => 'postMessage',
	// ));

	// $wp_customize->add_control('salons_loaction', array(
	// 	'label'    => __('Salons Location', 'nirjara'),
	// 	'section'  => 'location',
	// 	'settings' => 'salons_location',
	// 	'type'     => 'text',
	// ));

}
// add_action('customize_register', 'location_customize');
// Locaton customization end-------------------------------------


// Email Customization----------------------------------------
// function email_customize($wp_customize)
// {
// 	// Add a new section
// 	$wp_customize->add_section('email', array(
// 		'title'      => __('Salons Email', 'nirjara'),
// 		'priority'   => 30,
// 	));


// 	// Add a text field
// 	$wp_customize->add_setting('salons_email', array(
// 		'default'   => '',
// 		'transport' => 'postMessage',
// 	));

// 	$wp_customize->add_control('salons_email', array(
// 		'label'    => __('Salons Email', 'nirjara'),
// 		'section'  => 'email',
// 		'settings' => 'salons_email',
// 		'type'     => 'text',
// 	));

// }
// add_action('customize_register', 'email_customize');
// Email customization end-------------------------------------

// Aim Customization----------------------------------------
// function aim_customize($wp_customize)
// {
// 	// Add a new section
// 	$wp_customize->add_section('aim', array(
// 		'title'      => __('Our Aim', 'nirjara'),
// 		'priority'   => 30,
// 	));


// 	// Add a text field
// 	$wp_customize->add_setting('salons_aim', array(
// 		'default'   => '',
// 		'transport' => 'postMessage',
// 	));

// 	$wp_customize->add_control('salons_aim', array(
// 		'label'    => __('Our Aim', 'nirjara'),
// 		'section'  => 'aim',
// 		'settings' => 'salons_aim',
// 		'type'     => 'textarea ',
// 	));

// }
// add_action('customize_register', 'aim_customize');
// Email customization end-------------------------------------



?>


