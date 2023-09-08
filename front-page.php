<?php

/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear. Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Teletype
 */
if ('posts' == get_option('show_on_front')) :
    get_template_part('index');
else :
    get_header();
?>

    <?php get_template_part('template-parts/headline'); ?>

    <div id="primary" class="content-area container">
        <main id="main" class="site-main" role="main">
            <?php
            // Get homepage blocks
            $sections = get_theme_mod('homesorter', 'content:1,blog:1');

            // Turn blocks into array
            if ($sections) {

                $sections = explode(',', $sections);

                foreach ($sections as $section) :

                    if ('newspaper:1' == $section) :
                        get_template_part('front/news-paper');

                    elseif ('banner:1' == $section) :
                        get_template_part('front/banner');

                    elseif ('mainnews' == $section) :
                        get_template_part('front/mainnews');

                    elseif ('cnnspecial:1' == $section) :
                        get_template_part('front/cnnspecial');

                    elseif ('headline:1' == $section) :
                        get_template_part('front/headline');

                    elseif ('cnnkhabar:1' == $section) :
                        get_template_part('front/cnnkhabar');

                    elseif ('international:1' == $section) :
                        get_template_part('front/international');

                    elseif ('health:1' == $section) :
                        get_template_part('front/health');

                    elseif ('sports:1' == $section) :
                        get_template_part('front/sports');

                    elseif ('entertainment:1' == $section) :
                        get_template_part('front/entertainment');

                    elseif ('stock:1' == $section) :
                        get_template_part('front/stock');

                    elseif ('economy:1' == $section) :
                        get_template_part('front/economy');

                    elseif ('different-world:1' == $section) :
                        get_template_part('front/different-world');

                    elseif ('video:1' == $section) :
                        get_template_part('front/video');
                    endif;

                endforeach; ?>

            <?php
            } ?>

        </main>
    </div>

<?php
endif;
get_footer();
