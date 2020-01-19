<?php get_header();
?>
<h2>this is the blog page</h2>
<br>
<div class="row">

    <!-- =============posts section====================== -->
    <div class="col-sm-9"> <?php
while (have_posts()) {
    the_post();?>

        <div class="card resent_posts_home col-sm-3">
            <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title"><?php the_title()?></h4>
                <p class="card-text"><?php the_excerpt()?></p>
                <a href="<?php the_permalink()?>" class="btn btn-primary">read more</a>
            </div>
        </div>
        <?php }

?>
    </div>
    <!-- =============posts section====================== -->
    <div class="col-sm-3 sidebar_right">
        <!-- ====================================================================== -->
        <!-- sidebar -->
        <!-- ====================================================================== -->
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
        <!-- ====================================================================== -->
        <!-- sidebar -->
        <!-- ====================================================================== -->
    </div>

</div>
<?php echo paginate_links();
?>
<?php
get_footer();
?>