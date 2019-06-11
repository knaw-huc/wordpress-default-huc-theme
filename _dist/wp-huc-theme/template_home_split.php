<?php /* Template Name: home split screen  */ ?>
<?php
get_header();
?>

<?php
	//splitscreen hero
	if (get_theme_mod('homeBuild_splitHero', false)) {
		get_template_part( 'template-parts/home-hero-split' );
	}

	get_template_part( 'template-parts/homepage-items' );

	//partners
	if (get_theme_mod('homeBuild_Partners', false)) {
		get_template_part( 'template-parts/partners' );
	}

	//news
	if (get_theme_mod('homeBuild_news', false)) {
		get_template_part( 'template-parts/posts' );
	}


?>

<?php
get_footer();
