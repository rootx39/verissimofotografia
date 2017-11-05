<?php get_header(); ?>
<main >	
	<div class="col-md-12 img-responsivel">
		<?php wd_slider(2); ?>
	</div>
	<section class="text-center servicos txt-branco">
		<p><a href="#">Newborn</a> - <a href="#">Casal</a> - <a href="#">Casamento</a> - <a href="#">Infantil</a> - <a href="#">Feminina</a> - <a href="#">Família</a> - <a href="#">Eventos</a></p>
		<div class="row col-md-12">
			<?php 
			// Se tiver algum post
			if(have_posts()):
				// Enquanto tiver post segue a chamada.
				while (have_posts()) : the_post();

					get_template_part('content', get_post_format());

				endwhile;
			else:
				?>
				<div class="centro col-md-12">
					<p style="color: red;">Erro ou sem posts para mostrar!!</p>
				</div>
				<?php 
			endif;
			?>
		</div>
	</section>
	<div class="row mid-bot fundo-preto">
		
	</div>
</main>
<?php get_footer(); ?>
