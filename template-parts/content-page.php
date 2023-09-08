<?php
/**
 * Template part for displaying page content in page.php
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
            <div class="row">
                <div class="col-lg-9 col-md-8">
                   
                    <div class="post-conent"><?php the_content(); ?></div>

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
                    <div class="ad-sidebar">
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