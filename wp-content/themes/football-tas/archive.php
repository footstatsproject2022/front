<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Titan
 * @since 3.0.0
 */

get_header(); ?>

<div class="container mb-5">
    <section id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); // Remove for now @TODO // the_archive_description( '<div class="page-description">', '</div>' ); ?>
            </header>
            <!-- .page-header -->

            <?php // Start the Loop. while ( have_posts() ) : the_post(); /* * Include the Post-Format-specific template for the content. * If you want to override this in a child theme, then include a file * called content-___.php (where ___ is the Post Format name) and that will be used instead. */ ?>
            <div class="row mb-5">
                <div class="col-12">

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="row">
                            <div class="col-12">
                                <header class="entry-header">
                                    <?php if ( is_sticky() && is_home() && ! is_paged() ) { printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) ); } the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                </header>
                                <!-- .entry-header -->
                            </div>
                            <div class="col-12">
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div>
                                <!-- .entry-content -->
                            </div>
                        </div>


                    </article>
                    <!-- #post-<?php the_ID(); ?> -->

                </div>
            </div>


            <?php endwhile; else : ?>

            <div class="col-12">
                <h3>Sorry, there are currently no posts. Please check back later!</h3>
            </div>

            <?php endif; /* PageNavi at Bottom */ if (function_exists( 'wp_pagenavi'))?>
            <div class="col-12 mt-1 px-0">
                <?php {wp_pagenavi();} ?>
            </div>
            <?php $wp_query=n ull; $wp_query=$ temp; wp_reset_query(); ?>
        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->
</div>
<?php get_footer();
