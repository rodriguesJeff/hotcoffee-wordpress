<?php

/**
 * Suportes do Tema
 */
add_theme_support( 'html5' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

/**
 * Menus do tema
 */
function HotCoffee_Menus() {
  register_nav_menus(
       array(
            'header-menu' => __( 'Header' ),
       )
  );
}
add_action( 'init', 'HotCoffee_Menus' );

add_action( 'wp_enqueue_scripts', 'HotCoffee_Scripts' );
function HotCoffee_Scripts() {
     wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/style.css', null, null );
     wp_enqueue_style( 'theme-style-css', get_template_directory_uri() . '/assets/src/css/style.css', null, null );
     wp_enqueue_style( 'theme-header-css', get_template_directory_uri() . '/assets/src/css/header.css', null, null );
     wp_enqueue_style( 'theme-footer-css', get_template_directory_uri() . '/assets/src/css/footer.css', null, null );
     if( is_front_page() || is_home() ) {
          wp_enqueue_style( 'theme-main-css', get_template_directory_uri() . '/assets/src/css/main.css', null, null );
     } else {
          wp_enqueue_style( 'theme-post-css', get_template_directory_uri() . '/assets/src/css/post.css', null, null );
     }
     wp_enqueue_script( 'go-to-posts-js', get_template_directory_uri() . '/assets/src/js/go_to_posts.js', array( 'jquery' ), null, true );
     wp_enqueue_script( 'scroll-to-top-js', get_template_directory_uri() . '/assets/src/js/scroll_to_top.js', array( 'jquery' ), null, true );
}

