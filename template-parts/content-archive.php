<div class="col-lg-4 col-md-6 col-12">
    <div class="list_wrapper">
        <a href="<?php the_permalink();?>" class="list_image">
        	<?php
				if (in_category( array( 'GS TV', 'video' ) )) { ?>
				   
				<img src="http://img.youtube.com/vi/<?php echo the_field('video_id');?>/0.jpg" alt="<?php the_title(); ?>" width="200" height="150">
				   
				<?php } else {
				   the_post_thumbnail();
				}
			?>
           
        </a>
        <a href="<?php the_permalink();?>" class="list_title">
            <h3><?php the_title();?></h3>
            <span class="time"><i class="far fa-clock"></i><?php echo get_the_date(); ?></span>
        </a>
    </div>
</div>