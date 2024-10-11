<?php 
function load_scripts(){
    wp_enqueue_style('template' , get_template_directory_uri() . '/css/template.css' , array() , '1.2' , 'all');
    wp_enqueue_script('bootstrap-js' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' , array('jquery') , '5.3.3' , true);
    wp_enqueue_style('bootstrap-css' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' , array() , '5.3.3' , 'all');
    wp_enqueue_style('fontawsom-css' , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' , array() , '6.6.0' , 'all');
}

add_action('wp_enqueue_scripts' , 'load_scripts');

function bs_config(){
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = [
        'height' => 225,
        'width' => 1920
    ];

    add_theme_support('custom-header' , $args);
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme' , 'bs_config', 0);

