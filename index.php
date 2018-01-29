<?php
get_header('home'); ?>
<div id="banner" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php 
			    echo do_shortcode("[metaslider id=4]"); 
			?>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<section id="descricao">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
					<p class="alexa">Autoridade quando</p>
					<h2>o assunto é hamburguer</h2>
					<p>Na cozinha do Burger Mash, só entram ingredientes de qualidade, frescos e preparados diariamente com muito cuidado.</p>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-3 fadeInLeft wow">
					<a href="<?php echo esc_url( home_url( '/cardapio' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/hamburguer.jpg"; ?>"/></a>
					<div class="desc-container">
						<h3>nome do hamburguer</h3>
						<p>
							Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
						</p>
					</div>
				</div>
				<div class="col-md-3 fadeInUp wow">
					<a href="<?php echo esc_url( home_url( '/cardapio' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/hamburguer.jpg"; ?>"/></a>
					<div class="desc-container">
						<h3>nome do hamburguer</h3>
						<p>
							Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
						</p>
					</div>
				</div>
				<div class="col-md-3 fadeInUp wow">
					<a href="<?php echo esc_url( home_url( '/cardapio' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/hamburguer.jpg"; ?>"/></a>
					<div class="desc-container">
						<h3>nome do hamburguer</h3>
						<p>
							Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
						</p>
					</div>
				</div>
				<div class="col-md-3 fadeInRight wow">
					<a href="<?php echo esc_url( home_url( '/cardapio' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/hamburguer.jpg"; ?>"/></a>
					<div class="desc-container">
						<h3>nome do hamburguer</h3>
						<p>
							Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center wow fadeInUp">
					<a class="btn-semfundo btn-rosa" href="<?php echo esc_url( home_url( 'cardapio' ) ); ?>">NOSSO CARDÁPIO</a>
				</div>
			</div><br><br>
		</div>
	</section>
	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<p class="alexb fadeInUp wow">Sobre a</p>
					<h1 class="fadeInUp wow">Burguer Mash</h1>
					<p class="fadeInUp wow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit in volupt
Excepteur sint occaecat cupidatat non proident, sunt in</p><br><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">CONHEÇA MAIS</a>
				</div>
			</div>
		</div>
	</section>
	<section id="compartilhe">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="alexa wow fadeInUp">Compartilhe seus melhores momentos com a gente</p>
					<h2 class="insta wow fadeInUp">#BurguerMash</h2>
					<p class="wow fadeInUp">Aproveite e siga a Burger Mash no <a href="#"><strong>Instagram</strong></a></p><br><br>
					<img class="e-cinza img-responsive wow fadeIn" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/insta-hamburguer.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</section>
	<section id="maps">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.4304227771863!2d-46.565915184449345!3d-23.55297996716933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e85450c2d65%3A0xc996a47debd21670!2sR.+Em%C3%ADlia+Marengo%2C+357+-+Tatuap%C3%A9%2C+S%C3%A3o+Paulo+-+SP%2C+03336-000!5e0!3m2!1spt-BR!2sbr!4v1508431144926" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
	</section>
</div>

<?php get_footer(); ?>
