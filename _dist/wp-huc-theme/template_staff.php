<?php /* Template Name: Staff  */ ?>
<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.

	//get_template_part( 'template-parts/outputList' );
	include( locate_template( 'template-parts/staffList.php', false, false ) );
	?>

</main><!-- #primary -->

<?php

get_footer();