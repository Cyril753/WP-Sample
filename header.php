<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="header__wrap">
        <div class="header__logo">
          <a href="<?php echo site_url('/')?>"><strong>YUYOSOFT</strong> INNOVATIONS INC</a>
        </div>
        <nav class="header__nav">
          <a href="<?php echo site_url('/')?>" class="header__nav-item header__nav-item_status_active">Home</a>
          <a href="<?php echo site_url('/about-us')?>" class="header__nav-item">About Us</a>
          <a href="#" class="header__nav-item">Mobile Game</a>
          <a href="#" class="header__nav-item">Music Labels</a>
          <span class="header__nav-item"><i class="fa fa-search" aria-hidden="true"></i></span>
        </nav>
      </div>
      
      
        <!-- <div class="container">
          <div class="logo">
            <h1 class="logo-text float-left">
              <a href="#"><strong>YUYOSOFT</strong> INNOVATIONS INC</a>
            </h1>
          </div>
          <span class="js-search-trigger site-header__search-trigger"></span>
          <div class="site-header__menu group">
            <nav class="main-navigation">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Mobile Game</a></li>
                <li><a href="#">Music Labels</a></li>
              </ul>
            </nav>
            <div class="site-header__util">
              <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
          </div>
        </div> -->
    </header>
