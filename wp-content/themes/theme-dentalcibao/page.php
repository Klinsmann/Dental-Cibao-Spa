<?php  get_header();


  /**
  *@desc A page. See single.php is for a blog post layout.
  */

?>




   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
      
  <?php the_content(); ?>

  <?php
  

  endwhile; else:  endif;?>

  

<?php
  get_footer();
?>
