<?php

get_header(); ?>

	<main id="primary" class="site-main">


<?php	if (get_theme_mod('subnavigationType', true)) { ?>

		<div class="sidebarNav">
			<?php

			if ($post->post_parent)	{
					$ancestors=get_post_ancestors($post->ID);
					$root=count($ancestors)-1;
					$parent = $ancestors[$root];
				} else {
					$parent = $post->ID;
				}

				$parentName = get_the_title($parent);


			$args = array(
					'menu_id'        => 'primary-menu',
					'submenu' => $parentName, //
					'echo' => false,
				//	'echo' => false,
			);

			$submenu = wp_nav_menu( $args );
			echo $submenu; 

			?>
		</div>

		<?php
	}
?>







		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_footer();
?>
