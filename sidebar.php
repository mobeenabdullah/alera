<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alera
 */

if ( ! is_active_sidebar( 'sidebar ' ) ) {
	return;
}
?>

<aside class="sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->
