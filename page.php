<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
<!-- ============================================================================================================ -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item active">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================================================================ -->
<?php }

  get_footer();

?>