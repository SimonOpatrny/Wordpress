<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

    <!-- Správné načtení style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- Správné načtení script.js se zpožděním -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/moje-logo.jpg" alt="Logo">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="wrapper">
            <div class="wrapper-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/availability-svgrepo-com.svg" alt="">
            </div>

            <div class="wrapper-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <nav>
            <a href="#">Home page</a>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </nav>
    </header>

    <main>
