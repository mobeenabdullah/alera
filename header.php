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

        <div class="top-bar">
            <div class="container is-widescreen">
                <div class="columns">
                    <div class="column">
                        <ul class="top-bar-contact-info">
                            <?php $get_phone_number = get_theme_mod('phone_number'); ?>
                            <?php if (!empty($get_phone_number)) : ?>
                                <li>Call: <?php echo esc_html($get_phone_number); ?></li>
                            <?php endif; ?>

                            <?php $get_email_id = get_theme_mod('email_id'); ?>
                            <?php if (!empty($get_email_id)) : ?>
                                <li>Email: <?php echo esc_html($get_email_id); ?></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="column">
                        <?php
                        global $wp_filesystem;
                        include_once ABSPATH . 'wp-admin/includes/file.php';
                        WP_Filesystem();
                        ?>
                        <ul class="top-bar-social-icons">
                            <?php $get_twitter = get_theme_mod('twitter_username'); ?>
                            <?php if (!empty($get_twitter)) : ?>
                                <li>
                                    <a href="https://twitter.com/<?php echo esc_html($get_twitter); ?>" target="_blank">
                                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M24,4.3c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2C19.3,2.6,18,2,16.6,2 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,7.8,4.1,5.9,1.7,2.9C1.2,3.6,1,4.5,1,5.4c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.4,1.6,9.2,1,8.9c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.2,23.3,5.3,24,4.3"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $get_facebook = get_theme_mod('facebook_username'); ?>
                            <?php if (!empty($get_facebook)) : ?>
                                <li>
                                    <a href="https://facebook.com/<?php echo esc_html($get_facebook); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $get_instagram = get_theme_mod('instagram_username'); ?>
                            <?php if (!empty($get_instagram)) : ?>
                                <li>
                                    <a href="https://instagram.com/<?php echo esc_html($get_instagram); ?>" target="_blank">
                                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M16,3H8C5.243,3,3,5.243,3,8v8c0,2.757,2.243,5,5,5h8c2.757,0,5-2.243,5-5V8C21,5.243,18.757,3,16,3z M19,16c0,1.654-1.346,3-3,3H8c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3V16z"/><path d="M12 7c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5S14.757 7 12 7zM12 15c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 15 12 15zM17 6A1 1 0 1 0 17 8 1 1 0 1 0 17 6z"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $get_youtube = get_theme_mod('youtube_channel_url'); ?>
                            <?php if (!empty($get_youtube)) : ?>
                                <li>
                                    <a href="<?php echo esc_html($get_youtube); ?>" target="_blank">
                                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,15.464V8.536L16,12L10,15.464z"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container is-widescreen">

            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">

                    <?php the_custom_logo(); ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                        $alera_description = get_bloginfo( 'description', 'display' );
                        if ( $alera_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo esc_html($alera_description); ?></p>
                    <?php endif; ?>

                    <a href="#!" role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="mainNavbar">
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

    <?php if ( is_home() ) : ?>
        <!-- HERO -->
        <section class="site-hero" <?php $get_featured_area_background_image = get_theme_mod('featured_area_background_image'); if (!empty($get_featured_area_background_image)) { ?> style="background-image: url('<?php echo esc_attr($get_featured_area_background_image); ?>');" <?php } ?>>
            <div class="site-hero-content">
                <?php $get_featured_area_heading = get_theme_mod('featured_area_heading'); ?>
                <?php if (!empty($get_featured_area_heading)) : ?>
                    <h2><?php echo esc_html($get_featured_area_heading); ?></h2>
                <?php endif; ?>

                <?php $get_featured_area_description = get_theme_mod('featured_area_description'); ?>
                <?php if (!empty($get_featured_area_description)) : ?>
                    <p><?php echo esc_html($get_featured_area_description); ?></p>
                <?php endif; ?>
            </div>
        </section>
        <!-- ./HERO -->
    <?php endif; ?>
