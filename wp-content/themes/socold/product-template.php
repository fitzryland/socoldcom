<?php
/*
Template Name: Product Page
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
					<div class="product-description">
						<?php the_field('brief_product_description'); ?>
					</div>
					<?php echo custom_acf_image_output(get_field('big_image'), 'product-image', 'product_image'); ?>
					<div class="entry-content">
						<?php the_field('main_content'); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>