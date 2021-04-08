<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alera
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php alera_post_thumbnail(); ?>

    <header class="post-header">
        <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <?php if ( 'post' === get_post_type() ) : ?>
            <?php alera_post_meta(); ?>
        <?php endif; ?>
    </header>

	<div class="post-content">
		<?php the_excerpt(); ?>
	</div>

    <a href="<?php echo esc_url( get_permalink() ); ?>" class="button button-bordered">
        <?php echo esc_html__( 'Read More', 'alera' ); ?>
    </a>
</article>
