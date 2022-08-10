<?php
/**
 * Custom home content
 */


$masonry = new tempus_GetGlobal();

$posts_per_page = ( function_exists('ot_get_option') ) ? ot_get_option('portfolio_showpost','10') : get_option( 'posts_per_page' );

$container_fullwidth = ( get_post_meta($post->ID, 'tempus_portfolio_fullwidth', true) == "on" ) ? ' container_fullwidth ' : '';
$container_fullwidth .= ($masonry->masonry) ? ' masonry-style' : '';

$paged = 1;
$exclude = '';

if ( get_query_var( 'paged' ) ) $paged = get_query_var( 'paged' );
if ( get_query_var( 'page' ) ) $paged = get_query_var( 'page' );

$portfolio_sorting = ( function_exists('ot_get_option') && ot_get_option('portfolio_sorting')  ) ? ot_get_option('portfolio_sorting') : 'date';
$portfolio_order = (function_exists('ot_get_option') && ot_get_option('portfolio_sorting') == 'menu_order') ? 'ASC' : 'DESC';

$filters = is_page() ? get_post_meta($post->ID, 'tempus_portfolio_filters', true) : get_post_meta($post->ID, 'tempus_recent_filters', true);
$themeworm_slug = ( get_option('themeworm_slug') ) ?: 'portfolio-item';

if (is_single()) { $exclude = $post->ID; $nopaging = true; }

if ( empty($filters) ) {

} else {


	$tax = array('product','slides','session_type');
		
	$tax_terms = get_terms( $tax, $args = array(
	  'hide_empty' 		=> false, // do not hide empty terms
	  'include'	   		=> '43,81,83,44,50,82',	
	  'hierarchical' 	=> true,
	  'orderby'			=> 'include',
	  'order' 			=> 'ASC',
	));


}

$image_size = (get_post_meta($post->ID, 'tempus_masonry_off', true) != "off" ) ? "tempus_portfolio-main" : "tempus_portfolio-main"; ?>

<div class="container portfolio_container boxed-style <?php echo esc_html($container_fullwidth); ?>">
	<div id="ajax-loader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<div id="portfolio-wrapper">

		<?php 

			foreach ($tax_terms as $term) {
			
$columns = new tempus_GetGlobal();
$rand = rand (0, 400);

$ratio = $image_url = $video_data_caption = '';

$image_size = ($columns->masonry) ? "tempus_blog-main" /*"full"*/ : "tempus_portfolio-main";

$columns_style = ($columns->masonry) ? $columns->columns . ' masonry-item' : $columns->columns;

$columns_style .= ( $columns->enable_mixed && get_post_meta($post->ID, 'tempus_preview_size', TRUE)) ? ' ' . get_post_meta($post->ID, 'tempus_preview_size', TRUE) . ' ' : '';

$video_ratio = (function_exists('ot_get_option') && ot_get_option('video_ratio')) ? ot_get_option('video_ratio') : '';
$video_ratio = (get_post_meta($post->ID, 'tempus_current_video_ratio', true) && "none" != get_post_meta($post->ID, 'tempus_current_video_ratio', true)) ? get_post_meta($post->ID, 'tempus_current_video_ratio', true) : $video_ratio;

$thumbnail_url = get_term_link( $term );


$tempus_customurl = get_post_meta($post->ID, 'tempus_customurl', TRUE); ?>

<div class="portfolio_sizer"></div>
<div <?php post_class(esc_html($columns_style).' portfolio-item-slug wow fadeIn '); ?> id="post-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" data-wow-delay="<?php echo esc_attr($rand);?>ms">

	<div class="picture">
		<a href="<?php echo esc_url($thumbnail_url ); ?>" class="portfolio-link <?php if ( get_post_meta($post->ID, 'tempus_video_link', TRUE) && get_post_meta($post->ID, 'tempus_show_aslightbox', true) == 'on' ) { echo 'video-popup'; } ?>" <?php if ( get_post_meta($post->ID, 'tempus_show_aslightbox', true) == 'on' && !get_post_meta($post->ID, 'tempus_video_link', TRUE) ) { echo 'data-ratio="' . $video_ratio . '" data-fancybox="group"'; } if (get_post_meta($post->ID, 'tempus_portfolio_subtitle', TRUE) || get_post_meta($post->ID, 'tempus_video_link', TRUE)) { echo $video_data_caption; } if (get_post_meta($post->ID, 'tempus_video_link', TRUE)) { echo ' data-ratio="' . $video_ratio . '" data-fancybox="group"'; } ?> >
		<div class="thumb" data-ratio="<?php echo esc_html($ratio) ?>" style="background-image:url('<?php
	

			$image = get_field('picture', 'slides_' . $term->term_id );
		
			if( $term && !empty($image)) {
			   echo '<a href="' . esc_url( !empty($term_link )) . '">';
				echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] .'">';       
				echo  '</a>';
	
				
			}
		
		?>');"></div>
		</a>
	</div>

	<div class="item-description-alt">
		<h6 id="h6h"><?php echo $term->name?></h6>
	</div>

	<div class="item-filter">
		<?php	$terms = get_the_terms( $post->ID, 'filters');
		if ( $terms ) {
			foreach ( $terms as $term ) {
				echo esc_html( $term->name ) . ' ';
			}
		} ?>
	</div>

</div><?php

} ?>
	</div>

</div>

</div>
