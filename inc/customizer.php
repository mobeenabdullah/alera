<?php
/**
 * Alera Theme Customizer
 *
 * @package Alera
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function alera_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Removing Default Sections
	$wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('colors');

    // TOP BAR SETTINGS
    $wp_customize->add_panel('top_bar',array(
        'title'=>'Top Bar',
        'priority'=> 10,
    ));
    $wp_customize->add_section( 'contact_details' , array(
        'title'      => 'Contact Details',
        'priority'   => 11,
        'panel'      => 'top_bar'
    ) );
    $wp_customize->add_section( 'social_icons' , array(
        'title'      => 'Social Icons',
        'priority'   => 12,
        'panel'      => 'top_bar'
    ) );
    $wp_customize->add_setting( 'phone_number' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_setting( 'email_id' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_setting( 'twitter_username' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_setting( 'facebook_username' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_setting( 'instagram_username' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_setting( 'youtube_channel_url' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_number', array(
        'label'        => 'Phone Number',
        'section'    => 'contact_details',
        'settings'   => 'phone_number',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_id', array(
        'label'        => 'Email',
        'section'    => 'contact_details',
        'settings'   => 'email_id',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_username', array(
        'label'        => 'Twitter Username',
        'section'    => 'social_icons',
        'settings'   => 'twitter_username',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_username', array(
        'label'        => 'Facebook Username',
        'section'    => 'social_icons',
        'settings'   => 'facebook_username',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_username', array(
        'label'        => 'Instagram Username',
        'section'    => 'social_icons',
        'settings'   => 'instagram_username',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_channel_url', array(
        'label'        => 'YouTube Channel URL',
        'section'    => 'social_icons',
        'settings'   => 'youtube_channel_url',
    ) ) );

    // FEATURED AREA SETTINGS
    $wp_customize->add_section( 'featured_area' , array(
        'title'      => 'Featured Area',
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'featured_area_heading' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_area_heading', array(
        'label'        => 'Heading',
        'section'    => 'featured_area',
        'settings'   => 'featured_area_heading',
    ) ) );
    $wp_customize->add_setting( 'featured_area_description' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_area_description', array(
        'label'        => 'Description',
        'type'         => 'textarea',
        'section'    => 'featured_area',
        'settings'   => 'featured_area_description',
    ) ) );
    $wp_customize->add_setting( 'featured_area_background_image' , array(
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_area_background_image', array(
        'label'        => 'Background Image',
        'type'         => 'upload',
        'section'    => 'featured_area',
        'settings'   => 'featured_area_background_image',
    ) ) );


    // FOOTER SETTINGS
    $wp_customize->add_section( 'footer' , array(
        'title'      => 'Footer',
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'copyright_text' , array(
        'default'     => '(c) 2020 - All rights reserved. Theme by <a href="https://www.mobeenabdullah.com">Mobeen Abdullah</a>',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_vr_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright_text', array(
        'label'        => 'Copyright Text',
        'type'         => 'textarea',
        'section'    => 'footer',
        'settings'   => 'copyright_text',
    ) ) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'alera_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'alera_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'alera_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function alera_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function alera_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function alera_customize_preview_js() {
	wp_enqueue_script( 'alera-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'alera_customize_preview_js' );
