<?php
/**
 * The Archive template file.
 * @package WordPress
 */
get_header(); ?>

<?php

$tempus_columns = 'portfolio-three';
$tempus_allow_multi_items = true;?>


<?php get_template_part('/templates/content/content', 'ritual');  

get_footer(); ?>