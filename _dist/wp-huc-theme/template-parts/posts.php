
<?php
  wp_reset_postdata();

  $args = array(
      'order'     => 'DESC'
  );
  query_posts( $args );

  if ( have_posts() ) :

    ?>
    <div class="itemBlock hcBasicSideMargin">
      <h2 class="hcMarginTop3">News <?php echo get_theme_mod('background_color2', '#43C6E4'); ?></h2>
    </div>
    <div class="itemBlock">
    <?php

    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-news' );
    endwhile;
  endif;
  ?>
</div>
