<section class="desh-section all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="category-title-wrapper">
                    <h2>स्टक मार्केट</h2>
                    <a href="/category/stock-market/" class="more_btn">सबै<i class="fas fa-list"></i></a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php $args = array(
                            'category_name' => 'stock-market',
                            'posts_per_page' => 1
                        );
                        $arr_posts = new WP_Query($args);
                        if ($arr_posts->have_posts()) :
                            while ($arr_posts->have_posts()) :
                                $arr_posts->the_post();
                        ?>
                                <div class="desh-single-news">
                                    <div class="image-box">
                                        <a href="<?php the_permalink(); ?>" class="desh_single_image">
                                            <?php the_post_thumbnail() ?>
                                        </a>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="desh_single_title">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <div class="time-tag">
                                        <span class="time">
                                            <i class="far fa-clock"></i><?php echo get_the_date(); ?>
                                        </span>
                                        <?php if (has_tag()) { ?>
                                            <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                        <?php } ?>
                                    </div>
                                    <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <?php $args = array(
                            'category_name' => 'stock-market',
                            'posts_per_page' => 3,
                            'offset' => 1
                        );
                        $arr_posts = new WP_Query($args);
                        if ($arr_posts->have_posts()) :
                            while ($arr_posts->have_posts()) :
                                $arr_posts->the_post();
                        ?>
                                <div class="news-box">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <a href="<?php the_permalink(); ?>" class="desh-small-news international-small-news">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="desh-small-title">
                                                <a href="<?php the_permalink(); ?>" class="desh-small-news international-small-news">
                                                    <h3><?php the_title(); ?></h3>
                                                </a>
                                                <div class="time-tag">
                                                    <span class="time">
                                                        <i class="far fa-clock"></i><?php echo get_the_date(); ?>
                                                    </span>
                                                    <?php if (has_tag()) { ?>
                                                        <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="category-title-wrapper">
                    <h2>Announcement</h2>
                    <a href="/category/announcement/" class="more_btn">सबै<i class="fas fa-list"></i></a>
                </div>
                <div class="interview_small">
                    <?php $args = array(
                        'category_name' => 'announcement',
                        'posts_per_page' => 5
                    );
                    $arr_posts = new WP_Query($args);
                    if ($arr_posts->have_posts()) :
                        while ($arr_posts->have_posts()) :
                            $arr_posts->the_post();
                    ?>
                            <div class="aside-news-horizontal">
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="desh-small-title interview-small-title">
                                            <a href="<?php the_permalink(); ?>" class="desh-small-news interview-small-news">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                            <?php if (has_tag()) { ?>
                                                <div class="time-tag">
                                                    <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('stock')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('stock'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>