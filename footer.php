<div class="jumbotron footer" style="margin-bottom:0">
    <div class="row">
        <div class="col-sm-6 footer__section1">
            <h3>contact us</h3>

            <?php echo do_shortcode('[contact-form-7 id="1234" title="Contact form 1"]'); ?>

        </div>

        <!-- menu section -->
        <div class="col-sm-3 footer__section2">
            <h3>pages</h3>
            <?php
$pages = get_pages();
foreach ($pages as $page) {?>


            <!-- ==========html=============  -->
            <li class="list-group-item footer__pages">
                <a href="<?php echo get_page_link($page->ID) ?>">
                    <?php echo $page->post_title; ?></a>
            </li>

            <!-- ==========html=============        -->
            <?php }

?>
        </div>
        <!-- posts section -->
        <div class="col-sm-3 footer__section2">
            <h3>posts</h3>

            <?php
$posts = get_posts();
foreach ($posts as $post) {?>


            <!-- ==========html=============  -->
            <li class="list-group-item footer__sectionposts">
                <a href="<?php echo get_page_link($post->ID) ?>">
                    <?php echo $post->post_title; ?></a>
            </li>

            <!-- ==========html=============        -->
            <?php }?>
        </div>

    </div>
</div>

<?php wp_footer();?>
</body>

</html>