<?php

function my_theme_enqueue_styles() {
    wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/vendor/jquery/jquery.min.js');
    wp_enqueue_script('clean-blog', get_stylesheet_directory_uri().'/js/clean-blog.min.js');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/bootstrap/js/bootstrap.bundle.min.js');

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('animate', get_stylesheet_directory_uri().'/css/animate.min.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('theme', get_stylesheet_directory_uri() .'/css/clean-blog.min.css');
    
    wp_enqueue_style('lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('openSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 99 );