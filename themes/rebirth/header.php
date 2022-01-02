<!DOCTYPE html>
<html <?php get_language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php wp_head(); ?>
</head>

<body>
    <?php get_template_part('mobile-menu')?>
    <header class="header">
        <div class="header__wrapper">
            <div class="container">
                <?php get_template_part('navigation')?>
            </div>
        </div>
    </header>