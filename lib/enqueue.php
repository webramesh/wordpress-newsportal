<?php

/**
 * Enqueue scripts and styles.
 */
function dristi_scripts() {

    wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/css/font.css', _S_VERSION );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', _S_VERSION );
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.min.css', _S_VERSION );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', _S_VERSION );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', _S_VERSION );
     wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', _S_VERSION );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', _S_VERSION );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', _S_VERSION );
    wp_enqueue_style( 'dristi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dristi-style', 'rtl', 'replace' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'dristi-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dristi_scripts' );
