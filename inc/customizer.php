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
	$wp_customize->add_section( 'cd_colors' , array(
		'title'      => 'ISAP Settings',
		'priority'   => 30,
	) );
	$wp_customize->add_setting( 'background_color' , array(
		'default'     => '#43C6E4',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
		'label'        => 'Background Colors',
		'section'    => 'cd_colors',
		'settings'   => 'background_color',
	) ) );

	$wp_customize->add_setting( 'sample_default_media',
	array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	)
	);
	
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sample_default_media',
	array(
		'label' => __( 'Default Media Control' ),
		'description' => esc_html__( 'This is the description for the Media Control' ),
		'section' => 'cd_colors',
		'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
		'button_labels' => array( // Optional
			'select' => __( 'Select File' ),
			'change' => __( 'Change File' ),
			'default' => __( 'Default' ),
			'remove' => __( 'Remove' ),
			'placeholder' => __( 'No file selected' ),
			'frame_title' => __( 'Select File' ),
			'frame_button' => __( 'Choose File' ),
		)
	)
	) );

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
