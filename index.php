<?php get_header(); ?>

	<section class="feature-grid container padding-top_gamma-one padding-bottom_gamma-one">
		
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php get_template_part('loop_feature-grid'); ?>
		<?php endwhile; ?>
		
		<?php else: ?>				
		
		<?php endif; ?>
		
		
		
		

	</section>
<?php get_template_part('pagination'); ?>
<?php get_footer(); ?>
