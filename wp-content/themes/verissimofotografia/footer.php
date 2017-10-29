<footer class="container">
	<div class="row">
		<nav class="menu-rodape col-md-12 text-right">
			<?php wp_nav_menu(array('theme-location' => 'menu-rodape')); ?>
		</nav>
	</div>
	<div class="row">
		<div class="copyright col-md-12 text-center"><p>Copyright <?php the_time('Y') ?></p></div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>