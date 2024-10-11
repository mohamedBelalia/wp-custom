<?php 
function load_scripts(){
    wp_enqueue_style('template' , get_template_directory_uri() . '/css/template.css' , array() , '1.2' , 'all');
    wp_enqueue_style('sliderStyle' , get_template_directory_uri() . '/css/sliderStyle.css' , array() , '1.0' , 'all');
    wp_enqueue_style('fontawsom-css' , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' , array() , '6.6.0' , 'all');
    
    
    wp_enqueue_script('tailwind-css' , 'https://cdn.tailwindcss.com' , array() , null , true);
    wp_enqueue_style('custom-styles' , get_template_directory_uri() . '/css/custom-styles.css' , array('tailwind-css') , '1.0' , 'all');
    
    wp_enqueue_style('swiper-bundle-styles' , 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' , array() , '1.1' , 'all');
}

add_action('wp_enqueue_scripts' , 'load_scripts');

function load_custom_scripts() {
    wp_enqueue_script('navbar-script', get_template_directory_uri() . '/JS/navbar.js', array(), null, true);
    wp_enqueue_script('fixedMenu-script', get_template_directory_uri() . '/JS/fixedMenu.js', array(), null, true);
    wp_enqueue_script('slider-script', get_template_directory_uri() . '/JS/slider.js', array(), null, true);
    wp_enqueue_script('horizontal-scroll', get_template_directory_uri() . '/JS/horizontalScroll.js', array(), null, true);
    wp_enqueue_script('horizontal-scroll-2', get_template_directory_uri() . '/JS/horizontalScroll-2.js', array(), null, true);
    wp_enqueue_script('tailwind-config-js', get_template_directory_uri() . '/js/tailwind-config.js', array(), '1.0', true);
    wp_enqueue_script('swiper-element-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', array(), null, true);
    wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('swiper-element-bundle'), null, true);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');


?>