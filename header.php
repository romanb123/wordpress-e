<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">home</a>
            </li>
            <li class="nav-item">
                <a class="navs-link" href="<?php echo site_url('/servises') ?>">servises</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">blog</a>
            </li>
        </ul>
    </nav>