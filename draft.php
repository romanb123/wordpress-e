<?php get_header();
?>

<div class="row">

    <!-- =============posts section====================== -->
    <div class="col-sm-9">
        <h2> blog </h2>
        <div class="row"> <?php
while (have_posts()) {
    the_post();?>

            <div class="card  col-lg-4 col-md-6">
                <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><?php the_title()?></h4>
                    <p class="card-text"><?php the_excerpt()?></p>
                    <a href="<?php the_permalink()?>" class="btn btn-primary">read more</a>
                </div>
            </div>
            <?php }

?></div>

    </div>
    <!-- =============posts section====================== -->
    <div class="col-sm-3 sidebar_right">
        <h1 style="color:white">all posts</h1>
        <!-- ====================================================================== -->
        <!-- sidebar -->
        <!-- ====================================================================== -->
        <?php include 'posts-sidebar.php';?>
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