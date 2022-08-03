<?php
if (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('coaching-mentoring'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-coaching-mentoring.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('embodied-photoshoot'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-embodied-photoshoot.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('tantric-shakti-temple'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-tantric-shakti-temple.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('sacred-plant-ceremony'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-sacred-plant-ceremony.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('priestess-initiation-temple'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-priestess-initiation-temple.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('womb-pulsing-temple'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-womb-pulsing-temple.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('shamanic-wisdom-temple'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-shamanic-wisdom-temple.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('soul-vision-mission'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-soul-vision-mission.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (has_term(array('sacred-temple-of-holy-womb'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-sacred-temple-of-holy-womb.php' );

elseif (get_post_type( get_the_ID() ) == 'sacred-sessions' 
&& (!has_term(array('sacred-temple-of-holy-womb','soul-vision-mission','shamanic-wisdom-temple','womb-pulsing-temple', 'priestess-initiation-temple','sacred-plant-ceremony','tantric-shakti-temple','embodied-photoshoot','coaching-mentoring','sacred-sessions-rituals'), 'session_type'))
)
include( get_stylesheet_directory().'/taxonomy-session_type/taxonomy-sacred-temple.php' );

