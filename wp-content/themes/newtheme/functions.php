<?php

function load_stylesheets()
{

  
    wp_register_style('boostrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    //implementing bootstrap. 

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    //implementing our own CSS

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function includeJQuery()
{
    wp_deregister_script('jquery'); //just to keep jquery clean first, remove all jquery before implementing

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'includeJQuery');


function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1,true );
    wp_enqueue_script('customjs');

    //dont forget its get_template_directory_ur(i)

    //https://developer.wordpress.org/reference/functions/wp_register_script/

    //javacript implementation
}
add_action('wp_enqueue_scripts', 'loadjs');

