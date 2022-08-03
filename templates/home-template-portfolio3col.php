<?php
/**
 * Template Name: Home Kasiaforman
 *
 * Iya:) Custom portfolio template.
*/

get_header(); ?>

<?php
$tempus_about_me = (get_post_meta($post->ID, 'tempus_about_me', true) == 'on') ? true : false;
$tempus_columns = 'portfolio-three';
$tempus_allow_multi_items = true;
$filters_array = (get_post_meta($post->ID, 'tempus_portfolio_filters', true)) ? get_post_meta($post->ID, 'tempus_portfolio_filters', true) : ''; ?>

<?php get_template_part('/templates/content/content', 'home');



get_footer(); ?>
