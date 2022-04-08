<?php 
/**
 * Template Name: Transparent header layout 
 */

 get_header("transparent");

 ?>

 <div class="page-header">
     <div class="container">
         <h1><?php the_title(); ?></h1>
     </div>
 </div> 

 <div class="content-area">
     <div class="container">
        <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; // End of the loop.
        ?>
     </div>
 </div>

 <?php 

 get_footer();

?>