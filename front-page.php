<?php
/**
 * The template for displaying the front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

	<section id="fpWidgets">

		<?php dynamic_sidebar('fpwidget-1'); ?>
		<?php dynamic_sidebar('fpwidget-2'); ?>
		<?php dynamic_sidebar('fpwidget-3'); ?>

	</section><!-- #fpWidgets -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
