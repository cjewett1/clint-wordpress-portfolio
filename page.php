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
 * @package clinton-gorda-theme
 */

 ?>

 <?php get_header(); ?>
	 <main>
		 <h2>This is the page.php</h2>
		 <h3>Page under construction! Check back later!</h3>
		 <?php
			 if ( have_posts() ) :
				 while ( have_posts() ) : the_post();
					 //whats being displayed, this will come from our template part
					 get_template_part('template-parts/content', 'page');
				 endwhile;
			 endif;
		 ?>

	 </main>


 <?php get_footer(); ?>
