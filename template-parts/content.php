<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alera
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( is_singular() ) : ?>

        <header class="post-header">
            <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
            <?php alera_post_meta(); ?>
        </header>

        <?php alera_post_thumbnail(); ?>

    <?php else : ?>

        <?php alera_post_thumbnail(); ?>

        <header class="post-header">
            <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            <?php alera_post_meta(); ?>
        </header>

    <?php endif; ?>

	<div class="post-content">
		<?php
            if (is_singular()) :
                the_content();
            else :
                the_excerpt();
            endif;

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alera' ),
                'after'  => '</div>'
            ) );
		?>
	</div>

    <?php if ( ! is_singular() ) : ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="button button-bordered"><?php echo esc_html__( 'Read More', 'alera' ); ?></a>
    <?php endif; ?>

</article>
