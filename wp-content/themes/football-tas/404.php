<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
					<div class="col-12 text-center">
						<div class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'titan' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'titan' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .page-content -->
						</div><!-- .error-404 -->
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
