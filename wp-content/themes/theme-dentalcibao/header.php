<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
 
<!--INSERTA TU ENCABEZADO AQUI-->
<div class="contacto-fijo hidden-md hidden-sm visible-xs">
	<div class="contacto-fijo-tel">
		<figure>
			<img src="http://dentalcibao.com/wp-content/uploads/2016/07/ico-phone4.png">
		</figure>
		<div class="texto-llamado-accion">
			<a href="tel:+18093361106"><p>Llámanos ahora</p></a>
		</div>
	</div>
	<div class="contacto-fijo-mail">
		<figure>
			<img src="http://dentalcibao.com/wp-content/uploads/2016/07/ico-mail4.png">
		</figure>
		<div class="texto-llamado-accion">
			<a href="http://dentalcibao.com/contacto"><p>Cuéntanos tu caso</p></a>
		</div>
	</div>
</div>
<header class="container-fluid header-top">
	<div class="container">
		<div class="row">
			<figure class="logo col-sm-6 col-xs-12">
				<a href="http://dentalcibao.com">Clínica dental en República Dominicana - Dental Cibao Spa</a>
        	</figure>
        	<div class="datos-contacto col-sm-6 col-xs-12">
          		<ul class="list-unstyled pull-right">
          		  	<li class="header-tel">809-336-1106</li>
          		 	 <li class="header-tel">1-800-676-9295</li>
           			 <li class="header-mail">info@dentalcibao.com</li>
           			<li class="band-en"><a href="http://dentalcibao.com/home">English version</a></li>
         		 </ul>
        </div><!-- fin del div.datos-contacto -->
		</div><!--Fin del div.row-->
	</div><!--Fin del div.container-->
</header>

<section class="container-fluid menu-top">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
					<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
							
			<div class="collapse navbar-collapse navbar-primary-collapse">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
				<?php dynamic_sidebar('navbar-right'); ?> 
			</div><!--.navbar-collapse-->
		</nav>
	</div>
</section>


