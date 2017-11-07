<html lang="pt-br">
<!-- 
	Author: Fabiano Bordinoski
	E-mail: indicacaoverissimo@designtoo.com.br
	Tel/Whats: +55 (41) 9 9277-9621
	URL: https:www.designtoo.com.br
	Description: Foco de cada site é criar algo que seja limpo, chamando a atenção apenas para seu conteúdo.
-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div class="row" style="width: 100%;">
			<div class="img-responsive" align="center" style="background-color: #000; width: 100%;">
				<?php the_custom_logo(); ?>
			</div>	
		</div>
		<header>
			<div class="row">
				<div class="menu-principal">
					<?php wp_nav_menu( array('theme_location' => 'meu_menu_principal')) ?>
				</div>
			</div>
		</header>
