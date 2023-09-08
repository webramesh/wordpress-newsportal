<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dristi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="detail_page all-sec-padding">
        <div class="container">
            <?php if (is_active_sidebar('inner-banner')) : ?>
                <section class="long-ad-section">
                    <div class="ad_wrapper">
                        <?php dynamic_sidebar('inner-banner'); ?>
                    </div>
                </section>
            <?php endif; ?>
            <div class="detail_title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="detail_date">
                <span class="time"><i class="far fa-clock"></i><?php echo get_the_date(); ?> </span>
                <?php if (get_field('by-writer')) : ?>
                    By: <?php the_field('by-writer'); ?>
                <?php endif; ?>
               <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <?php the_post_thumbnail(); ?>
                    <div class="post-conent"><?php the_content(); ?></div>

                    <div class="nav-comment">
                        <?php
                        the_post_navigation(
                            array(
                                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'dristi') . '</span> <span class="nav-title">%title</span>',
                                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'dristi') . '</span> <span class="nav-title">%title</span>',
                            )
                        );


                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif; ?>
                    </div>
                    <div class="category-title-wrapper similar-news">
                       <h2>सम्बन्धित खबर</h2>
                    </div>
                    <div class="row">
                        <?php
                        // Get the current post's ID
                        $current_post_id = get_the_ID();

                        // Get the current post's category (assuming it's the first category)
                        $current_post_category = get_the_category()[0]->slug;

                        // Query for related posts in the same category, excluding the current post
                        $related_posts_args = array(
                            'category_name' => $current_post_category,
                            'post__not_in' => array($current_post_id),
                            'posts_per_page' => 3, // Number of related posts to display
                        );

                        $related_posts_query = new WP_Query($related_posts_args);

                        while ($related_posts_query->have_posts()) :
                            $related_posts_query->the_post();
                        ?>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="list_wrapper">
                                    <a href="<?php the_permalink(); ?>" class="list_image">
                                        <?php if (in_category(array('video'))) { ?>
                                            <img src="http://img.youtube.com/vi/<?php echo get_field('video_id'); ?>/0.jpg" alt="<?php the_title(); ?>" width="200" height="150">
                                        <?php } else {
                                            the_post_thumbnail();
                                        } ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="list_title">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile;

                        // Restore the original post data
                        wp_reset_postdata();
                        ?>
                    </div>

                </div>



                <div class="col-lg-3 col-md-4">
                    <?php if (is_active_sidebar('inner-side-ad')) : ?>
                        <div class="ad-sidebar">
                            <div class="ad_wrapper">
                                <?php dynamic_sidebar('inner-side-ad'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="bichar-wrapp">
                        <div class="category-title-wrapper">
                            <h2>ताजा</h2>
                        </div>
                        <?php
                        $the_query = new WP_Query('posts_per_page=5');
                        while ($the_query->have_posts()) : $the_query->the_post();
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
                        wp_reset_postdata(); ?>

                    </div>
                    <div class="ad-sidebar innerpage-sidebar-ads-middle">
                        <?php if (is_active_sidebar('single-page-side-below-latest')) : ?>
                            <div class="ad_wrapper">
                                <?php dynamic_sidebar('single-page-side-below-latest'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="bichar-wrapp">
                        <div class="category-title-wrapper">
                            <h2>लोकप्रिय</h2>
                        </div>
                        <?php
                        global $post;
                        $args = array('numberposts' => 8, 'category' => 1);
                        $myposts = get_posts($args);
                        foreach ($myposts as $post) :  setup_postdata($post); ?>
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
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->