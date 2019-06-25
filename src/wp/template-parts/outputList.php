    <?php


    wp_reset_postdata();

    $args = array(
        'post_type' => 'output',
        'order'     => 'ASC',
        'meta_key'   => 'output_type',
	      'meta_value' => $type,
        //'meta_value' => 'presentation'
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

          <?php
          if (get_post_meta($post->ID, 'output_type', true) == 'dataset') {
            get_template_part( 'template-parts/outputList-dataset' );
          }elseif (get_post_meta($post->ID, 'output_type', true) == 'presentation') {
            get_template_part( 'template-parts/outputList-presentation' );
          }else {
            get_template_part( 'template-parts/outputList-default' );
          }
          //get_template_part( 'template-parts/outputList-dataset' );

           ?>
        </li>


      <?php
      endwhile;
    endif;
    ?>
  </ul>
      </div>
