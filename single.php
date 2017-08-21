<?php get_header(); ?>

	<main role="main">
		<section class="section_blog grid container bg-clr_gainsboro padding-top_gamma-one padding-bottom_gamma-two margin-bottom_beta-two">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid'); ?>>
			
			<h1 class="col-6 clr_white font_serif" data-push-left="off-2"><?php the_title(); ?></h1>
			
			<div class="content_blog col-5_xs-12" data-push-left="off-6_xs-0" data-push-right="off-1_xs-0">
				<?php the_content(); // Dynamic Content ?>
			</div>	
			<?php // the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php // _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php // _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php // edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php // comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
