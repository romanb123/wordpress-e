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
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    search
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="search" aria-describedby="emailHelp">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body " id="search-result">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php dynamic_sidebar( 'home_right_1' ); ?>