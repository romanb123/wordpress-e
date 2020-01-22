<?php get_header();
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">PORTFOLIO</h1>
        <p class="lead">my portfolio</p>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <!-- ==========projects============= -->
            <h1>resent projects</h1>
            <div class="row">
                <?php $Projects = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => -1,

));
while ($Projects->have_posts()) {
    $Projects->the_post();?>
                <div class="card resent_posts_home col-sm-3">
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title()?></h4>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 17) ?></p>
                        <p><?php the_field('skills')?></p>
                        <a href="<?php the_field('repository')?>" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">repository</a>
                        <?php if (get_field('url')) {?>
                        <a href="<?php the_field('url')?>" class="btn btn-secondary btn-lg active" role="button"
                            aria-pressed="true">live</a>
                        <?php }?>



                    </div>
                </div>
                <?php }?>



            </div>








            <!-- ==========projects============= -->
            <!-- ==========posts============= -->
            <h1>resent posts</h1>
            <div class="row">

                <?php
$homepageposts = new WP_Query(array(
    'posts_per_page' => 2,
));

while ($homepageposts->have_posts()) {
    $homepageposts->the_post()?>
                <div class="card resent_posts_home col-sm-3">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Card image"
                        style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title()?></h4>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 17) ?></p>
                        <a href="<?php the_permalink()?>" class="card-link">full post</a>
                    </div>
                </div>
                <?php }
wp_reset_postdata();
?>
            </div>
            <!-- ==========posts============= -->

        </div>
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
</div>
<?php
get_footer();
?>