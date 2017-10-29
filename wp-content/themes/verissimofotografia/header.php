<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Verissimo Fotografia - Newborn - Casal - Casamento - Infantil - Feminina - Família - Eventos</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="barra-topo container">
		<div class="row">
			<div class="logo col-md-3">Verissimo Fotografia</div>
			<div class="menu-principal col-md-9 text-right"><?php wp_nav_menu( array('theme_location' => 'meu_menu_principal')) ?></div>			
		</div>
		<div class="row">
			<div class="diaehora text-right col-md-12">
				<?php the_time('j \d\e F \d\e Y') ?>
			</div>
		</div>
	</div>
</header>