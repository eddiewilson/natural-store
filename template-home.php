<?php /* Template Name: Home Page Template */ get_header(); ?>

<section class="section_masthead grid-noGutters grid-bottom grid-center bg-image_cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
 	<div class="bg-clr_white_opacity padding_gamma-one margin-bottom_beta-two">
 		<h1 class="font_serif text_center clr_mughal-green margin-bottom_alpha-one"><?php the_title(); ?></h1>
 		<p class="h5 text_center font_sans clr_dim-grey">Promoting healthy lifestyles &amp; <br/> community spirit for over 20 years.</p>
 		<div class="text_center">
	 		<img class="" src="assets/img/icons/ns_icon.png"/>
 		</div>
 	</div>
</section>

<section class="home_intro padding-top_gamma-two padding-bottom_gamma-two">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="grid container">
			<div class="col-6_xs-12" data-push-left="off-1_xs-0">
				<h2 class="font_serif clr_mughal-green"><?php the_field('title'); ?></h2>
				<p class="text_sub text_uppercase clr_light-grey"><?php the_field('sub_title'); ?></p>
				<?php the_field('body'); ?>
			</div>
		</div>
			
		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>
	
</section>
<section class="grid container">
<?php // WP_Query arguments
$args = array(
	'posts_per_page'         => '3',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		
		include(locate_template('loop_blog.php'));
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>
</section>

<?php include(locate_template('sections/section_cluster.php')); ?>

<?php include(locate_template('sections/twitter-api/index
	.php')); ?>


<?php get_footer(); ?>
