<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alera
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php alera_post_thumbnail(); ?>

	<div class="page-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alera' ),
			'after'  => '</div>',
		) );
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
