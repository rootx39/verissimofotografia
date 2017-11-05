<footer class="barra-full-width">

	<div class="row">
		<div class="col-md-5">
			<div class="form-contato">
				<?php echo do_shortcode( '[contact-form-7 id="569" title="Contato"]' ); ?>
			</div>
		</div>
		<div class="col-md-7">
			<h2 class="text-left txt-branco">Localização</h2>
			<iframe width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAvPZQ0flpRT_NInLJKtp3V7GbIQ0UjUB8&amp;q=Humberto+calixto+Fruet%2C+226&amp;zoom=15"></iframe>
		</div>
		
	</div>
	<div class="row">
		<nav class="menu-rodape col-md-12 text-right">
			<?php wp_nav_menu(array('theme-location' => 'menu-rodape')); ?>
		</nav>
	</div>
	<div class="row">
		<div class="copyright col-md-12 text-center"><p>Verissimo Fotografia - Copyright <?php the_time('Y') ?> - By <a href="https://www.designtoo.com.br">Designtoo</a></p></div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>