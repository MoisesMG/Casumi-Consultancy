<?php
/**
 * Casumi Consulting Theme Customizer
 *
 * @package Casumi_Consulting
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function casumi_consulting_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	//$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting('phone_contact');
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_contact',
		array(
		'label' => 'Phone Contact',
		'section' => 'title_tagline',
		'settings' => 'phone_contact',) 
		) 
	);

	$wp_customize->add_setting('credits');
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'credits',
		array(
		'type' => 'textarea',
		'label' => 'Credits',
		'section' => 'title_tagline',
		'settings' => 'credits',) 
		) 
	);

	/*
	* Social Media Section
	* */
	$wp_customize->add_section('social_networks', array(
		'title' => __('Social Networks', 'casumi-consultancy'),
		'description' => __('Add here your social networks', 'casumi-consultancy'),
		'priority' => 120
	)); 
	$wp_customize->add_setting('twitter');
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter',
			array(
				'type' => 'url',
				'label' => 'Twitter',
				'section' => 'social_networks',
				'settings' => 'twitter'
			)
		)
	);
	$wp_customize->add_setting('facebook');
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook',
			array(
				'type' => 'url',
				'label' => 'Facebook',
				'section' => 'social_networks',
				'settings' => 'facebook'
			)
		)
	);
	$wp_customize->add_setting('google_plus');
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google_plus',
			array(
				'type' => 'url',
				'label' => 'Google Plus',
				'section' => 'social_networks',
				'settings' => 'google_plus'
			)
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'casumi_consulting_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'casumi_consulting_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'casumi_consulting_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function casumi_consulting_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function casumi_consulting_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function casumi_consulting_customize_preview_js() {
	wp_enqueue_script( 'casumi-consulting-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'casumi_consulting_customize_preview_js' );
