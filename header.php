<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alera
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'alera' ); ?></a>

    <!-- HEADER -->
    <header class="header">

        <div class="container is-widescreen">

            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">

                    <?php the_custom_logo(); ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                        $alera_description = get_bloginfo( 'description', 'display' );
                        if ( $alera_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $alera_description; ?></p>
                    <?php endif; ?>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="mainNavbar">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>

                </div>

                <div id="mainNavbar" class="navbar-menu">

                    <div class="navbar-end">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'depth'		=>	3,
                                'menu'			=>	'',
                                'container'		=>	'',
                                'menu_class'		=>	'',
                                'items_wrap'		=>	'%3$s',
                                'walker'		=>	new Bulma_NavWalker(),
                                'fallback_cb'		=>	'Bulma_NavWalker::fallback'
                            ));
                        ?>
                    </div>

                </div>
            </nav>

        </div>
    </header>
    <!-- ./HEADER -->
