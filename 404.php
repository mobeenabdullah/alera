<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Alera
 */

get_header();
?>

    <section class="content-area">

        <div class="container is-widescreen">

            <div class="columns is-desktop">

                <div class="column is-two-thirds">

                    <main class="site-content">

                        <section class="error-404 not-found">
                            <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'alera' ); ?></h1>
                            </header>

                            <div class="page-content">
                                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'alera' ); ?></p>

                                <?php
                                get_search_form();

                                the_widget( 'WP_Widget_Recent_Posts' );
                                ?>

                                <div class="widget widget_categories">
                                    <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'alera' ); ?></h2>
                                    <ul>
                                        <?php
                                        wp_list_categories( array(
                                            'orderby'    => 'count',
                                            'order'      => 'DESC',
                                            'show_count' => 1,
                                            'title_li'   => '',
                                            'number'     => 10,
                                        ) );
                                        ?>
                                    </ul>
                                </div>

                                <?php
                                $alera_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'alera' ), convert_smilies( ':)' ) ) . '</p>';
                                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$alera_archive_content" );

                                the_widget( 'WP_Widget_Tag_Cloud' );
                                ?>

                            </div>
                        </section>

                    </main>

                </div>

                <div class="column is-one-third">
                    <?php get_sidebar(); ?>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>
