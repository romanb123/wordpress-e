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
            <?php
$args = array(
    'theme location' => 'navbarmenu',
    'container' => 'ul',
    'menu_class' => ' navigation__list',
    'add_li_class' => 'navigation_item',
);
wp_nav_menu($args);
?>
        </nav>
    </div>
    <div class="jumbotron jumbotron-fluid header">
    <div class="header__main">
        <h1 class="header__main--title">PORTFOLIO</h1>
        <p class="header__main--subtitle">my portfolio</p>
    </div>
</div>
    <!-- navbar end -->
  