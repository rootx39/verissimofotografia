<?php 
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>
	<main>
			<?php 
			// Se tiver algum post
			if(have_posts()):
				// Enquanto tiver post segue a chamada.
				while (have_posts()) : the_post();
					?>
					<article>
						<?php the_content(); ?>
					</article>
					<?php 
				endwhile;
			else:
				?>
				<p>Não tem nada para mostrar</p>
				<?php 
			endif;
			?>
	</main>
<?php get_footer(); ?>