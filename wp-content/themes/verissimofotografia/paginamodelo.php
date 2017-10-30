<?php 
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>
<div class="conteudo-wrapper">
	<img class="img-responsive" src="<?php header_image(); ?>" heigth="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Cabeçalho">
	<main>
		<div class="conteudo container">
			<?php 
			// Se tiver algum post
				if(have_posts()):
				// Enquanto tiver post segue a chamada.
					while (have_posts()) : the_post();
			?>
			<p><?php the_content(); ?></p>
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