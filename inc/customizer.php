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

    // FOOTER SETTINGS
    $wp_customize->add_section( 'footer' , array(
        'title'      => 'Footer',
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'copyright_text' , array(
        'default'     => '(c) 2020 - All rights reserved. Theme by <a href="https://www.mobeenabdullah.com">Mobeen Abdullah</a>',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'vr_sanitize_html'
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
