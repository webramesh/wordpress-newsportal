<?php

/**
 * dristi Theme Customizer
 *
 * @package dristi
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dristi_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'dristi_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'dristi_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_panel('home_page_panel', array(
		'title' => 'Home Page',
		'description' => 'Setting up your home page here',
	));

	$wp_customize->add_setting('Footer_logo'); // Add setting for logo uploader

	// Add control for logo uploader (actual uploader)
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
		'label'    => __('Footer Logo', 'news'),
		'section'  => 'title_tagline',
		'settings' => 'Footer_logo',
	)));
}
add_action('customize_register', 'dristi_customize_register');



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function dristi_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function dristi_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dristi_customize_preview_js()
{
	wp_enqueue_script('dristi-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'dristi_customize_preview_js');

require get_template_directory() . '/inc/customizer/customizer-library/customizer-library.php';
require get_template_directory() . '/inc/customizer/customizer-options.php';
require get_template_directory() . '/inc/customizer/styles.php';
