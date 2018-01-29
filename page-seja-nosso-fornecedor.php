<?php
get_header(); ?>
<div id="content">
	<section id="paginas" class="sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1 class="alexc">Seja nosso Fornecedor</h1>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-6 text-left">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md-5 col-md-offset-1 text-left">
					<h3>E-mail</h3>
					<p>contato@burgermash.com.br</p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
