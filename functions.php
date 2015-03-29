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

// add_filter('excerpt_length', 'my_excerpt_length');
// function my_excerpt_length($len) { return 300; }

/*Поддержка миниатюр*/
add_theme_support( 'post-thumbnails' );

/*подключение меню*/
register_nav_menu('menu', 'Меню');

/*сайдбар*/
register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => 'sidebar',
	'description' => 'Здесь размещайте виджеты сайдбара'
));
?>
