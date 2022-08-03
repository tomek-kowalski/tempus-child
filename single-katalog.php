<?php
/**
 * The single katalog page template file.
 * @package WordPress
 */	


if (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('sacred-wear'), 'product'))
  // in one of the parent cats?  
)
include( get_stylesheet_directory().'/single-katalog/single-wear.php' );

elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('bags'), 'product'))
)
include( get_stylesheet_directory().'/single-katalog/single-tool.php' );

elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('incenses'), 'product'))
)
include( get_stylesheet_directory().'/single-katalog/single-incenses.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('scarfs'), 'product'))
)
include( get_stylesheet_directory().'/single-katalog/single-scarfs.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('smudgers'), 'product'))
)
include( get_stylesheet_directory().'/single-katalog/single-smudgers.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('yoni-eggs'), 'product'))
)
include( get_stylesheet_directory().'/single-katalog/single-yoni-eggs.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('yoni-wands'), 'product'))
)
include( get_stylesheet_directory().'/single-katalog/single-yoni-wands.php' );




