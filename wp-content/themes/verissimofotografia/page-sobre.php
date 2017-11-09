<?php get_header(); ?>
<article>
	<div class="container">
		<div class="row">
			<div class="col-md-5 page-sobre">
				<?php the_content(); ?>
			</div>
			<div class="col-md-7 margin-topo">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="barra-horizontal">
			<div class="row">
				<div class="container conteudo-missao text-center">
					<section>
						<span>Nossa missão não é somente clicar, é eternizar os momentos únicos na vida de cada um, com muito profissionalismo e carinho.</span>
					</section>
				</div>

			</div>
			<div class="row ">
				<div class="col-md-12">
					<iframe width="100%" height="200" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAvPZQ0flpRT_NInLJKtp3V7GbIQ0UjUB8&amp;q=Humberto+calixto+Fruet%2C+226&amp;zoom=13"></iframe>
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>