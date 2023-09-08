<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dristi
 */

?>

<footer class="all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer_wrapper">
                    <div class="footer-logo">
                        
                        <img src="<?php echo get_theme_mod( 'Footer_logo' ); ?>" alt="logo">
               
                    </div>
                    <?php
                        $the_query = new WP_Query('page_id=1683');
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <h3><?php the_title();?></h3>
                        <?php the_content();?>
                    <?php endwhile; ?>
                    <ul class="social_media">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter" ></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
                <div class="footer_wrapper">
                    <h3>Quick Links</h3>
                   
                    <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'quick-links',
                            'depth'           => 0,
                            'menu_class'      => 'links'
                        ));
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="footer_wrapper">
                    <?php
                        $the_query = new WP_Query('page_id=1569');
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <h3><?php the_title();?></h3>
                            <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="designed">
    <div class="container">
       <div class="design-wrapper">
            <p><?php echo date('Y'); ?> Copyrights Reserved @ <?php echo get_bloginfo( 'name' ); ?></p>
            <!-- <p>Designed &amp; Developed By:<a href="https://rameshdhakal.com.np" target="_blank">Ramesh Dhakal</a></p> -->
       </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
