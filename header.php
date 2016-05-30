<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name = "viewport" content ="initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
      wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<div id="loading-bar-wrapper">
    <div id="loading-bar"></div>
</div>
<script>jQuery("#loading-bar").css('width','20%');</script>

<div class="site-wrapper">
    <header id="header" class="header">
        <div class="header-wrapper clearfix">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <?php
                    if (the_custom_logo()) :
                        the_custom_logo();
                    else :
                        echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt=" '.  get_bloginfo('name') . '" title="' . get_bloginfo('description') . '">';
                    endif;
                ?>
                <span class="desc"><?php bloginfo('description'); ?></span>
            </a>
            <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
                <button class="site-nav-switch">
                    <span class="icon icon-menu"></span>
                </button>
            <?php endif; ?>
        </div>
        <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
            <nav class="site-menu">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'header-menu',
                    'menu_class'      => 'header-menu',
                )); ?>
            </nav>
        <?php endif; ?>
    </header>
    <script>jQuery("#loading-bar").css('width','40%');</script>
