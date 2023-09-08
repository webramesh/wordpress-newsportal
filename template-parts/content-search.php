<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dristi
 */

?>

<div class="col-lg-4 col-md-6 col-12">
    <div class="list_wrapper">
        <a href="<?php the_permalink();?>" class="list_image">
        	<?php the_post_thumbnail();	?>
        </a>
        <a href="<?php the_permalink();?>" class="list_title">
            <h3><?php the_title();?></h3>
            <span class="time"><i class="far fa-clock"></i><?php echo get_the_date(); ?></span>
        </a>
    </div>
</div>
