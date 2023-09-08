<section class="international-section all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="category-title-wrapper">
                    <?php
                    // Define the category slug
                    $category_slug = 'video';

                    // Retrieve the category object by slug
                    $category = get_category_by_slug($category_slug);

                    if ($category) {
                        // Get the category name and URL
                        $category_name = $category->name;
                        $category_url = get_category_link($category->term_id);
                    ?>
                        <h2><?php echo esc_html($category_name); ?></h2>
                    <?php } else { ?>
                        <h2><?php single_cat_title(); ?></h2>
                    <?php } ?>
                    <a href="<?php echo esc_url($category_url); ?>" class="more_btn">सबै <i class="fas fa-list"></i></a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php $args = array(
                            'category_name' => $category_slug,
                            'posts_per_page' => 1
                        );
                        $arr_posts = new WP_Query($args);
                        if ($arr_posts->have_posts()) :
                            while ($arr_posts->have_posts()) :
                                $arr_posts->the_post();
                        ?>
                                <div class="desh-single-news international-single">
                                    <div class="youtube-player" data-id="<?php echo the_field('video_id'); ?>"></div>
                                    <a href="<?php the_permalink(); ?>" class="desh_single_title">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
                        <?php endwhile;
                        endif; ?>
                        <div class="outer">
                            <div class="breaking-ribbon">
                                <h5>More VIDEOS</h5>
                            </div>
                            <div class="news-on-air">
                                <ul>
                                    <li>
                                        <h5><span class="youtube-icon"><i class="fas fa-video"></i></span>
                                            <a href="#" target="_blank">Watch us on Youtube</a>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <?php $args = array(
                                'category_name' => $category_slug,
                                'posts_per_page' => 4,
                                'offset' => 1
                            );
                            $arr_posts = new WP_Query($args);
                            if ($arr_posts->have_posts()) :
                                while ($arr_posts->have_posts()) :
                                    $arr_posts->the_post();
                            ?>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="youtube-player" data-id="<?php echo the_field('video_id'); ?>"></div>
                                        <a href="<?php the_permalink(); ?>" class="samachar_box international_box">
                                            <h3><?php the_title(); ?> </h3>
                                        </a>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="long-ad-section">
    <div class="container">
        <?php if (is_active_sidebar('video')) : ?>
            <div class="ad_wrapper">
                <?php dynamic_sidebar('video'); ?>
            </div>
        <?php endif; ?>
    </div>
</section>