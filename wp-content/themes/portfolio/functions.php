<?php
// Activer les images à la une pour les articles
add_theme_support( 'post-thumbnails' );

// Enregistrer les menus du thème
function register_my_menu() {
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete', 'your-textdomain' ),
        'footer-menu' => __( 'Menu De Pied', 'your-textdomain' ),
    ) );
}
add_action( 'init', 'register_my_menu' );

