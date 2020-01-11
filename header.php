<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <?php
$args = array(
    'theme location' => 'navbarmenu',
    'container' => 'ul',
    'menu_class' => 'navbar-nav',
    'add_li_class' => 'nav-item',
);
wp_nav_menu($args);
?>
    </nav>