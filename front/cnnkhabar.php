<section class="international-section all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="category-title-wrapper">
                    <h2>सिएनएन खबर</h2>
                    <a href="/category/cnn-khabar/" class="more_btn">सबै<i class="fas fa-list"></i></a>
                </div>
                <div class="news-section-gap">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php $args = array(
                                'category_name' => 'cnn-khabar',
                                'posts_per_page' => 1
                            );
                            $arr_posts = new WP_Query($args);
                            if ($arr_posts->have_posts()) :
                                while ($arr_posts->have_posts()) :
                                    $arr_posts->the_post();
                            ?>
                                    <div class="desh-single-news international-single">
                                        <div class="image-box">
                                            <a href="<?php the_permalink(); ?>" class="desh_single_image">
                                                <?php the_post_thumbnail() ?>
                                            </a>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="desh-single-news international-single">
                                <a href="<?php the_permalink(); ?>" class="desh_single_title">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <p><?php echo wp_trim_words(get_the_content(), 50); ?></p>

                                <div class="time-tag">
                                    <span class="time">
                                        <i class="far fa-clock"></i><?php echo get_the_date(); ?>
                                    </span>
                                    <?php if (has_tag()) { ?>
                                        <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                    <?php }                                        ?>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                            endif; ?>
                    </div>
                </div>

                <?php if (is_active_sidebar('cnn-khabar-ad')) : ?>
                    <div class="ad_wrapper">
                        <?php dynamic_sidebar('cnn-khabar-ad'); ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <?php $args = array(
                        'category_name' => 'cnn-khabar',
                        'posts_per_page' => 6,
                        'offset' => 1
                    );
                    $arr_posts = new WP_Query($args);
                    if ($arr_posts->have_posts()) :
                        while ($arr_posts->have_posts()) :
                            $arr_posts->the_post();
                    ?>
                            <div class="col-lg-6 mt-3 mt-lg-4">
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
                                                    <?php }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="category-title-wrapper">
                    <h2>CNN Express</h2>
                    <a href="/category/cnn-express/" class="more_btn">सबै<i class="fas fa-list"></i></a>
                </div>
                <?php $args = array(
                    'category_name' => 'cnn-express',
                    'posts_per_page' => 2
                );
                $arr_posts = new WP_Query($args);
                if ($arr_posts->have_posts()) :
                    while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
                ?>
                        <div class="aside-news">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="<?php the_permalink(); ?>" class="samachar_box">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="samachar_box">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <div class="time-tag">
                                        <?php if (has_tag()) { ?>
                                            <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                        <?php }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
                <div class="facebook-container">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcnnexpressnews%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<?php if (is_active_sidebar('cnnkhabar')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('cnnkhabar'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>