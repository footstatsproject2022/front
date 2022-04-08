<?php
/**
 * Template Name: Home Page 
 */
 
    get_header(); 

    if ( have_posts() ) {

        // Load posts loop.
        while ( have_posts() ) {
            the_post();
            the_content();
        }

    }

    get_footer();