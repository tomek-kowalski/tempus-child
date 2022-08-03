<?php
/**
 * Title template part
 */

if (!function_exists('is_shop') || (function_exists('is_shop') && !is_shop() && !is_product_category()) ) {
  $themeworm_slug = ( get_option('themeworm_slug') ) ?: 'portfolio-item';
  $queried_object = get_term_by('term_id','77','slides');
if ( is_search() || is_404() || is_archive() || get_post_type( get_the_ID() || $queried_object ) == "post" && get_post_meta($post->ID, 'tempus_display_title', true) != "off" || get_post_type( get_the_ID() ) == "page" && get_post_meta($post->ID, 'tempus_display_title', true) != "off" || get_post_type( get_the_ID() ) == $themeworm_slug && get_post_meta($post->ID, 'tempus_portfolio_title', true) != "off" ) {?>



    <div class="container title_container archive-container">
      <div id="page-title" class="wow fadeIn" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
      

      <h1><?php $queried_object = get_term_by('term_id','77','slides');
            print $queried_object->name; ?></h1> 

      </div>
    </div>
  <?php 

}
}
