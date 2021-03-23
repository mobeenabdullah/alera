<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alera
 */

get_header();
?>

    <section class="content-area" id="main-content">

        <header class="page-header">
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header>

        <div class="container is-widescreen">

            <div class="columns is-variable is-8">

                <div class="column is-9">

                    <main class="site-content">

                    <?php
                        while ( have_posts() ) :
                            the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'page' );

                        endwhile;
                    ?>

                    </main>

                </div>

                <div class="column is-3">
                    <?php get_sidebar(); ?>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>
