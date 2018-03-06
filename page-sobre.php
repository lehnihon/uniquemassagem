<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="sobre-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left wow fadeInUp">
					<p class="alexb fadeInUp wow">Conheça a</p>
					<h1 class="fadeInUp wow">Unique Massagem</h1><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit in volupt
Excepteur sint occaecat cupidatat non proident, sunt in</p><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'contato' ) ); ?>">fale conosco</a>
				</div>
				<div class="col-md-6 text-center wow fadeInUp">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagemb.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2 class="fadeInUp wow">Nosso espaço</h2><br>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div><!-- #content -->
<?php get_footer(); ?>
