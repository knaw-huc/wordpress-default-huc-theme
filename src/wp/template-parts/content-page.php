<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gutenbergtheme
 */

?>
		<main id="post-<?php the_ID(); ?>" >
			<?php if ( has_post_thumbnail() ) { // featured image ?>
				<div class="imageHeader" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
				</div>
			<?php } ?>


		<header class="entry-content">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header><!-- .entry-header -->






	<div class="entry-content">
		<?php
			the_content();

		?>
	</div><!-- .entry-content -->
</main><!-- #post-<?php the_ID(); ?> -->
