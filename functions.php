<?php 


function sblog_setup() {

   load_theme_textdomain('startup', get_template_directory() . '/languages');

     add_theme_support('title-tag');
     add_theme_support('custom-logo');
     add_theme_support('menus');
     add_theme_support('post-thumbnails');


   add_theme_support('post-thumbnails', array('post','blog'));

    register_nav_menus(array(
       'primary-menu' => "dekstop primary menu left sidebar",
        'footer' => "footer menu items"

    ));
   
}
add_action('after_setup_theme', 'sblog_setup');


function sblog_style_css() { 
   
    // Load All CSS
    $version =wp_get_theme()->get('Version');
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), $version, 'all' );
    wp_enqueue_style( 'font-awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . "/style.css", array(), '1.0.0', 'all' );
    
}
add_action( 'wp_enqueue_scripts', 'sblog_style_css' );

function sblog_style_script() { 
    // Load All JS
    wp_enqueue_script( 'sblog-bundle', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'sblog_style_script' );
