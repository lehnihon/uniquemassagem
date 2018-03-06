<?php
get_header(); ?>

<div id="content">
	<section id="descricao">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h1 class="alexa">Massagens</h1>
				</div>
			</div><br><br>

			<div class="row">
			<?php 
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

			$i = 1;
			$args = array(

				'posts_per_page' => 9,
			    'orderby' => 'post_date',
			    'order' => 'DESC',
			    'paged' => $paged);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
				?>
					<div class="col-md-4 fadeInUp wow">
						<div class="box">
							<?php the_post_thumbnail('', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="desc-container">
								<h3><?php the_title(); ?></h3>
								<hr>
								<p>
									<?php echo get_the_twitter_excerpt(); ?>
								</p>
								<a href="<?php the_permalink(); ?>">saiba mais</a>
							</div>
						</div>
					</div>
					<?php
					if($i == 3):
					?>
						</div><div class="row">
					<?php
					endif;
					$i++;
					?>
				<?php endwhile; ?>
			<div class="paginacao">
			<?php
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			) );
			?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div>

<?php get_footer(); ?>
