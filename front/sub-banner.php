<section class="single_news_section all-sec-padding">
    <div class="container">
        <?php
        $args = array(
            'posts_per_page' => 3, 
            'meta_query' => array(
                array(
                    'key' => 'sub_banner',
                    'value' => true,   
                ),
            ),
        );

        $arr_posts = new WP_Query($args);

        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
        ?>
                <div class="single_news_wrapper">
                    <a href="<?php the_permalink(); ?>" class="single_news_title">
                        <h1><?php the_title(); ?></h1>
                    </a>
                </div>
        <?php 
            endwhile; endif; 
            wp_reset_postdata();
        ?>
    </div>
</section>


<?php if (is_active_sidebar('below-sub-banner')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('below-sub-banner'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>