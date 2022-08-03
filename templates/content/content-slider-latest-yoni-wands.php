<?php
/**
 * The template part for displaying a slide
 */

global $tempus_image_url, $tempus_slide_title, $tempus_slide_url, $tempus_slide_subtitle, $tempus_ratio;
$tempus_image_url = '';
$posts_per_page = ( get_post_meta($post->ID, 'tempus_slider_count', true) ) ?: 4;
$filters = is_page() ? get_post_meta($post->ID, 'tempus_portfolio_filters', true) : get_post_meta($post->ID, 'tempus_recent_filters', true);
$themeworm_slug = ( get_option('themeworm_slug') ) ?: 'portfolio-item';

if ( empty($filters) ) {

	$slider_query_args = array(
		'posts_per_page'   => -1,
		'post_type'		   => 'katalog',
		'orderby'		   =>'rand',
		'tax_query'        => array(
			array(
				'taxonomy' => 'product',
				'field'    => 'slug',
				'terms'    => array('yoni-wands'),
				'opertor'  => 'IN'
			)),
	);

} else {

	$slider_query_args = array(
		'posts_per_page'   => -1,
		'post_type'		   => 'katalog',
		'orderby'		   =>'rand',
		'tax_query'        => array(
			array(
				'taxonomy' => 'product',
				'field'    => 'slug',
				'terms'    => array('yoni-wands'),
				'opertor'  => 'IN'
			)),
	);

}

$slider_query = new WP_Query ( $slider_query_args );

if ( $slider_query->have_posts() ) { while ($slider_query->have_posts()) : $slider_query->the_post(); ?>

	<?php if (has_post_thumbnail() && !post_password_required()) {
		$portfolio_main = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$tempus_image_url = $portfolio_main[0];
		$tempus_ratio = ($portfolio_main[2] > 0) ? $portfolio_main[1]/$portfolio_main[2] : '';
		$tempus_slide_title = get_the_title();
		$tempus_slide_url = get_the_permalink();
		$tempus_slide_subtitle = get_post_meta(get_the_ID(), 'tempus_portfolio_subtitle', true); ?>

		<?php get_template_part('/templates/content/content', 'slide-fullscreen-wear'); ?>

	<?php } ?>

<?php endwhile; }
wp_reset_postdata(); ?>
