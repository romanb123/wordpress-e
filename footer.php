<footer class="footer">
    <ul class="nav">
        <?php
$pages = get_pages();
foreach ($pages as $page) {?>
        <li class="nav__item"><a href="<?php echo get_page_link($page->ID) ?>" class="nav__link">
                <?php echo $page->post_title; ?></a></li>
        <?php }

?>
        <?php
$posts = get_posts();
foreach ($posts as $post) {?>
        <li class="nav__item"><a href="<?php echo get_page_link($post->ID) ?>"
                class="nav__link"><?php echo $post->post_title; ?></a></li>
        <?php }

?>
    </ul>

    <p class="copyright">
        &copy; Copyright 2020 by roman portfolio
    </p>
</footer>
</body>

</html>