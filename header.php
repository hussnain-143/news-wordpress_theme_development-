<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | <?php wp_title();?></title>
    <?php wp_head();?>
</head>
<body>
    <div class="header-container">
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
        </div>
        <div class="header-menu">
            <?php
            wp_nav_menu(array(
                
                'theme_location' => 'primary_menu',
                'menu_class' => 'nav-menu',
            ) );
            ?>
        </div>
    </div>