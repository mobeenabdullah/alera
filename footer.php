<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alera
 */

?>

    <footer class="footer">
        <div class="container is-widescreen">
            <div class="columns is-desktop">
                <div class="column is-one-third">
                    <?php if ( is_active_sidebar( 'footer-1 ' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-one-third">
                    <?php if ( is_active_sidebar( 'footer-2 ' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-one-third">
                    <?php if ( is_active_sidebar( 'footer-3 ' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php $get_copyright_text = get_theme_mod('copyright_text', '&copy; 2020 - All rights reserved. Theme by <a href="https://www.mobeenabdullah.com">Mobeen Abdullah</a>'); ?>
        <?php if (!empty($get_copyright_text)) : ?>
        <div class="site-info has-text-align-center">
            <?php echo esc_html($get_copyright_text); ?>
        </div>
        <?php endif; ?>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
