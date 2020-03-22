<nav class="sidebar">
        <ul class="sidebar__list">
            <?php
$allposts = get_posts();
foreach ($allposts as $post) {?>
            <li class="sidebar__list__item"><a href="<?php echo get_page_link($post->ID) ?>"
                    class="sidebar__list__link"><?php echo $post->post_title; ?></a></li>
            <?php }?>
        </ul>
    </nav>