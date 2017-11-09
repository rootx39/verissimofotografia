<footer class="barra-full-width">
	<div class="barra-horizontal container"></div>
	<div class="container">
		<article>
			<div class="container">
				<div class="row">
					<nav class="menu-rodape text-left">
						<?php wp_nav_menu(array('theme-location' => 'menu-rodape')); ?>
					</nav>
				</div>
				<div class="row">
					<div class="copyright col-md-12 text-center"><p>Verissimo Fotografia - Copyright <?php the_time('Y') ?> - By <a href="https://www.rootx39.com">Root X39</a></p></div>
				</div>
			</div>
		</article>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>