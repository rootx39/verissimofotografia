<html lang="pt-br">
<!-- 
Author: Fabiano Bordinoski
E-mail: indicacaoverissimo@designtoo.com.br
Tel/Whats: +55 (41) 9 9277-9621
URL: https:www.designtoo.com.br
Description: Foco de cada site é criar algo que seja limpo, chamando a atenção apenas para seu conteúdo.
-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div class="row" style="width: 100%;">
			<div class="img-responsive img-center">
				<?php the_custom_logo(); ?>
			</div>	
		</div>
		<header>
			<div class="row">
				<nav class="menu-principal text-center">
					<?php wp_nav_menu( array('theme_location' => 'meu_menu_principal')) ?>
				</nav>
			</div>
		</header>
	</div>
