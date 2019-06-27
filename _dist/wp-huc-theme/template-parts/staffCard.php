<div class="">
  <div class="staffAvatar">
    <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'thumbnail' );
          } else {
            echo '<img src="'.get_bloginfo( 'template_url' ).'/images/avatar.png" >';
          }
          ?>
  </div>
  <div class="">
    <?php
    if (get_post_meta($post->ID, 'link_to_bio_or_linkedin', true) != '') {
      $title = '<a href="'.get_post_meta($post->ID, 'link_to_bio_or_linkedin', true).'" target="_blanc">'.get_the_title().'</a>';
    } else {
      $title = get_the_title();
    }
    echo $title;
?>
    <?php echo infNoteEmpty(get_post_meta($post->ID, 'function_role', true), '<div class="smallGrey">', '</div>') ?>
  </div>
</div>
