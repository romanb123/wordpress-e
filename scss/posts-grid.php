        <!-- ==========posts============= -->
        <h1>resent posts</h1>
        <div class="row postsgrid">

            <?php
$homepageposts = new WP_Query(array(
    'posts_per_page' => 2,
));

// while ($homepageposts->have_posts()) {
//     $homepageposts->the_post()?>
//                 <div class="card resent_posts_home col-lg-4 col-md-6 postsgrid_post">
//                     <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Card image" style="width:100%">
//                     <div class="card-body">
//                         <h4 class="card-title">
//                             <?php the_title()?>
//                         </h4>
//                         <p class="card-text">
//                             <?php echo wp_trim_words(get_the_content(), 17) ?>
//                         </p>
//                         <a href="<?php the_permalink()?>" class="card-link postsgrid__fullpost">full post</a>
//                     </div>
//                 </div>
//                 <?php }
wp_reset_postdata();
// ?>
        </div>
        <!-- ==========posts============= -->