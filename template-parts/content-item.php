<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php get_template_part( 'template-parts/item', 'header' ); ?>

		<?php get_template_part( 'template-parts/item', 'slideshow' ); ?>

		<?php get_template_part( 'template-parts/item', 'pricing' ); ?>

		<?php get_template_part( 'template-parts/item', 'details' ); ?>

		<?php get_template_part( 'template-parts/item', 'seller-info' ); ?>

		<?php get_template_part( 'template-parts/item', 'footer' ); ?>


</article><!-- #post-## -->
