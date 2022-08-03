<?php
/**
 * The single katalog page template file.
 * @package WordPress
 */	



if (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('bags'), 'product'))
)
include( get_stylesheet_directory().'/taxonomy-product/taxonomy-product-bags.php' );

elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('incenses'), 'product'))
)
include( get_stylesheet_directory().'/taxonomy-product/taxonomy-product-incenses.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('scarfs'), 'product'))
)
include( get_stylesheet_directory().'/taxonomy-product/taxonomy-product-scarfs.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('smudgers'), 'product'))
)
include( get_stylesheet_directory().'/taxonomy-product/taxonomy-product-smudgers.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('yoni-eggs'), 'product'))
)
include( get_stylesheet_directory().'/taxonomy-product/taxonomy-product-yoni-eggs.php' );
elseif (get_post_type( get_the_ID() ) == 'katalog' 
&& (has_term(array('yoni-wands'), 'product'))
)
include( get_stylesheet_directory().'/taxonomy-product/taxonomy-product-yoni-wands.php' );




