<a href="<?php the_permalink(); ?>" class="post">
<div class="container-announcement">
  <div class="container-announcement-text">
    <h2><?php the_title(); ?></h2>
    <p>
      <?php the_excerpt(); ?>
    </p>
    <div class="container-announcement-footer">
      <h6 class="date"><?php the_date(); ?></h6>
      <h6 class="read-more">Read more</h6>
    </div>
  </div>
  <?php if( ! empty( get_the_post_thumbnail_url() ) ) { ?>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php } ?>
</div>
</a>
        