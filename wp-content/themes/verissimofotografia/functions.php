<?php 
// Função para scripts e estilos
function load_scripts(){
	// Bootstrap
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(),'4.0.0', 'all');
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), null, true);

	// Personalizados
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all', true);
	wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

//Função para menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu-rodape' => 'Menu Rodapé'
	)
);
// Suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('image'));
add_theme_support( 'custom-logo', array(
	'height'      => 30,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );