<?php 

/***
* Загружаемые стили и скрипты!
***/
function load_style_script(){
	wp_enqueue_script('jquery.min', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
};
	

/***
* Загружаем стили и скрипты!
***/
add_action('wp_enqueue_scripts', 'load_style_script');
?>