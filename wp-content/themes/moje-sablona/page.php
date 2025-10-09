<!DOCTYPE html>
<?php $theme_url = get_template_directory_uri(); ?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


         <?php wp_head(); ?>
    </head>
    <body>



        <main id="primary" class="site-main">
            <?php
                the_content();
            ?>
        </main>

        <?php
            get_footer();
        ?>
    </body>
</html>