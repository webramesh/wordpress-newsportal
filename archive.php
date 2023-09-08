<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dristi
 */

get_header();
?>

	<section class="list-page all-sec-padding">
	    <div class="container">
	        <?php if (is_active_sidebar('inner-banner')) : ?>
	        <section class="long-ad-section">
			    <div class="ad_wrapper">
			        <?php dynamic_sidebar('inner-banner'); ?>
			    </div>
			</section>
	        <?php endif; ?>

			<?php if ( have_posts() ) : ?>
				<div class="category-title-wrapper">
		           <?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
		        </div>
		        <div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post(); ?>

						
						<?php get_template_part('template-parts/content', 'archive'); ?>


					<?php endwhile; ?>
				</div>


				<?php numeric_posts_nav();
					 

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			

		</div>
	</section>

<?php get_footer(); ?>
