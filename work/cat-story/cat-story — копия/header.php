<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <!-- <title>book</title> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/icon/favicon.ico" type="image/ico">
    <script language="JavaScript">
        // document.oncontextmenu = function() {
        //     return false
        // }
    </script>
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="preloader">
        <div class="book_load">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div> -->
    <!-- Preloader End -->
    <div class="logo_wrapper">
        <div class="logo">
            <div class="left_logo">
                <a href="http://wp.local/category/story/">
                    <div>Magical Dumpster<br><span>Cat Stories</span></div>
                </a>
            </div>
            <div class="right_logo">
                <a href="http://wp.local/fr/category/story/">
                    <div>Poubelle magique<br><span>Cat Stories</span></div>
                </a>
            </div>
        </div>
    </div>
    <div class="cats_paws">
        <div class="paws_left"></div>
        <div class="paws_right"></div>
    </div>
    <div id="wrapper">

        <!-- Menu Start -->
        <nav>
            <?php wp_nav_menu(array(
                'theme_location'  => 'top',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            )); ?>
        </nav>

        <!-- Menu End -->
        <div id="container" class="noselect">
            <?php get_sidebar(); ?>
            <section class="book">
                <div class="book_top"></div>
                <article>