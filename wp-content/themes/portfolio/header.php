<body <?php body_class(); ?>>
      <header>
        <h2><?php bloginfo('description'); ?></h2>
        <nav class="main-navigation">
        <?php
            if ( has_nav_menu( 'header-menu' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'      => 'ul', 
                'menu_class'     => 'menu'
            ) );
            } else {
            echo '<p>Le menu de tête n\'est pas défini. Veuillez en ajouter un dans le tableau de bord WordPress.</p>';
            }
        ?>
        </nav>
      </header>
