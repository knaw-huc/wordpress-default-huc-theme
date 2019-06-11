<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	ob_start();
	wp_head();
	$classList = ob_get_contents();
	ob_end_clean();
	echo str_replace("body.custom-background",".customBackground",$classList);

	?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-custom.css">

	<?php
	if (get_theme_mod('brandcolor1') != '') {
	?>
	<style>
	.current-menu-item  a{
	  border-bottom: 3px solid <?php echo get_theme_mod('brandcolor1') ?>;
	}

	.footer  {
		background-color: <?php echo get_theme_mod('footerColorBG') ?>;
	}

	</style>

	<?php
	}
  ?>

</head>



<body <?php body_class(); ?>>



	<div class="header">
		<div class="headerLeft">&nbsp;</div>
		<div class="headerMid"><?php the_custom_logo(); ?></div>
		<nav class="headerRight top-navigation">
			<?php
				$cleanMenu = wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'echo' => false,
				) );
				echo $cleanMenu;
				//echo strip_tags($cleanMenu, "<a>");
			?>
		</nav>
	</div>



<div id="page" class="site">
