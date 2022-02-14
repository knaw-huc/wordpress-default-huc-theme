    <?php


    wp_reset_postdata();

    $args = array(
        'post_type' => 'person',
        'orderby'   => 'meta_value_num',
        'meta_key'  => 'order',
        'order'     => 'ASC',
        // 'orderby' => 'name',
        'showposts' => 100,',
        meta_query' => array(
        'relation' => 'OR',
        array(
            'key' => 'order', 
            'compare' => 'NOT EXISTS'
        )
    )

        //'meta_value' => 'presentation'
    );
    query_posts( $args );
    if ( have_posts() ) :

      ?>
      <div class="itemBlock cards">
      <?php
      while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/staffCard' );
      endwhile;
    endif;
    ?>
    </div>
