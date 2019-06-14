<?php /* Template Name: Output list page  */ ?>
<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );
		$type = get_post_meta($post->ID, 'show_list_of	', true);


	endwhile; // End of the loop.
	echo $type;
	get_template_part( 'template-parts/outputList' );
	?>

</main><!-- #primary -->

<?php
get_footer();
