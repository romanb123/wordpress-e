<?php $Projects = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => -1,
));
while ($Projects->have_posts()) {
    $Projects->the_post();?>






                <!-- <div class="card  projects_grid__project">
                        <h4 class="card-title projects_grid__project__title">
                            <!-- <?php the_title()?> -->
                        <!-- </h4>
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
                    </div> -->
                <?php }?> -->