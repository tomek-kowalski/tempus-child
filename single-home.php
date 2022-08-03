<?php
if (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('bali'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-retreats.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('india'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-india.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('peru'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-peru.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('philippines'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-philippines.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('poland'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-poland.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('sicily'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-sicily.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('sri-lanka'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-sri-lanka.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('thailand'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-thailand.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('vietnam'), 'slides'))
)
include( get_stylesheet_directory().'/single-home/single-vietnam.php' );

