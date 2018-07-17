<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class=" col-sm-4 header__top-link">
                    <a href="<?php echo get_site_url(); ?>/locations"><?php the_field('top_header_link_text', 'options');?></a>
                </div>
                <div class=" col-sm-8 header__top-menu">
                    <?php
                    $args = array(
                        'theme_location' => 'header-nav',
                        'container' => 'nav',
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="flex-wrap">
                <div class="header__bottom-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php the_field('header_logo', 'options');?>" alt="main-logo">
                    </a>
                </div>
                <div class="header__bottom-toggle-menu">
                    <div class="header__bottom-toggle-menu-btn">
                        <span></span>
                    </div>
                </div>
                <div class="header__bottom-menu">
                    <?php
                    $args = array(
                        'theme_location' => 'secondary-nav',
                        'container' => 'nav',
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main-wrapper">







