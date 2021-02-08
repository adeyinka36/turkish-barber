<?php

function barber_styles(){
    wp_enqueue_script('main-js', get_theme_file_uri('/main.js'), NULL, '1.0', true);
    wp_enqueue_style("custom-goggle-fonts","//fonts.googleapis.com/css2?family=Anton&family=Pacifico&display=swap");
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style("barber_styles",get_stylesheet_uri());
}

add_action("wp_enqueue_scripts","barber_styles");


