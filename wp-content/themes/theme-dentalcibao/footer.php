<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<!--INSERTA TU PIE DE PAGINA AQUI-->


<footer>
	<div class="container-fluid redes-sociales-container">
		<div class="container">
			<div class="row">
				<div class="redes-sociales">
					<ul class="list-unstyled list-inline text-center">
						<li><a href="https://www.facebook.com/DentalCibao" target="_blank"></a></li>
						<li><a href="https://www.instagram.com/dentalcibaospa" target="_blank"></a></li>
						<li><a onclick="return skypeCheck();" href="skype:Dentalcibaospa?call"></a></li>
					</ul>
				</div><!-- fin del div.redes-sociales-->
			</div><!-- fin del div.row -->
		</div><!-- fin del div.container -->
	</div><!-- fin del div.container-fluid -->

	<div class="container-fluid menu-footer-container">
		<div class="container">
			<div class="row">
				<nav class="navbar-default">
					<?php wp_nav_menu(array('theme_location' => 'primary-footer', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
						<?php dynamic_sidebar('navbar-right'); ?>
				</nav>
				
			</div><!-- fin del div.row -->
		</div><!-- fin del div.container -->
	</div><!-- fin del div.container-fluid -->


	<div class="container-fluid texto-copy">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">

			<p class="cp">Todos los derechos reservados. © 2016 | www. dentalcibao.com | Ven a sonreir con nosotros.</p>
			<p class="adress">Calle Ramón Matias Mella esq. Francisco del Rosario Sanchez, BIOPLAZA, 2do. Nivel, La Trinitaria,
Santiago, República Dominicana. Tel: 809-336-1106 / Email: info@dentalcibao.com</p>
			<figure>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/map.jpg" alt="">
				<h4 class="text-center"><a href="http://dentalcibao.com/contacto">Cómo llegar a la clínica</a></h4>
			</figure>
				<small>Sitio desarrollo por: <a href="http://expression.com.do">Expression.com.do</a></small>
		</div>
		</div><!-- fin del div.row -->
	</div><!-- fin del div.container -->
</div>
</footer>
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>