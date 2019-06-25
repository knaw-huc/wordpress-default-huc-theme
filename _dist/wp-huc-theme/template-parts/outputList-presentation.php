<div class="">
   <?php the_title(); ?>
</div>
<div class="">
  <?php

  $pod = pods( 'output', get_the_id() );
  $related = $pod->field( 'outputpartners' );

  ?>
</div>

<div class="">
<?php if (get_post_meta($post->ID, 'filelink', true) !='' ) {
        $linkId = get_post_meta($post->ID, 'filelink', false);
        $link_url = wp_get_attachment_url($linkId[0][ID]);

        echo '<a href="'.$link_url.'">Download</a>';
}
 ?>
</div>
