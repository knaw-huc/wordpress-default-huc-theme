<?php /* Template Name: List allPosts in a list  */ ?>
<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	// page
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.



	// posts
	wp_reset_postdata();


  $args = array(
      'order'     => 'DESC',
      'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'operator' => 'NOT IN'
                )
            )
  );
  query_posts( $args );

  if ( have_posts() ) :

    ?>
    <div class="itemBlock newsList">
    <?php

    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-news' );
    endwhile;
  endif;
?>

</main><!-- #primary -->

<?php

get_footer();
