<?php
/**
 * Template for displaying Author Archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package WordPress
 * @subpackage Titan
 * @since 3.2
 */

get_header(); ?>

<div class="container p-5">
<div class="row">

<div class="col-12 mt-3 pb-3 text-center">
	<p>Blogs Written by: <?php the_author_posts_link(); ?></p>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="col-12 col-md-4 mt-5">
			<?php the_post_thumbnail( 'thumbnail', array( 'class'  => 'img-fluid d-block mx-auto' ) ); ?>
		</div>
		<div class="col-12 col-md-8 mt-5">
			<a href="<?php the_permalink(); ?>"><h2 class="secondary"><?php the_title(); ?></h2></a>
			<p><?php the_time('d M Y'); ?> in <?php the_category('&');?></p>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>" class="btn primary-btn" title="Read more">Read More</a>
		</div>
	</div>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>
<!-- End Loop -->


	</div>
</div>


<?php get_footer(); ?>
