<?php
wp_reset_postdata();

if ( have_posts() ):
	while ( have_posts() ) : the_post();
?>

<div class="splitScreen">
	<div class="splitScreenLeft" style="background-image: url(<?php the_post_thumbnail_url('full') ?>)"> </div>
	<div class="splitScreenRight"  style="background-color: <?php echo get_theme_mod('homeBuild_splitHeroColor', '#fff') ?>">
		<div class="splitScreenContent hcBasicSideMargin">
			<h1><?php echo the_title(); ?></h1><br>
					<p><?php the_content(); ?></p>
		</div>
	</div>
</div>
<?php
	endwhile;
endif; ?>
