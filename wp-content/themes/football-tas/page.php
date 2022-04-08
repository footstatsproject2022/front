<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Titan
 * @since 3.0.0
 */

 get_header(); ?>

 	<div class="container">
 		<div class="row">
 			<div class="col-12">
				<div id="primary" class="content-area">
			 		<main id="main" class="site-main" role="main">

			 			<?php
			 				while ( have_posts() ) : the_post();
			 					the_content();
			 				endwhile; // End of the loop.
			 			?>

			 		</main><!-- #main -->
			 	</div><!-- #primary -->
 			</div>
 		</div>
 	</div>

 <?php
 //get_sidebar(); -- If sidebar use this.
 get_footer();
