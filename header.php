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
    <header class="header" role="banner">

        <div class="top-bar">
            <div class="container is-widescreen">
                <div class="columns">
                    <div class="column  has-text-centered-mobile">
                        <ul class="top-bar-contact-info">
                            <?php $get_phone_number = get_theme_mod('phone_number'); ?>
                            <?php if (!empty($get_phone_number)) : ?>
                                <li>
                                    <?php echo esc_html__( 'Call:', 'alera' ); ?>
                                    <?php echo esc_html($get_phone_number); ?>
                                </li>
                            <?php endif; ?>

                            <?php $get_email_id = get_theme_mod('email_id'); ?>
                            <?php if (!empty($get_email_id)) : ?>
                                <li>
                                    <?php echo esc_html__( 'Email:', 'alera' ); ?>
                                    <?php echo esc_html($get_email_id); ?>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="column">
                        <ul class="top-bar-social-icons has-text-centered-mobile">
                            <?php $get_twitter = get_theme_mod('twitter_username'); ?>
                            <?php if (!empty($get_twitter)) : ?>
                                <li>
                                    <a href="<?php echo esc_url( 'https://twitter.com/' . $get_twitter); ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $get_facebook = get_theme_mod('facebook_username'); ?>
                            <?php if (!empty($get_facebook)) : ?>
                                <li>
                                    <a href="<?php echo esc_url( 'https://facebook.com/' . $get_facebook); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.397,20.997v-8.196h2.765l0.411-3.209h-3.176V7.548c0-0.926,0.258-1.56,1.587-1.56h1.684V3.127 C15.849,3.039,15.025,2.997,14.201,3c-2.444,0-4.122,1.492-4.122,4.231v2.355H7.332v3.209h2.753v8.202H13.397z"></path></svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $get_instagram = get_theme_mod('instagram_username'); ?>
                            <?php if (!empty($get_instagram)) : ?>
                                <li>
                                    <a href="<?php echo esc_url( 'https://instagram.com/' . $get_instagram); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $get_youtube = get_theme_mod('youtube_channel_url'); ?>
                            <?php if (!empty($get_youtube)) : ?>
                                <li>
                                    <a href="<?php echo esc_url($get_youtube); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404 c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814 c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763 C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z"></path></svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container is-widescreen">

            <nav class="navbar" role="navigation" aria-label="<?php echo esc_attr__( 'main navigation', 'alera' ); ?>">
                <div class="navbar-brand">

                    <?php the_custom_logo(); ?>
                    <div class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php esc_html( bloginfo( 'name' ) ); ?>
                        </a>
                    </div>
                    <?php
                        $alera_description = get_bloginfo( 'description', 'display' );
                        if ( $alera_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo esc_html($alera_description); ?></p>
                    <?php endif; ?>
                    
                    <button type="button" class="navbar-burger burger" aria-label="<?php echo esc_attr__( 'menu', 'alera' ); ?>" aria-expanded="false" data-target="mainNavbar">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </button>

                </div>

                <div id="mainNavbar" class="navbar-menu">

                    <div class="navbar-end">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 5,
                                'container'         => false,
                                'menu_class'        => 'navbar-menu',
                                'menu_id'           => 'primary-menu',
                                'before'            => '<div>',
                                'after'             => "</div>",                                
                                'walker'            => new Navwalker())
                            );
                        ?>
                    </div>

                </div>
            </nav>

        </div>
    </header>
    <!-- ./HEADER -->
    <?php $enable_featured_area = get_theme_mod('enable_featured_area'); ?>
    <?php if ( is_home() && isset($enable_featured_area) && $enable_featured_area == true ) : ?>
        <!-- HERO -->
        <section class="site-hero" <?php $get_featured_area_background_image = get_theme_mod('featured_area_background_image'); if (!empty($get_featured_area_background_image)) { ?> style="background-image: url('<?php echo esc_url($get_featured_area_background_image); ?>');" <?php } ?>>
            <div class="site-hero-content">
                <?php $get_featured_area_heading = get_theme_mod('featured_area_heading'); ?>
                <?php if (!empty($get_featured_area_heading)) : ?>
                    <h1><?php echo esc_html($get_featured_area_heading); ?></h1>
                <?php endif; ?>

                <?php $get_featured_area_description = get_theme_mod('featured_area_description'); ?>
                <?php if (!empty($get_featured_area_description)) : ?>
                    <p><?php echo esc_html($get_featured_area_description); ?></p>
                <?php endif; ?>
            </div>
        </section>
        <!-- ./HERO -->
    <?php endif; ?>
