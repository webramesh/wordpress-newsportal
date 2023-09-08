<?php

get_header(); 


if (is_active_sidebar('banner-ads')) : ?>
    <section class="long-ad-section">
        <div class="container">
            <div class="ad_wrapper top_single_ad">
                <?php dynamic_sidebar('banner-ads'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
// Get homepage blocks
$sections = get_theme_mod('homesorter', 'content:1,blog:1');

// Turn blocks into array
if ($sections) {

    $sections = explode(',', $sections);

    foreach ($sections as $section) :

        if ('sub-banner:1' == $section) :
            get_template_part('front/sub-banner');

        elseif ('banner:1' == $section) :
            get_template_part('front/banner');

        elseif ('mainnews:1' == $section) :
            get_template_part('front/mainnews');

        elseif ('prabhas:1' == $section) :
            get_template_part('front/prabhas');

        elseif ('feature-news:1' == $section) :
            get_template_part('front/features');

        elseif ('international:1' == $section) :
            get_template_part('front/international');

        elseif ('health:1' == $section) :
            get_template_part('front/health');

        elseif ('sports:1' == $section) :
            get_template_part('front/sports');

        elseif ('entertainment:1' == $section) :
            get_template_part('front/entertainment');

        elseif ('economy:1' == $section) :
            get_template_part('front/economy');
            
        elseif ('interview:1' == $section) :
            get_template_part('front/interview');

        elseif ('different-world:1' == $section) :
            get_template_part('front/different-world');

        elseif ('video:1' == $section) :
            get_template_part('front/video');
        endif;

    endforeach; ?>

<?php } ?>

   

<?php get_footer();
