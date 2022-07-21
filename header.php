<?php
/**
 * The template for displaying the header
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(array( "activeloading" )); ?> style="margin: 0;">
<div class="loading-content">
    <div class="loader"></div>
</div>
<header id="header_site">
    <div class="header-inner">
        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light nav_header navbar-dark">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_option( 'zebe_option_header_logo', '' ); ?>" class="img-fluid" width="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' 	=> 'Navmenu', 
                            'container' 			=> 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarSupportedContent',
                            'menu_class'      => 'navbar-nav ', 
                            'walker'=> new SH_Arrow_Walker_Nav_Menu()   
                        ) ); 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<style>

</style>