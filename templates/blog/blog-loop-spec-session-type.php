    <?php
/**
 * The Archive template file.
 * @package WordPress
 */

$description 		    = get_field('description_sesssions');
$price  			    = get_field('price_sessions');
$contact_link      	    = acf_get_field('contact_link')["default_value"];
$photo_large      		= get_field('large_photo');
$photo_1    	            = get_field('photo_1');
$photo_2	                = get_field('photo_2');
$photo_3                = get_field('photo_3');
$photo_4 	            = get_field('photo_4');
$payment_link     		= get_field('payment_link');



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

<div class="columns blog-nosidebar <?php echo esc_attr($sec_gallery); ?>">

<div <?php post_class('post-page-cust ' . $add_class); ?> id="post-<?php the_ID(); ?>" >
    <div class="post-content-cust post-left">
    <div class="post-description">
        <div class="snap-pic-session">

        <div class="product">
<div class="product-title">
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<ul>
<li class="cat-item"><?php echo $description; ?></li> 
</ul>
<div class="cat-price"><?php echo $price; ?></div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo get_site_url() . $contact_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_contact_link; ?></span></a>	
</div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo $payment_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_payment_link; ?></span></a>
</div>
</div><!--product-half-->
</div><!--snap-->
<div class="row-pic-session">
<div class="column-pic-50-session  column-pic-25-session-mobile">
<?php if (!empty(($photo_large )));
echo wp_get_attachment_image($photo_large,'150','240'); ?>
</div>
<div class="column-pic-25-session">
<img src="<?php if (!empty($photo_1)) : esc_url(the_field('photo_1')); endif; ?>'">
<img  src="<?php if (!empty($photo_2)) : esc_url(the_field('photo_2')); endif;  ?>'">
</div>
<div class="column-pic-25-session">
<img  src="<?php if (!empty($photo_3)) : esc_url(the_field('photo_3')); endif; ?>'">
<img  src="<?php if (!empty($photo_4)) : esc_url(the_field('photo_4')); endif; ?>'">
</div>
</div>

</div><!--pic-half-->
<div class="line-grey"></div>
</div><!--post-content-->

</div><!--post-desc-->
</div><!--post-page-->
</div><!--columns-->

<div class="twelve-special">

<div class="container-row-sessions ">
<?php get_template_part( '/templates/widgets/widgets', 'post-footer-sessions' ); ?>
</div></div>
</div><!--container-row-->