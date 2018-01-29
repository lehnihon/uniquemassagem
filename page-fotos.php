<?php
get_header(); ?>
<div id="content">
	<section id="paginas" class="sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1 class="alexc">Fotos</h1>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-12">
					<?php 
					$args = array('posts_per_page' => 1,'post_type' => 'fotos');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">FALE CONOSCO</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
