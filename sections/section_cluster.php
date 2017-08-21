<section class="container grid padding-top_gamma-one padding-bottom_gamma-one">
	
	<?php // if (have_posts()): while (have_posts()): the_post(); ?>
	
	<div class="col-4_xs-12 padding-bottom_gamma-two" data-push-left="off-1">
		<h2 class="clr_mughal-green font_serif padding-bottom_alpha-one"><?php the_field('cluster_title'); ?></h2>
		<?php $test = the_field('cluster_content_left'); ?>
		<a href="<?php the_field('cluster_left_cta'); ?>" class="button_full margin-top_alpha-one margin-bottom_alpha-one">Our Foods</a>
	</div>
	<div class="col-5_xs-12 padding-bottom_gamma-two" data-push-left="off-1_xs-0">
			<?php 
				$left_image = get_field('cluster_left_image');
				
				if( !empty($left_image) ): ?>
				
					<img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>" />
				
			<?php endif; ?> 
		<span class="text_sub grid-3-right clr_dim-grey caption-bottom caption-right text_italic margin-top"><?php echo $left_image['caption']; ?></span>
	</div>
	<div class="col-4_xs-12 padding-bottom_gamma-two" data-push-left="off-1_xs-0">
		<?php 
			$right_image = get_field('cluster_right_image');
				
			if( !empty($right_image) ): ?>
				
					<img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>" />
				
		<?php endif; ?> 
		<span class="text_sub grid-3 clr_dim-grey caption-bottom caption-left text_italic margin-top"><?php echo $right_image['caption']; ?></span>
	</div>
	<div class="col-5_xs-12 padding-bottom_gamma-two" data-push-left="off-1_xs-0">
		<?php the_field('cluster_content_right'); ?>
		<a href="<?php the_field('cluster_right_cta'); ?>" class="button_full margin-top_alpha-one margin-bottom_alpha-one">Our Products</a>
	</div>	
	
	<!-- Do something -->
				
	<?php // endwhile; ?>
	
	<?php // else: ?>
	
	<!-- Do something else -->
	
	<?php // endif; ?>
	
</section>