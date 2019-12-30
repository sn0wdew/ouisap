<?php
/**
 * ISAP Theme Theme Customizer
 *
 * @package ISAP_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */



 
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
	$wp_customize->add_section( 'isap_settings' , array(
		'title'      => 'ISAP Settings',
		'priority'   => 30,
	) );

	// Cover photo
	$wp_customize->add_setting( 'cover_photo', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'cover_photo', array(
		'label' => __( 'Home Page Cover Photo' ),
		'description' => esc_html__( 'This image will appear on the home page.' ),
		'section' => 'isap_settings',
		'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
		'button_labels' => array( // Optional
			'select' => __( 'Select Picture' ),
			'change' => __( 'Change Picture' ),
			'default' => __( 'Default' ),
			'remove' => __( 'Remove' ),
			'placeholder' => __( 'No picture selected' ),
			'frame_title' => __( 'Select Picture' ),
			'frame_button' => __( 'Choose Picture' ),
		) )
	) );

	// Homepage headline
	$wp_customize->add_setting( 'home_headline', array(
		'default' => 'Introduction',
		'transport' => 'refresh',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );
	$wp_customize->add_control( 'home_headline',
	array(
		'label' => __( 'Homepage Headline' ),
		'description' => esc_html__( 'This text appears below the cover photo.' ),
		'section' => 'isap_settings',
		'type' => 'text', // Can be either text, email, url, number, hidden, or date
		'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	)
	);

	// Homepage subtext
	$wp_customize->add_setting( 'home_subtext', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );
	
	$wp_customize->add_control( 'home_subtext', array(
		'label' => __( 'Homepage Subline text' ),
		'description' => esc_html__( 'This text appears below the headline on the home page.' ),
		'section' => 'isap_settings',
		'type' => 'textarea',
		'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	) );

	// Upcoming Events photo
	$wp_customize->add_setting( 'events_photo', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'events_photo', array(
		'label' => __( 'Events Cover Photo' ),
		'description' => esc_html__( 'This image will appear behind the events.' ),
		'section' => 'isap_settings',
		'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
		'button_labels' => array( // Optional
			'select' => __( 'Select Picture' ),
			'change' => __( 'Change Picture' ),
			'default' => __( 'Default' ),
			'remove' => __( 'Remove' ),
			'placeholder' => __( 'No picture selected' ),
			'frame_title' => __( 'Select Picture' ),
			'frame_button' => __( 'Choose Picture' ),
		) )
	) );

	// Contact email
	$wp_customize->add_setting( 'contact_email', array(
		'default' => 'contact@ouisap.com',
		'transport' => 'refresh',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );
	$wp_customize->add_control( 'contact_email',
	array(
		'label' => __( 'Contact Email' ),
		'description' => esc_html__( 'This email address appears at the bottom of the home page.' ),
		'section' => 'isap_settings',
		'type' => 'email', // Can be either text, email, url, number, hidden, or date
		'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	)
	);

	// Meeting Location
	$wp_customize->add_setting( 'meeting_loc', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );
	$wp_customize->add_control( 'meeting_loc',
	array(
		'label' => __( 'Meeting Location' ),
		'description' => esc_html__( 'This location appears at the bottom of the home page.' ),
		'section' => 'isap_settings',
		'type' => 'text', // Can be either text, email, url, number, hidden, or date
		'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	)
	);

}

function ouisap_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ouisap_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ouisap_customize_partial_blogdescription',
		) );
	}
	
}
add_action( 'customize_register', 'ouisap_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ouisap_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ouisap_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ouisap_customize_preview_js() {
	wp_enqueue_script( 'ouisap-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ouisap_customize_preview_js' );
