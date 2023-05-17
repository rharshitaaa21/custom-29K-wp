<!-- contains functioning logics -->
<?php


//added font-awesome icons


function customtheme_theme_setup(){
    add_theme_support('custom-logo');
    
    register_nav_menus( array(
        'primary' => __('Primary Menu', '29Ktheme')
    ) );

};
add_action('after_setup_theme', 'customtheme_theme_setup' );
function customtheme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'customtheme_scripts');

function enqueue_fa_script(){
    wp_enqueue_script('fascript','https://kit.fontawesome.com/1f552d95de.js');
}
add_action('wp_enqueue_script','enqueue_fa_script' );


// Add support for custom logo
add_theme_support( 'custom-logo' );

// Set default parameters for custom logo
$defaults = array(
    'height'      => 70,
    'width'       => 70,
    'flex-height' => true,
    'flex-width'  => true,
);
add_theme_support( 'custom-logo', $defaults );

register_sidebar( array(
    'name'          => __( 'Footer Widget 1', '29Ktheme' ),
    'id'            => 'footer-1',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Widget 2', '29Ktheme' ),
    'id'            => 'footer-2',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Widget 3', '29Ktheme' ),
    'id'            => 'footer-3',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) ); 




?>