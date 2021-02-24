<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alera
 */

get_header();
?>

    <section class="content-area" id="main-content">

        <div class="container is-widescreen">

            <div class="columns is-desktop">

                <div class="column is-two-thirds">

                    <main class="site-content">

                        <?php
                            if ( have_posts() ) :

                                while ( have_posts() ) :
                                    the_post();

                                    get_template_part( 'template-parts/content', get_post_type() );

                                endwhile;

                                the_posts_pagination();
                                
                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif;
                        ?>

                    </main>

                </div>

                <div class="column is-one-third">
                    <?php get_sidebar(); ?>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>
