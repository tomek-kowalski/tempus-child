<?php
if (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('bali'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-bali.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('india'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-india.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('peru'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-peru.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('philippines'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-philippines.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('poland'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-poland.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('sicily'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-sicily.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('sri-lanka'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-lanka.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('thailand'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-thailand.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('vietnam'), 'slides'))
)
include( get_stylesheet_directory().'/taxonomy-slides/taxonomy-slides-vietnam.php' );

