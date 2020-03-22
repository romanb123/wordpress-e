<?php

get_header();
?>

<div class="content">
    <?php include 'posts-sidebar.php';?>
    <div class="posts-grid">
        <?php while (have_posts()) {
    the_post();?>
        <h2><?php the_title();?></h2>
        <?php the_content();?>
        <?php }?>

    </div>
</div>
<?php
get_footer();
?>