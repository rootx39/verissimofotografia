<?php get_header(); ?>
	<div class="container">
			<img class="img-responsive col-md-12" src="<?php header_image(); ?>" heigth="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Cabeçalho">
			<main >				
				<div class="container">
				    <div class="row">
				        <div class="col-md-12">
								<?php 
								// Se tiver algum post
								if(have_posts()):
								// Enquanto tiver post segue a chamada.
								while (have_posts()) : the_post();
								
								get_template_part('content', get_post_format());

								endwhile;
								else:
								?>
									<p>Não tem nada para mostrar</p>
								<?php 
								endif;
								?>
						</div>
				    </div>
				</div>
				<section class="text-center servicos txt-branco"><p><a href="#">Newborn</a> - <a href="#">Casal</a> - <a href="#">Casamento</a> - <a href="#">Infantil</a> - <a href="#">Feminina</a> - <a href="#">Família</a> - <a href="#">Eventos</a></p></section>
				<div class="row mid-bot fundo-preto">
					<div class="col-md-7">
						<form action="script/enviar.php" method="post">
							<h2 class="text-left txt-branco">Contate-nos</h2>
							<div class="form-group has-success has-feedback">
								<input class="form-control" name="name" type="text" placeholder="Nome" />
							</div>
							<div class="form-group has-error has-feedback">
								<input class="form-control" name="email" type="email" placeholder="E-mail" />
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="14" placeholder="Mensagem"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Enviar</button>
							</div>
						</form>
					</div>
					<div class="col-md-5">
						<h2 class="text-left txt-branco">Localização</h2>
					    <iframe width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDIuooHn3SefMXcI-t7f0_9LUNxVF1WOdQ&amp;q=Travessa+Para%C3%ADba&amp;zoom=163"></iframe>
					</div>
				</div>
			</main>
	</div>
<?php get_footer(); ?>
