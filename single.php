<?php

get_header();
?>
<div class="row">
    <!-- post -->
    <div class="col-sm-9">
        <?php while (have_posts()) {
    the_post();?>
        <h2><?php the_title();?></h2>
        <?php the_content();?>
        <?php }?>
    </div>
    <div class="col-sm-3 sidebar_right">
        <h1 style="color:white">all posts</h1>
        <!-- ====================================================================== -->
        <!-- sidebar -->
        <!-- ====================================================================== -->
        <?php
$posts = get_posts();
foreach ($posts as $post) {?>
        <?php
if (get_page_link($post->ID) == get_permalink($post->ID)) {?>
        <!-- ==========html=============  -->
        <li class="list-group-item active sidemenu">
            <a href="<?php echo get_page_link($post->ID) ?>">
                <?php echo $post->post_title; ?></a>
        </li>

        <!-- ==========html=============        -->
        <?php
} else {?>
        <!-- ==========html=============  -->
        <li class="list-group-item sidemenu">
            <a href="<?php echo get_page_link($post->ID) ?>">
                <?php echo $post->post_title; ?></a>
        </li>
        <?php }
    ?>
        <!-- ==========html=============        -->
        <?php }
?>
        <!-- ====================================================================== -->
        <!-- sidebar -->
        <!-- ====================================================================== -->
    </div>
</div>



<?php
get_footer();
?>

?>