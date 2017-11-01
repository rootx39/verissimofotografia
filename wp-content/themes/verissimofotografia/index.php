<?php get_header(); ?>
	<div class="container corbranca">
			<img class="img-responsive img-padding col-md-12" src="<?php header_image(); ?>" heigth="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Cabeçalho">
			<main >
				<section class="text-center"><p>Newborn - Casal - Casamento - Infantil - Feminina - Família - Eventos</p></section>
				<div class="row mid-bot">
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
