<?php
get_header(); ?>
<div id="content">
	<section id="paginas" class="sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1 class="alexc">A Burger Mash</h1>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-5 text-left">
					<h2>Burger Mash</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo 
					consequat. Duis aute irure dolor in reprehenderit in volupt
					Excepteur sint occaecat cupidatat non proident, sunt in.</p>
					<p>Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo 
					consequat. Duis aute irure dolor in reprehenderit in volupt
					Excepteur sint occaecat cupidatat non proident, sunt in</p><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">FALE CONOSCO</a>
				</div>
				<div class="col-md-6 col-md-offset-1">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobredeta.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
