<?php 

//require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts(){
    wp_enqueue_style( 'barbeshop-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    //wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    //wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts'); 



function wpdevs_config(){

    $textdomaine = 'wp-devs';
    load_theme_textdomain($textdomaine, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wp_devs_main_menu' => esc_html__('Main Menu', 'wp-devs'),
            'wp_devs_footer_menu' => esc_html__('Footer Menu', 'wp-devs')
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args);

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array( 
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));

    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));

    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'wpdevs_config', 0);

add_action('widgets_init', 'wpdevs_sidebars');

function wpdevs_sidebars(){
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'wp-devs'),
            'id' => 'sidebar',
            'description' => esc_html__('This is the sidebar.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );
/*
    register_sidebar(
        array(
            'name' => esc_html__('Page Sidebar', 'wp-devs'),
            'id' => 'sidebar-page',
            'description' => esc_html__('This is page sidebar.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Service 1', 'wp-devs'),
            'id' => 'services-1',
            'description' => esc_html__('First service area.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );   

    register_sidebar(
        array(
            'name' => esc_html__('Service 2', 'wp-devs'),
            'id' => 'services-2',
            'description' => esc_html__('Second service area.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Service 3', 'wp-devs'),
            'id' => 'services-3',
            'description' => esc_html__('Third service area.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );
}

if(! function_exists('wp_body_open')){
    function wp_body_open(){
        do_action( 'wp_body_open');
    }
}
*/
}