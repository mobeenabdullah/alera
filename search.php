<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Alera
 */

get_header();
?>

    <section class="content-area" id="main-content">

        <header class="page-header">
            <h1 class="page-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'alera' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>

        <div class="container is-widescreen">

            <div class="columns is-desktop">

                <div class="column is-two-thirds">

                    <main class="site-content">

                    <?php if ( have_posts() ) : ?>

                        <?php

                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', 'search' );

                            endwhile;

                            the_posts_pagination();

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif;
                        ?>

                    </main>

                </div>

                <div class="column">
                    <?php get_sidebar(); ?>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>
