    <?php


    wp_reset_postdata();

    $typeArr = array(
        'key' => 'output_type',
        'value' => $type,
        'compare' => '='
    );



    $args = array(
        'post_type' => 'output',
        'posts_per_page'   => -1,
        'order'     => 'DESC',
	      'orderby' => 'order_clause',
        'meta_query' => array(
                    $typeArr,
                    'order_clause' => array(
                    'key' => 'publication_date'
                    )
                ),
    );
    query_posts( $args );

    if ( have_posts() ) :

      ?>
      <div class="itemBlock ">
      <ul class="outputList" id="outputList">
      <?php

      while ( have_posts() ) : the_post();
      ?>
        <li>


          <?php
          if (get_post_meta($post->ID, 'output_type', true) == 'dataset') {
            get_template_part( 'template-parts/outputList-dataset' );
          }elseif ( (get_post_meta($post->ID, 'output_type', true) == 'presentation') || (get_post_meta($post->ID, 'output_type', true) == 'publication') ) {
            get_template_part( 'template-parts/outputList-presentation' );
          }else {
            get_template_part( 'template-parts/outputList-default' );
          }
          //get_template_part( 'template-parts/outputList-dataset' );

           ?>
           <?php
           if ($type == 'archive') {
             echo '<div class="hcSmallTxt hcTxtColorGreyMid">'.get_post_meta($post->ID, 'output_type', true).'</div>';
             //print_r(get_post_meta($post->ID, 'output_type', true));
           }
            ?>
        </li>


      <?php
      endwhile;
    endif;
    ?>
  </ul>


      </div>
