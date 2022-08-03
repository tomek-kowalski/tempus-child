<?php
if (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('bali'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-retreats.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('india'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-india.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('peru'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-peru.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('philippines'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-philippines.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('poland'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-poland.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('sicily'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-sicily.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('sri-lanka'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-sri-lanka.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('thailand'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-thailand.php' );

elseif (get_post_type( get_the_ID() ) == 'home' 
&& (has_term(array('vietnam'), 'slides'))
)
include( get_stylesheet_directory().'/header/header-vietnam.php' );



