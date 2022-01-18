<div class="container-post">
  <?php if( ! empty( get_the_post_thumbnail_url() ) ) { ?>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php } ?>

  <div class="post-content">
    <h1><?php the_title(); ?></h1>
    <div class="post-info">
      <h4>Written by <?php the_author(); ?> <span><?php the_date(); ?></span></h4>
    </div>
    <?php the_content(); ?>
  </div>
  <div class="arrow-up">
    <div class="arrow-up-button">
      <a href="#"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
  </div>
</div>