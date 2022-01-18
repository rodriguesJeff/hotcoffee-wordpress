<html>
  <head>
    <title>HotCoffee</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="author" content="Jefferson Rodrigues" />

    <!-- BOOTSTRAP ICONS IMPORT -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- GOOGLE FONT IMPORT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-master">
    <div class="header">
      <a class="header-brand" href="<?php bloginfo('url');?>"><?php bloginfo('title'); ?></a>
      <div class="search-section">
        <i class="bi bi-search"></i>
        <input type="search" class="header-search" placeholder="Search..." />
      </div>
      <nav class="menu">
        <ul>
          <li><a class="menu-text" href="<?php bloginfo('url');?>"> Home </a></li>
          <li>
            <a class="menu-text fakeScroll" href="#"> Articles </a>
          </li>
          <li>
            <a href="#"><i class="bi bi-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="bi bi-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </li>
        </ul>
      </nav>
    </div>