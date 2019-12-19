<?php get_header();
?>
<div class="row">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="col-sm-4">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content();?>
    </div>
  <?php }
  ?>
</div>
<?php
  get_footer();
?>