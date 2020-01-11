<?php get_header();
?>
<h2>this is the blog page</h2>
<br>
<div class="row">
    <?php
while (have_posts()) {
    the_post();?>



    <div class="card col-sm-3" style="width:300px">
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
<?php echo paginate_links();
?>
<?php
get_footer();
?>