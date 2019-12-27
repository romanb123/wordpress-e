<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <?php wp_nav_menu(array(
    'theme location' => 'navbarmenu',
    'walker' => new wp_bootstrap_navwalker(),
))?>
        <!-- <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url() ?>">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/servises') ?>">servises</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">blog</a>
            </li>
        </ul> -->
    </nav>