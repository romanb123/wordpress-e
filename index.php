<?php get_header();
?>

<div class="content">
    <?php include 'posts-sidebar.php';?>
    <div class="posts-grid">
        <div class="row">
            <?php
while (have_posts()) {
    the_post();?>
            <div class="col-lg-4 col-md-6 post-preview">
                <div class="card " style="width: 18rem;">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title()?></h5>
                        <p class="card-text"><?php the_excerpt()?></p>
                    </div>
                    <div class="card-body post-preview__button-wrap">
                        <a href="<?php the_permalink()?>" class="post-preview__button">read more</a>
                    </div>
                </div>
            </div>
            <?php }

?>
        </div>
    </div>
</div>


<?php
get_footer();
?>