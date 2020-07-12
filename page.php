<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner child-page">
      <div class="page-banner__bg-image"></div>
      <div class="page-banner__content">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">Learn more about Yuyosoft</div>
      </div>
    </div>

    <div class="page-link">
      <div class="generic-content">
        <?php the_content()?>
      </div>
      <div class="clear"></div>
    </div>
  <?php }

  get_footer();

?>