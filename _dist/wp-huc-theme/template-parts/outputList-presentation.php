<div class="">
  <div>
    <em><?php the_title(); ?></em> <span class="hcTxtColorGreyMid pub_add"><?php echo get_post_meta($post->ID, 'additional_notes', true); ?></span>

  </div>
  <span class="hcSmallTxt">
    By
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
    } ?>
    </span>

</div>

<div class="">
<?php if (get_post_meta($post->ID, 'filelink', true) !='' ) {
        $linkId = get_post_meta($post->ID, 'filelink', false);
        $link_url = wp_get_attachment_url($linkId[0][ID]);

        echo '<a href="'.$link_url.'">Download</a>';
}
 ?>
</div>
