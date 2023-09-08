<section class="international-section all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="category-title-wrapper">
                    <?php
                    // Define the category slug
                    $category_slug = 'prabhas-news';

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
                <div class="news-section-gap">
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
                                <?php if (has_tag()) { ?>
                                    <div class="time-tag">
                                        <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                    </div>
                                <?php }
                                ?>


                            </div>
                        </div>
                <?php endwhile;
                            endif; ?>
                    </div>
                </div>

                <div class="row">
                    <?php $args = array(
                        'category_name' => $category_slug,
                        'posts_per_page' => 2,
                        'offset' => 1
                    );
                    $arr_posts = new WP_Query($args);
                    if ($arr_posts->have_posts()) :
                        while ($arr_posts->have_posts()) :
                            $arr_posts->the_post();
                    ?>
                            <div class="col-lg-6 mt-3 mt-lg-3">
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
                                                <?php if (has_tag()) { ?>
                                                    <div class="time-tag">
                                                        <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                                    </div>
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
            <div class="col-lg-3 col-md-4">
                <?php if (is_active_sidebar('prabash-side')) : ?>
                    <div class="ad-sidebar">
                        <?php dynamic_sidebar('prabash-side'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('prabash')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('prabash'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>