<?php
function load_news_style(){
    wp_enqueue_style( "main_style", get_stylesheet_uri() );   
}
add_action( 'wp_enqueue_scripts','load_news_style' );

function register_news_menu(){
register_nav_menu(
    "primary_menu" ,__("Primary Menu", "news")

);
}
function register_news_sidear(){
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'news' ),
        'id'            => 'sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',

    ) );
}
add_action('after_setup_theme','register_news_menu');
add_action('after_setup_theme','register_news_sidear');
?>