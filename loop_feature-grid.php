<article <?php post_class('post margin-bottom_alpha-one'); ?>>
	<div class="post-wrapper">
	<?php 	
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_width = $thumb_url_array[2];
	?>
	<div class="post-image bg-image_cover width_full height_full" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
	<div class="post_details bg-clr_white padding-beta-one grid-middle grid-noGutters">
		
		<?php
			if(is_sticky(get_the_ID())){
				echo '<p class="text_uppercase text_center font_sans width_full">Featured Post</p>';
			}
			else{
				
			}	
		?>
			
			<span class="block date text_uppercase clr_light-grey text_sub text_center padding-bottom_alpha-one"><?php the_time('F j, Y'); ?></span>
			
			<h3 class="font_serif text_center margin-bottom_alpha-one"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></h3>
			
			<div class="text_center"><?php html5wp_excerpt('html5wp_index'); ?></div>		
			
			<div class="post-credit grid-middle grid-center">
				<div class="post-credit col-12">
					<span class="grid-3-center"><a href="<?php echo the_permalink(); ?>" class="button_full margin-bottom_alpha-one">Read More</a>
					</span>
				</div>
				<div class="col-6 grid-center grid-spaceBetween">
					<div class="col-4 padding-right_alpha-one">
						<img class="icon_author border_round" src="<?php 
							$author_id = get_the_author_meta('ID');
							echo get_field('profile', 'user_'. $author_id ); ?>" />
					</div>
					<div class="col-8 grid-noGutter">
						<span class="col-12 text_uppercase text_sub">Written by</span>
						<span class="col-12 clr_light-grey text_italic text_sub">Chloe Bitters</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</article>