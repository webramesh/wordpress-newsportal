<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dristi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dristi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Header Ads', 'dristi' ),
			'id'            => 'header-ads',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Banner Below Menu', 'dristi' ),
			'id'            => 'banner-ads',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Sub Banner', 'dristi' ),
			'id'            => 'below-sub-banner',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Banner', 'dristi' ),
			'id'            => 'below-banner',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below News', 'dristi' ),
			'id'            => 'below-mainnews',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Main News Side-Ad', 'dristi' ),
			'id'            => 'main-side',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Feature News', 'dristi' ),
			'id'            => 'below-features',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below International', 'dristi' ),
			'id'            => 'international',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Health', 'dristi' ),
			'id'            => 'health',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Sports', 'dristi' ),
			'id'            => 'sports',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Sports Side-Ad', 'dristi' ),
			'id'            => 'sports-side',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Entertainment', 'dristi' ),
			'id'            => 'entertainment',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Interview', 'dristi' ),
			'id'            => 'interview',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);


	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Stock', 'dristi' ),
			'id'            => 'stock',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Economy', 'dristi' ),
			'id'            => 'economy',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Different World', 'dristi' ),
			'id'            => 'different-world',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Prabash', 'dristi' ),
			'id'            => 'prabash',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Prabash Side', 'dristi' ),
			'id'            => 'prabash-side',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Below Video', 'dristi' ),
			'id'            => 'video',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Inner Page Banner', 'dristi' ),
			'id'            => 'inner-banner',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="header-small-ads widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Inner Page Side', 'dristi' ),
			'id'            => 'inner-side-ad',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar( 
		array(
			'name'          => esc_html__( 'Inner Page Side Below latest', 'dristi' ),
			'id'            => 'single-page-side-below-latest',
			'description'   => esc_html__( 'Add widgets here.', 'dristi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	
}
add_action( 'widgets_init', 'dristi_widgets_init' );