<?php
/**
 * The Archive template file.
 * @package WordPress
 */

$description_bali        		= get_field('description');
$accomodation_bali    			= get_field('accomodation:');
$price_bali       		        = get_field('price:');
$contact_link      	        	= acf_get_field('contact_link')["default_value"];
$program_bali   		        = get_field('program:');
$what_to_bring_bali             = get_field('what_to_bring:');
$photo_large_left_bali    		= get_field('photo_large_left');
$photo_1_bali     	            = get_field('photo_1');
$photo_2_bali    	            = get_field('photo_2');
$photo_3_bali    	            = get_field('photo_3');
$photo_4_bali    	            = get_field('photo_4');
$photo_5_bali     	            = get_field('photo_5');
$photo_6_bali    	            = get_field('photo_6');
$photo_7_bali    	            = get_field('photo_7');
$photo_8_bali    	            = get_field('photo_8');
$payment_link     		        = get_field('payment_link');
$date            		        = get_field('date');



//product label
$label_contact_link     = acf_get_field('label_contact')["default_value"];
$label_payment_link     = acf_get_field('label_buy')["default_value"];

$add_class = (get_post_meta($post, 'tempus_content_padding', true) == "off") ? 'no-padding' : '';
$sec_gallery = (get_post_meta(get_the_ID(), 'tempus_post_gallery_images', TRUE)) ? 'is-gallery' : ''; 

$rand = rand (0, 400);


if ( function_exists('get_post_format') && get_post_format($post->ID) == 'link' ) {
	$link = strip_tags($link);
}

if (has_post_thumbnail()) {
	
	$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'wear' );
	$thumbnail_url = $thumbnail_data[0];
} 
?>

<div  class="spinner-custom" >
<div  id="myloader"></div>
</div>
<?php // var_dump( $GLOBALS['wp_scripts']->registered ); ?>
<div id="spinload" class="container" hidden>

<div class="twelve-special columns blog-nosidebar <?php echo esc_attr($sec_gallery); ?>">

<div <?php post_class('post-page-cust ' . $add_class); ?> id="post-<?php the_ID(); ?>" >
    <div class="post-content-cust post-left">
    <div class="post-description">
        <div class="snap-pic">

        <div class="product">
<div class="product-title">
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
</div>  <div class="date-shape"><?php echo $date; ?></div>
<ul>
<li class="cat-item"><?php the_field('description'); ?></li> 
<li class="cat-item"><?php the_field('accomodation:'); ?></li>   
<li class="cat-item"><?php  if (!empty(the_field('program:'))) : the_field('program:'); endif; ?></li>
<li class="cat-item"><?php if (!empty(the_field('what_to_bring:') )) : the_field('what_to_bring:');endif;?> </li>
</ul>
<div class="cat-price"><?php the_field('price:'); ?></div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo get_site_url() . $contact_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_contact_link; ?></span></a>	
</div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo $payment_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_payment_link; ?></span></a>
</div>
</div><!--product-half-->
</div><!--snap-->
<div class="row-pic">
<div class="column-pic-50">
<?php if (!empty(($photo_large_left_bali)))
echo wp_get_attachment_image($photo_large_left_bali,'150','240'); ?>
</div>
<div class="column-pic-25">
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_1')); ?>'"></a>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_2')); ?>'"></a>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_5')); ?>'"></a>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_6')); ?>'"></a>
</div>
<div class="column-pic-25">
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_3')); ?>'"></a>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_4')); ?>'"></a>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_7')); ?>'"></a>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link">
<img class="pic-size" src="<?php esc_url(the_field('photo_8')); ?>'"></a>
</div>
</div>

</div><!--pic-half-->
<div class="line-grey"></div>
</div><!--post-content-->

</div><!--post-desc-->
</div><!--post-page-->
</div><!--columns-->
</div><!--container-->

