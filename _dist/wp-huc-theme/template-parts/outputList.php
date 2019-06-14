    <?php
    wp_reset_postdata();

    $args = array(
        'post_type' => 'output',
        'order'     => 'ASC'
    );
    query_posts( $args );

    if ( have_posts() ) :

      ?>
      <div class="itemBlock hcBasicSideMargin">

      <ul class="outputList">
      <?php

      while ( have_posts() ) : the_post();
      ?>
        <li>
          <a href="<?php echo get_post_meta($post->ID, 'partner_url', true); ?>">
            <?php the_title(); ?>
          </a>
        </li>


      <?php
      endwhile;
    endif;
    ?>
  </ul>
      </div>
