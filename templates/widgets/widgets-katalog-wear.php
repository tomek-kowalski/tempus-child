<?php
/**
 * Custom wear content
 */
$slider_images = $image_url = $exclude = $slider_attrs = '';
	
$store = array(
	'posts_per_page'	=> -1,
	'post_type'		=> 'katalog',
	'tax_query' => array(
        array(
            'taxonomy' => 'product',
            'field'    => 'slug',
            'terms'    => array('sacred-wear'),
			'opertor'  => 'IN'
		)),
		'post__not_in' => array (get_the_ID()),
); ?>

<div class="block-center">
<div class="container boxed-slider">
	<div class="owl-carousel owl-theme">

	<div class="fullscreen-title vegas-title">
		<div id="page-title" class="<?php echo esc_html(get_post_meta(get_the_ID(), 'tempus_title_style', true));  if ( get_post_meta(get_the_ID(), 'tempus_subtitle', true) || get_post_meta(get_the_ID(), 'tempus_subtitle_url', true) ) { echo ' has-subtitle'; } ?> wow fadeIn">

			<h1 style="color:<?php echo esc_html(get_post_meta(get_the_ID(), 'tempus_title_color', true)); ?>;"><?php echo esc_html(the_title()); ?></h1>

			<?php if ( get_post_meta(get_the_ID(), 'tempus_subtitle', true) || get_post_meta(get_the_ID(), 'tempus_subtitle_url', true) ) { ?>
				<?php tempus_subtitle(); ?>
			<?php } ?>

			<style>
				#page-title h1, .fullscreen-title .subtitle {
					color:<?php echo esc_html(get_post_meta(get_the_ID(), 'tempus_title_color', true)); ?>;
				}
			</style>

		</div>
	</div>
<?php
$item_wear = new WP_Query( $store); 

if( $item_wear->have_posts() ): 

while($item_wear->have_posts() ) : $item_wear->the_post(); 

if (has_post_thumbnail() && !post_password_required()) {
	$portfolio_main = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	$image_url = $portfolio_main[0];
  }

	$slider_images .= "{ src: '" . esc_url($image_url) . "' },";


endwhile; 
endif;	

wp_reset_postdata(); ?>
</div>
</div>
</div>


