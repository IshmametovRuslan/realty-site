<?php
/**
 * Created by PhpStorm.
 * User: Ruslan
 * Date: 21.10.2018
 * Time: 14:38
 */


//Функция подключения стилей родительской и дочерней темы

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
function my_theme_styles() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/css/theme.css' );

	wp_enqueue_style('child-theme-css', get_stylesheet_directory_uri() .'/style.css', array('parent-theme-css') );
}