<?php
get_header('home'); ?>

<div id="content">
	<section id="descricao">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2 class="alexa">Conheça nossos serviços</h2>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-4 fadeInLeft wow">
					<div class="box">
						<div class="img"></div>
						<div class="desc-container">
							<h3>Massagem Clássica Relaxante</h3>
							<hr>
							<p>
								Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
							</p>
							<a href="">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow">
					<div class="box">
						<div class="img"></div>
						<div class="desc-container">
							<h3>Massagem Clássica Relaxante</h3>
							<hr>
							<p>
								Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
							</p>
							<a href="">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInRight wow">
					<div class="box">
						<div class="img"></div>
						<div class="desc-container">
							<h3>Massagem Clássica Relaxante</h3>
							<hr>
							<p>
								Descrevendo todos os ingredientes desse hamburguer em até 3 linhas no máximo. 
							</p>
							<a href="">saiba mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<p class="alexb fadeInUp wow">Conheça a</p>
					<h1 class="fadeInUp wow">Unique Massagem</h1>
					<p class="fadeInUp wow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit in volupt
Excepteur sint occaecat cupidatat non proident, sunt in</p><br><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">saiba mais</a>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div>

<?php get_footer(); ?>
