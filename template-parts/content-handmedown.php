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

		<?php get_template_part( 'template-parts/handmedown', 'article-header' ); ?>

		<?php get_template_part( 'template-parts/handmedown', 'slideshow' ); ?>

		<?php get_template_part( 'template-parts/handmedown', 'pricing' ); ?>

		<?php get_template_part( 'template-parts/handmedown', 'details' ); ?>
		
		<?php get_template_part( 'template-parts/handmedown', 'description' ); ?>
		
		<?php //get_template_part( 'template-parts/handmedown', 'seller-info' ); ?>

		<?php //get_template_part( 'template-parts/handmedown', 'footer' ); ?>


</article><!-- #post-## -->
