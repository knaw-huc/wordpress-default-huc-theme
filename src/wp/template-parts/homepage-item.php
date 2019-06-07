<div class="" style="background-color: <?php echo get_post_meta($post->ID, 'background_color', true); ?>">
  <div class="itemDivider">
    <div class="homeItemText">
      <strong><?php the_title(); ?></strong>
      <p><?php echo get_post_meta($post->ID, 'home_content', true); ?></p>
    </div>
    <div class="homeItemImg">
    <?php if ( has_post_thumbnail() ) {?>
      <img src="<?php the_post_thumbnail_url('medium') ?>">
    <?php } ?>
    </div>
  </div>
</div>
