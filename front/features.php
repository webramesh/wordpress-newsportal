<section class="samachar-section all-sec-padding">
    <div class="container">
        <div class="category-title-wrapper">
            <?php
            // Define the category slug
            $category_slug = 'features';

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
            <?php
            $args = array(
                'category_name' => $category_slug,
                'posts_per_page' => 4
            );
            $arr_posts = new WP_Query($args);
            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="vertical-news-box">
                            <a href="<?php the_permalink(); ?>" class="samachar_box">
                                <?php the_post_thumbnail(); ?>
                                <h3><?php the_title(); ?></h3>
                                <?php if (has_tag()) { ?>
                                    <div class="time-tag">
                                        <span class="tag-title"><?php the_tags('', ' / ', ''); ?></span>
                                    </div>
                                <?php } ?>
                            </a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('below-features')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('below-features'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
