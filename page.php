<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
<!-- ============================================================================================================ -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?php the_title() ?></h1>
    <!-- <p class="lead"><?php the_content() ?></p> -->
  </div>
  <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
      <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?>
      </a> 
      <span class="metabox__main"><?php the_title(); ?></span>
      </p>
    </div>
      <?php }
    ?>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="lead"><?php the_content() ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- ============================================================================================================ -->
  <?php }

  get_footer();

?>