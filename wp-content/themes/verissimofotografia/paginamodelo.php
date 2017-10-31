<?php 
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>
<div class="container conteudo-wrapper corbranca">
	<main>
		<div class="conteudo">
			<?php 
			// Se tiver algum post
				if(have_posts()):
				// Enquanto tiver post segue a chamada.
					while (have_posts()) : the_post();
			?>
			<article>
				<p><?php the_content(); ?></p>
			</article>
			<?php 
			endwhile;
			else:
			?>
				<p>Não tem nada para mostrar</p>
			<?php 
			endif;
			?>
		</div>
	</main>
</div>
<?php get_footer(); ?>