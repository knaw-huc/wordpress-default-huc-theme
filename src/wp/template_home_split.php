<?php /* Template Name: home split screen  */ ?>
<?php
get_header();
?>

<?php
	get_template_part( 'template-parts/home-hero-split' );
	get_template_part( 'template-parts/homepage-items' );
	get_template_part( 'template-parts/partners' );

	//news
	if (get_theme_mod('homeBuild_news', false)) {
		get_template_part( 'template-parts/posts' );
	}


?>

<?php
get_footer();
