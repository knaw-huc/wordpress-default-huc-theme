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
    <?php the_title(); ?>
  </div>
</div>
