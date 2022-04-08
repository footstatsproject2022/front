<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Titan
 * @since 3.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container my-5 py-5">
				<div class="row">
					<div class="col-12">
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h2 class="results-title">
									<?php _e( 'Search results for:', 'titan' ); ?>
								</h2>
								<div class="page-description">
									<p><?php echo get_search_query(); ?></p>
								</div>
							</header><!-- .page-header -->

							<?php
							// Start the Loop.
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'theme-parts/content/content', 'excerpt' );

								// End the loop.
							endwhile;

							// Previous/next page navigation.
							titan_the_posts_navigation();

							// If no content, include the "No posts found" template.
						else :
							get_template_part( 'theme-parts/content/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
