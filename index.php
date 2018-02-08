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
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="alexc wow fadeInUp">Fale com a gente</h2>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 offset-md-2 text-left">
					<h3>Endereço</h3>
					<p>Rua Luís do Paço, 60<br>
					Carrão - São Paulo - SP<br>
					CEP 03071070 - Brasil<br>
					<a href="#">como chegar?</a>
					</p>
					<h3>Contatos</h3>
					<p class="roxo">
					<span class="fone">11 1234-5678</span><br>
					contato@uniquemassagem.com.br
					</p>
				</div>
				<div class="col-md-4 text-left">
					<h3>Horários de atendimento</h3>
					<table width="100%">
						<thead>
							<tr>
								<th>Dia</th>
								<th>Das</th>
								<th>Até</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Segunda</td>
								<td>09h</td>
								<td>18h</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
