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
<div id="page" class="hfeed site">
	<header id="header" class="header">
		<div class="container">
			<div class="menu-responsivo">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="<?php echo esc_url( home_url( '' ) ); ?>">INÍCIO</a></li
					><li><a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">BURGUER MASH</a></li
					><li><a href="<?php echo esc_url( home_url( 'cardapio' ) ); ?>">CARDÁRPIO</a></li
					><li><a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>">FOTOS</a></li
					><li><a href="<?php echo esc_url( home_url( 'contato' ) ); ?>">FALE CONOSCO</a></li>
				</ul>								
			</div>

			<div class="row header-menu">
				<div class="col-md-12">
					<nav>
						<ul class="menu-principal clearfix">
							<li class='op-menu'><a href="<?php echo esc_url( home_url( '' ) ); ?>">INÍCIO</a></li
							><li class='op-menu'><a href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">BURGUER MASH</a></li
							><li class='op-menu'><a href="<?php echo esc_url( home_url( 'cardapio' ) ); ?>">CARDÁRPIO</a></li
							><li class='op-logo'><a href="<?php echo esc_url( home_url( '' ) ); ?>"><img class="logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/></a></li
							><li class='op-menu'><a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>">FOTOS</a></li
							><li class='op-menu'><a href="<?php echo esc_url( home_url( 'contato' ) ); ?>">FALE CONOSCO</a></li
							><li class='op-redes'>
								<ul class="redes_sociais_header">
									<li class="youtube"><a target="_blank" href="#"></a></li>
									<li class="instagram"><a target="_blank" href="#"></a></li>
									<li class="twitter"><a target="_blank" href="#"></a></li>
									<li class="facebook"><a target="_blank" href="#"></a></li>
								</ul>	
							</li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


