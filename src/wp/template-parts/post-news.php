<div class="post extraa">
  <a href="<?php the_permalink(); ?>">
    <strong><?php the_title(); ?></strong><br>
    <?php the_tags(); ?><?php echo get_the_date(); ?>

  </a>

  <?php if ( has_post_thumbnail() ) {?>
    <a href="<?php the_permalink(); ?>">
      <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class="thumbnail">
    </a>
  <?php } ?>
</div>
