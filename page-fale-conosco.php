<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="fale-conosco">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h1 class="alexa">Fale conosco</h1>
				</div>
			</div><br><br>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // End of the loop. ?>

		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div><!-- #content -->
<?php get_footer(); ?>
