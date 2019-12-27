<?php

get_header();

while (have_posts()) {
    the_post();?>
<!-- ============================================================================================================ -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <?php
$theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent) {?>
            <!-- ==========html=============  -->
            <a href="<?php echo get_permalink($theParent); ?>" class="btn btn-primary btn-lg active" role="button"
                aria-pressed="true">
                Back to <?php echo get_the_title($theParent); ?> </a>
            <!-- ==========html=============        -->
            <?php }
    ?>
            <h1 class="page-banner__title"><?php the_title();?></h1>
            <p><?php the_content();?></p>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <?php
$pages = get_pages();
    foreach ($pages as $page) {?>
                <?php
if (get_page_link($page->ID) == get_permalink()) {?>
                <!-- ==========html=============  -->
                <li class="list-group-item active sidemenu">
                    <a href="<?php echo get_page_link($page->ID) ?>">
                        <?php echo $page->post_title; ?></a>
                </li>

                <!-- ==========html=============        -->
                <?php
} else {?>
                <!-- ==========html=============  -->
                <li class="list-group-item sidemenu">
                    <a href="<?php echo get_page_link($page->ID) ?>">
                        <?php echo $page->post_title; ?></a>
                </li>
                <?php }
        ?>
                <!-- ==========html=============        -->
                <?php }
    ?>

            </ul>
        </div>
    </div>
</div>
<!-- ============================================================================================================ -->
<?php }

get_footer();

?>