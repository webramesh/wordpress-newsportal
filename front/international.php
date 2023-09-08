<section class="desh-section all-sec-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-9 col-12">
                <div class="category-title-wrapper">
                    <?php
                    // Define the category slug
                    $category_slug = 'international';

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
                                        <?php }
                                        ?>
                                    </div>
                                    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <?php $args = array(
                            'category_name' => $category_slug,
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
                                            <a href="<?php the_permalink(); ?>" class="desh-small-news">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="desh-small-title">
                                                <a href="<?php the_permalink(); ?>" class="desh-small-news">
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
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-12">
                <div class="category-title-wrapper">
                    <?php
                    // Define the category slug
                    $category_slug = 'lifestyle';

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
                <?php $args = array(
                    'category_name' => $category_slug,
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
                                    <?php if (has_tag()) { ?>
                                        <div class="time-tag">
                                            <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('international')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('international'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>