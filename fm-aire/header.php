<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/FM-AIRE-LOGO.png'; ?>" alt="Logo">
                </a>
            </div>
            <div class="main-navigation">
                    <?php do_action( 'wpforo_menu_bar_start' ); ?>
                    <div  style="width: 100%">
                        <?php WPF()->tpl->nav_menu() ?>
                    </div>
                    <?php do_action( 'wpforo_menu_bar_end' ); ?>
            </div>
        </div>
    </header>
