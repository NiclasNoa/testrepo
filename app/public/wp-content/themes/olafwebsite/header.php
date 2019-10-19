<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Olaf Timm</title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header class="site-header">
            <div>
                <h1 class="float-left">Olaf Timm</h1>
                <div class="navigation-group">

                    <nav class="main-navigation">
                        <?php

                    //Dynamic navigation bar:
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu_location'
                    ));

                    ?>
                    </nav>

                </div>
            </div>
        </header>


    </body>

</html>