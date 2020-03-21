<div class="row projects_section">
    <div class="projects_section__heading">
        <h1>resent projects</h1>
    </div>
    <?php $Projects = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => -1,
));
while ($Projects->have_posts()) {
    $Projects->the_post();?>
    <div class="col-lg-4 col-md-6">
        <div class="project_card">
            <div class="project_card__side project_card__side--front">
                <div class="project_card__image">
                </div>
                <h4 class="project_card__heading">
                    <span class="project_card__heading__span"><?php the_title()?></span>
                </h4>
                <div class="project_card__details">
                <?php echo wp_trim_words(get_the_content(), 17) ?>
                </div>
                <div class="project_card__skills">
                    <ul>
                    <?php the_field('skills')?>
                    </ul>
                </div>
                <div class="project_card__buttons__front">
                    <a href="<?php the_field('repository')?>" class="btn btn--white">repository</a>
                    <?php if (get_field('url')) {?>
                    <a href="<?php the_field('url')?>" class="btn btn--white">live</a>
                    <?php }?>
                </div>
            </div>
            <div class="project_card__side project_card__side--back">
                
                <div class="project_card__buttons__back">
                    <div class="project_card__backtitle"><?php the_title()?></div>
                    <a href="<?php the_field('repository')?>" class="btn btn--white">repository</a>
                    <?php if (get_field('url')) {?>
                    <a href="<?php the_field('url')?>" class="btn btn--white">live</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?> 
</div>