<a href="<?php the_permalink(); ?>">
<div class="container-post-model">
  <?php if( ! empty( get_the_post_thumbnail_url() ) ) { ?>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php } ?>
  <h3><?php the_title(); ?></h3>
  <h5><?php the_excerpt(); ?></h5>
  <div class="container-post-footer">
    <h6 class="date"><?php the_date(); ?></h6>
    <h6 class="read-more">Read more</h6>
  </div>
</div>
</a>