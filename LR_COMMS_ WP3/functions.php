<?php

function TO_scripts() 
{
    // stylesheets
    wp_enqueue_style('Fonts','https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700');
    wp_enqueue_style('Fonts2','https://use.typekit.net/yss3snt.css');
    wp_enqueue_style( 'TO-styles', get_stylesheet_uri() );

    // scripts  
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.js', array(), false, true);
    wp_enqueue_script( 'js' , get_stylesheet_directory_uri().'/js.js', array('jquery'),false,true);

}
add_action( 'wp_enqueue_scripts', 'TO_scripts' );



