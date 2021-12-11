 <?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
/*     wp_enqueue_script( 'style', get_template_directory_uri() . '/script.js', array(), null, true);  
 */
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
