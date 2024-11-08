<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>


      <div class="menu-header">
        <!-- Menu principal -->
        <nav class="menu_principal">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'nav-menu'
            ));
            ?>
        </nav>
      </div>
    </header>