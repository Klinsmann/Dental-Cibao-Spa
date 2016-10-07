<?php  get_header();


  /**
  *@desc A page. See single.php is for a blog post layout.
  */

?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 contenido-blog margin-top-down">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article>
				<h3 class="style-blue"><?php the_title();?></h3>
				<p><em>Por <?php the_author();?>
				<?php echo the_date('l, F, jS Y');?>
				en <?php the_category(', ');?>
				<a href="<?php comments_link();?>"><?php comments_number();?></a></em></p>
				<div class="imagen-con-estracto-contenido">
					<figure class="img-articulo">
						<?php 
							if (has_post_thumbnail()){
								the_post_thumbnail();
							}
							
						 ?>
					</figure><!-- fin del div.img-articulo-->
					
					<div class="estracto-contenido-articulo">
						<?php the_content(); ?>
					</div><!-- fin del div.estracto-contenido-articulo -->
				</div><!-- fin del div.imagen-con-estracto-contenido -->
			</article>
	
		<?php endwhile; else:?>
		<h1>Error</h1>
		<p>El contenido para esta página no esta disponible</p>
		<?php endif;?>
		
		</div><!-- fin del div.col-sm-8.contenido -->
		
		<div class="col-sm-4 lateral-blog margin-top-down">
			<?php get_sidebar('blog');?>
		</div><!-- fin del div.col-sm-4.lateral-blog -->
		
	</div><!-- fin del div.row -->
</div><!-- fin del div.container -->


 

  

<?php
  get_footer();
?>
