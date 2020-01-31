<?php
$posts = get_posts();
foreach ($posts as $post) {?>
<?php
if (get_page_link($post->ID) == get_permalink()) {?>
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