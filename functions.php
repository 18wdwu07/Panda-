<?php


//wp function for local path
require get_template_directory() . '/inc/function-admin.php';

function add_custom_files(){
    wp_enqueue_style('my_custom_stylesheet', get_template_directory_uri() . '/assets/css/custom_theme_style.css' );
};
add_action('wp_enqueue_scripts', 'add_custom_files');
//not closing php
