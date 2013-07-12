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
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<div class="events">
						<?php
						$events = get_field('event');
						if (sizeof($events) > 1) {
							foreach ($events as $event) { ?>
								<div class="mediaObj event">
									<h1><?php echo $event['event_title']; ?></h1>
									<?php echo acf_image_output($event['image'], 'media', 'side_image'); ?>
									<div class="mediaDesc">
										<?php echo $event['description']; ?>
									</div>
								</div>
							<?php }
						} ?>
					</div>

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>