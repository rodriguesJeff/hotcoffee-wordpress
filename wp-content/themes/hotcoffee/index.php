<?php

get_header();
?>
<?php if( is_home() || is_front_page() ) { ?>
  <main class="main">
    <div class="container-presentation">
      <div class="container-presetation-text">
        <h1>Make better coffee</h1>
        <p>why learn how to blog?</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/croods.png" alt="Croods" />
    </div>
<?php } else { ?>

<?php } ?>

<?php
if( have_posts() ) {
  $count = 0;
  while( have_posts() ) {
      the_post();
      
      if( is_home() || is_front_page() ) {
        if ($count == 0){
          get_template_part( 'content', 'home' );
        } else {
          if ($count == 1) {
            ?>
              <div class="container-posts">
            <?php
          }
          get_template_part( 'content', 'card' );
        }
        $count++;
      } else {
          get_template_part( 'content', '' );
      }
  }
  if ($count > 0) {
    ?>
      </div>
    <?php
  }
} else {
  get_template_part( 'error', '404' );
}

?>
<?php if( is_home() || is_front_page() ) { ?>
  </main>
<?php } else { ?>

<?php } ?>

<?php
get_footer();

?>