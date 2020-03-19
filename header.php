<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body>
    <!-- navbar start -->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="n-toggle">
        <label for="n-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>
        <div class="navigation__background">&nbsp;</div>
        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation_item"> <a href="dfdf" class="navigation_link">dfgdfg</a></li>
                <li class="navigation_item"> <a href="dfdf" class="navigation_link">dfgdfg</a></li>
                <li class="navigation_item"> <a href="dfdf" class="navigation_link">dfgdfg</a></li>
                <li class="navigation_item"> <a href="dfdf" class="navigation_link">dfgdfg</a></li>
                <li class="navigation_item"> <a href="dfdf" class="navigation_link">dfgdfg</a></li>
            </ul>
        </nav>
    </div>
    <!-- navbar end -->
    <nav class="navbar navbar-expand-sm bg-light navbar">
        <?php
$args = array(
    'theme location' => 'navbarmenu',
    'container' => 'ul',
    'menu_class' => 'navbar-nav navbar__ulist',
    'add_li_class' => 'nav-item navbar_ulist__item',
);
wp_nav_menu($args);
?>
    </nav>