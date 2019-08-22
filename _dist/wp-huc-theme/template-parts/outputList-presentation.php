<div class="">

  <div>
    <em><?php the_title(); ?></em> <span class="hcTxtColorGreyMid pub_add"><?php echo get_post_meta($post->ID, 'additional_notes', true); ?></span>

  </div>
  <span class="hcSmallTxt">
    <?php
      if (date("d-m-Y", strtotime(get_post_meta($post->ID, 'publication_date', true))) != '01-01-1970') {
        echo 'Published on '.date("d-m-Y", strtotime(get_post_meta($post->ID, 'publication_date', true)));
      }

     ?>
    by
    <?php
    $pod = pods( 'output', get_the_id() );
    $related = $pod->field( 'creators' );


    if ( ! empty( $related ) ) {
      foreach ( $related as $rel ) {
        $id = $rel[ 'ID' ];
        $authors =$authors.get_the_title( $id ).', ';

      }
      $authors = substr_replace($authors, "", -2);
      echo $authors;

      $creat2 = get_post_meta($post->ID, 'creator_2', true);
      $creat2Name =  $creat2['post_title'];
      if ($creat2Name != '') {
        echo ', '.$creat2Name;
      }

      $creat3 = get_post_meta($post->ID, 'creator_3', true);
      $creat3Name =  $creat3['post_title'];
      if ($creat3Name != '') {
        echo ', '.$creat3Name;
      }


      $creat4 = get_post_meta($post->ID, 'creator_4', true);
      //print_ (get_post_meta($post->ID, 'creator_4', false));
      $creat4Name =  $creat4Name['post_title'];
      if ($creat4Name != '') {
        echo ', '.$creat4Name;
      }

      $creat5 = get_post_meta($post->ID, 'creator_5', true);
      $creat5Name =  $creat5Name['post_title'];
      if ($creat5Name != '') {
        echo ', '.$creat5Name;
      }


    } ?>
    </span>
    <div class="">
      <?php if (get_post_meta($post->ID, 'filelink', true) !='' ) {
              $linkId = get_post_meta($post->ID, 'filelink', false);
              $link_url = wp_get_attachment_url($linkId[0][ID]);

              echo '<a href="'.$link_url.'">Download</a>';
      }
       ?>
       </div><div class="">
       <?php if (get_post_meta($post->ID, 'linktosite', true) !='' ) {
               $link_url = get_post_meta($post->ID, 'linktosite', true);

               echo '<a href="'.$link_url.'" target="_blank" >See more...</a>';
       }
        ?>
    </div>

</div>
