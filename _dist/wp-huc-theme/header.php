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


	<style>
	.current-menu-item  a{
	  border-bottom: 3px solid <?php echo get_theme_mod('brandcolor1') ?>;
	}

	.footer  {
		background-color: <?php echo get_theme_mod('footerColorBG') ?>;
	}

	</style>


</head>



<body <?php body_class(); ?>>



	<div class="header">
		<div class="headerLeft">&nbsp;</div>
		<div class="headerMid">
			<?php
			//echo '>'.get_custom_logo().'<';
			if (get_custom_logo() == '') {
			echo '<span class="siteTitle"><a href="'.get_bloginfo( 'url' ).'">'.get_bloginfo( 'name' ).'</a></span>';
			} else {
				echo get_custom_logo();
			}

			?></div>
		<nav class="headerRight top-navigation">
			<?php
				$cleanMenu = wp_nav_menu( array(
					'menu_id'        => 'primary-menu',
					'echo' => false,
					'depth'=> 1,
				) );
				echo $cleanMenu;

			?>
		</nav>


	</div>
	<div class="subNav">


<?php
	$parentId = wp_get_post_parent_id( $post_ID );
	if ($parentId ==0) {
		$parentName = get_the_title();
	}else {
		$parentName = get_the_title($parentId);
	}
?>


		<?php
		$args = array(
		    'menu_id'        => 'primary-menu',
		    'submenu' => $parentName, //
				'echo' => false,
		);

		$submenu = wp_nav_menu( $args );
		echo $submenu; //strip_tags($submenu, "<a>");
		?>
	</div>



<div id="page" class="site">
