<?php
/**
 * Custom wear content
 */


$masonry = new tempus_GetGlobal();

$posts_per_page = ( function_exists('ot_get_option') ) ? ot_get_option('portfolio_showpost','10') : get_option( 'posts_per_page' );

$container_fullwidth = 'tempus_portfolio_fullwidth' == "on" ? ' container_fullwidth ' : '';
$container_fullwidth .= ($masonry->masonry) ? ' masonry-style' : '';

$paged = 1;
$exclude = '';

$portfolio_sorting = ( function_exists('ot_get_option') && ot_get_option('portfolio_sorting')  ) ? ot_get_option('portfolio_sorting') : 'date';
$portfolio_order = (function_exists('ot_get_option') && ot_get_option('portfolio_sorting') == 'menu_order') ? 'ASC' : 'DESC';

$themeworm_slug = ( get_option('themeworm_slug') ) ?: 'portfolio-item';



$term_sr = get_queried_object('81');
$termchildren = get_terms( array(
	'taxonomy'    => 'session_type',	
	'parent'      => $term_sr->term_id, 
	'depth'       => 1,
	'hide_empty'  => false
  ));




$image_size = 'tempus_masonry_off' ? "tempus_portfolio-main" : "tempus_portfolio-main"; ?>

<div  class="spinner-custom" >
<div  id="myloader"></div>
</div>

<div class="container portfolio_container boxed-style <?php echo esc_html($container_fullwidth); ?>" hidden>

	<div id="portfolio-wrapper">

		<?php 

foreach ( $termchildren as $child ) {
			
$columns = new tempus_GetGlobal();
$rand = rand (0, 400);

$ratio = $image_url = $video_data_caption = '';

$image_size = ($columns->masonry) ? "tempus_blog-main" /*"full"*/ : "tempus_portfolio-main";

$columns_style = ($columns->masonry) ? $columns->columns . ' masonry-item' : $columns->columns;

$columns_style .= ( $columns->enable_mixed && get_post_meta($post->ID, 'tempus_preview_size', TRUE)) ? ' ' . get_post_meta($post->ID, 'tempus_preview_size', TRUE) . ' ' : '';

$video_ratio = (function_exists('ot_get_option') && ot_get_option('video_ratio')) ? ot_get_option('video_ratio') : '';

$thumbnail_url = !empty(get_term_link( $child ));


$tempus_customurl = 'tempus_customurl'; ?>

<div class="portfolio_sizer"></div>
<div <?php post_class(esc_html($columns_style).' portfolio-item-slug wow fadeIn '); ?> id="post-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" data-wow-delay="<?php echo esc_attr($rand);?>ms">

	<div class="picture">
		<a href="<?php echo esc_url(get_term_link( $child )); ?>" class="portfolio-link">
		<div class="thumb" data-ratio="<?php echo esc_html($ratio) ?>" style="background-image:url('<?php
	
var_dump(get_term_link($child));
			$image = get_field('picture', 'session_type_' . $child->term_id );
		
			if( !empty($child) && !empty($image)) {
			   echo '<a>';
				echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] .'">';       
				echo  '</a>';
	
				
			}
		
		?>'";></div>
		</a>
	</div>

	<div class="item-description-alt">
		<h6><?php echo $term_name = get_term( $child )->name;; ?></h6>
	</div>

</div><?php

} ?>
	</div>

</div>

</div>

