<?php 

function load_scripts(){
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0.0', true);
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array('jquery'), '4.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');