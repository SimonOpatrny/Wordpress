<!DOCTYPE html>
<html <?Php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            get_header();   
        ?>
 
        <main id="primary" class="site-main">
        <?php
        the_content();
        ?>

        <?php
            get_footer();
        ?>

    
    </body>
</html>



