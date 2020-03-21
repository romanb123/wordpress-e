<?php get_header();
?>
<div class="container-fluid main-content">
    <div class="row">
        <div class="col-sm-9">
            <!-- ==========projects============= -->
            <h1>resent projects</h1>
            <div class="row projects_grid">
                <?php $Projects = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => -1,

));
while ($Projects->have_posts()) {
    $Projects->the_post();?>
                <div class="card resent_posts_home col-lg-4 col-md-6 projects_grid__project">
                    <h4 class="card-title projects_grid__project__title">
                        <?php the_title()?>
                    </h4>
                    <p class="card-text projects_grid__project__text">
                        <?php echo wp_trim_words(get_the_content(), 17) ?>
                    </p>
                    <p class="card-text projects_grid__project__skills">
                        <?php the_field('skills')?>
                    </p>
                    <span class="projects_grid__project__buttons"> <a href="<?php the_field('repository')?>" class="btn btn-primary btn-lg active postbutton" role="button" aria-pressed="true">repository</a>
                    <?php if (get_field('url')) {?>
                    <a href="<?php the_field('url')?>" class="btn btn-primary btn-lg active postbutton" role="button" aria-pressed="true">live</a>
                    <?php }?></span>
                    <div class="projects_grid__project__closing"></div>
                </div>
                <?php }?>



            </div>








            <!-- ==========projects============= -->
            <!-- ==========posts============= -->
            <h1>resent posts</h1>
            <div class="row postsgrid">

                <?php
$homepageposts = new WP_Query(array(
    'posts_per_page' => 2,
));

while ($homepageposts->have_posts()) {
    $homepageposts->the_post()?>
                    <div class="card resent_posts_home col-lg-4 col-md-6 postsgrid_post">
                        <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php the_title()?>
                            </h4>
                            <p class="card-text">
                                <?php echo wp_trim_words(get_the_content(), 17) ?>
                            </p>
                            <a href="<?php the_permalink()?>" class="card-link postsgrid__fullpost">full post</a>
                        </div>
                    </div>
                    <?php }
wp_reset_postdata();
?>
            </div>
            <!-- ==========posts============= -->

        </div>
        <div class="col-sm-3 main_sidebar">
            <!-- ====================================================================== -->
            <!-- sidebar -->
            <!-- ====================================================================== -->
            <?php include 'sidebar.php';?>
            <!-- ====================================================================== -->
            <!-- sidebar -->
            <!-- ====================================================================== -->

        </div>
    </div>
</div>
<?php
get_footer();
?>