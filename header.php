<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
new WOW().init();
</script>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header id="headerb" class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo esc_url( home_url( '' ) ); ?>"><img class="logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/></a>
					<div class="redes">
						<ul class="redes_sociais_header">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href=""></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-dark">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="row collapse navbar-collapse" id="navbarSupportedContent">
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/' ); ?>">Início</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/historia' ); ?>">A Unique Massagem</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/marca-propria' ); ?>">Massagens</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/distribuicao' ); ?>">Estética</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/contato' ); ?>">Fale Conosco</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


