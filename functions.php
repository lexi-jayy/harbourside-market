<?php

require get_template_directory() . '/inc/function-admin.php';

function add_custom_files(){
    wp_enqueue_style('my_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap.css' , array(), '4.3.1');
    wp_enqueue_style('my_custom_stylesheet', get_template_directory_uri() . '/assets/css/custom_theme_style.css' , array(), '0.1');
    wp_enqueue_script('my_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.3.1', true);
    }
    add_action('wp_enqueue_scripts', 'add_custom_files');


    function add_admin_styles(){
        wp_enqueue_style('my_admin_styles', get_template_directory_uri() . '/assets/css/admin.css' , array(), '0.1');

        $screen = get_current_screen();
        if($screen->post_type === 'post' && ($screen->action === 'add' || $_GET['action'] === 'edit') ){
            wp_enqueue_script('change_post_formats_script', get_template_directory_uri() . '/assets/js/change_post_formats.js', array('jquery'), '0.1', true);
            $format = get_post_format($_GET['post']);
            wp_localize_script('change_post_formats_script', 'formatObject', array(
                'format' => $format
            ));
        }
    }
    add_action('admin_enqueue_scripts', 'add_admin_styles');



function register_my_menu() {
    register_nav_menu('header_menu','The menu which appears at the top of the page');
    register_nav_menu('footer_menu','The menu which appears at the bottom of the page');
}
add_action( 'init', 'register_my_menu' );

add_post_type_support( 'page', 'excerpt' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';


//Add all of the defauly block styles needed for gutenbergs editor
//grouping all theme support so they stay together
add_theme_support( 'wp-block-styles' );
add_theme_support('post-thumbnails');
add_theme_support( 'custom-background');
add_theme_support( 'post-formats', array( 'image', 'video', 'audio' ) );



require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom_fields.php';