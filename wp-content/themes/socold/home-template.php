<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area tansp">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="cocktails tansp">
						<h2><?php the_field('c_title'); ?></h2>
						<?php echo acf_image_output(get_field('c_product_photo'), '', ''); ?>
						<div class="sellingPoints">
							<?php the_field('c_selling_points'); ?>
						</div>
						<a href="<?php the_field('c_area_link'); ?>" class="button">More</a>
					</div>
					<div class="shavedice tansp">
						<h2><?php the_field('si_title'); ?></h2>
						<?php echo acf_image_output(get_field('si_product_photo'), '', ''); ?>
						<div class="sellingPoints">
							<?php the_field('si_selling_points'); ?>
						</div>
						<a href="<?php the_field('si_area_link'); ?>" class="button">More</a>
					</div>

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>