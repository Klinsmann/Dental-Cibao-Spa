<?php  get_header();


  /**
  *@desc A page. See single.php is for a blog post layout.
  */

?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 contenido-blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<p><em>Por <?php the_author();?>
			<?php echo the_date('l, F, jS Y');?>
			en <?php the_category(', ');?>
			<a href="<?php comments_link();?>"><?php comments_number();?></a></em></p>
			
			<?php global $more; $more = false; ?>
			<p>holaa</p>
			<?php the_content('<div>Leer mas</div>'); ?>
			<?php $more = true; ?>
		</article>
	
		<?php endwhile; else:?>
		<h1>Error</h1>
		<p>El contenido para esta página no esta disponible</p>
		<?php endif;?>
		
		</div><!-- fin del div.col-sm-8.contenido -->
		
		<div class="col-sm-4 lateral-blog">
			<?php get_sidebar('blog');?>
		</div><!-- fin del div.col-sm-4.lateral-blog -->
		
	</div><!-- fin del div.row -->
</div><!-- fin del div.container -->


 

  

<?php
  get_footer();
?>
