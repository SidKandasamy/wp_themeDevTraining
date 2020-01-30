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


function loadjs()
{

    wp_register_scripts('customjs', get_template_directory_url() . '/js/scripts.js', true);
    wp_enqueue_scripts('customjs');

    //https://developer.wordpress.org/reference/functions/wp_register_script/

    //javacript implementation
}
add_action('wp_enqueue_scripts', 'loadjs');