<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dristi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=63afe434caf2ee001a714b97&product=sop' async='async'></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dristi' ); ?></a>

	
<header id="header">
    <div class="header-top-bar">
        <div class="container">
            <div class="header_date">
                <div class="header_date_wrapper">
                    <div class="date_side">
                        <p><?php echo do_shortcode('[ndu_today_date]');?></p>
                    
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <div class="top_header">
        <div class="container">
            <div class="top_head_wrapp">
                <div class="logo">
                    <?php 
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else;
                        
                    ?>
                </div>

                <?php if (is_active_sidebar('header-ads')) : ?>
                <div class="top_header_image">
                    <?php dynamic_sidebar('header-ads'); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="main_header">
        <div class="container">
            <div class="main_head_wrapp">
                <span class="ham_menu"><i class="fas fa-bars"></i></span>
                <nav class="main_nav">
                    <span class="close_btn"><i class="fas fa-arrow-left"></i></span>
                    
                    </ul>
                    <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'main-menu'
                        ));
                    ?>
                </nav>
                <div class="nav_right">
                    
                    
                    <div class="search-wrapper">
                       <!-- <span class="search"><i class="fa fa-search" aria-hidden="true"></i></span> -->
                        <div class="search-toggle closed">
                            <button class="search-icon icon-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <button class="search-icon icon-close">X</button>
                        </div>
                        <div class="search-container">
                            <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="text" name="s" value="<?php the_search_query(); ?>" id="search-terms" placeholder="Enter Keywords...">
                                <button class="search-icon search-btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fresh_news">
            <div class="fresh_inner">
                <div class="container">
                    <div class="row">
                        <?php
                                $args = array( 'numberposts' => 9 );
                                $lastposts = get_posts( $args );
                                foreach($lastposts as $post) : setup_postdata($post); 
                            ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="<?php the_permalink();?>" class="fresh-news-title">
                                <?php the_post_thumbnail();?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                               
                        </div>
                        <?php endforeach; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>


