<?php

function estilo_tema(){
	wp_enqueue_style('boostrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','estilo_tema');


function tema_js(){
	wp_enqueue_style('boostrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_theme_support('menus');

function registro_menus_temas(){
	register_nav_menus(
		array('header-menu' => __('Header Menu'))
		);
}

add_action('init', 'registro_menus_temas');

?>
















