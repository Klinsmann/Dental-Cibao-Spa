<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

?>

            <?php if (have_posts()) { ?> 
            <?php 
            // start the loop
            while (have_posts()) {
              the_post();
              
              /* Include the Post-Format-specific template for the content.
              * If you want to override this in a child theme, then include a file
              * called content-___.php (where ___ is the Post Format name) and that will be used instead.
              */
              get_template_part('content', get_post_format());
            }// end while
            
            bootstrapBasicPagination();
            ?> 
            <?php } else { ?> 
            <?php get_template_part('no-results', 'index'); ?>
            <?php } // endif; ?> 
<?php get_footer(); ?> 