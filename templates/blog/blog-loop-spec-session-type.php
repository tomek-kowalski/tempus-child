    <?php
/**
 * The Archive template file.
 * @package WordPress
 */
$size = 'wear-extra';
$description 		    = get_field('description_sesssions');
$price  			    = get_field('price_sessions');
$contact_link      	    = acf_get_field('contact_link')["default_value"];
$photo_large      		= get_field('large_photo');
$photo_1    	        = get_field('photo_1');
$photo_2	            = get_field('photo_2');
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

?>

<div  class="spinner-custom" >
<div  id="my"></div>
</div>
<?php // var_dump( $GLOBALS['wp_scripts']->registered ); ?>
<div class="container" hidden>

<div class="columns blog-nosidebar <?php echo esc_attr($sec_gallery); ?>">

<div <?php post_class('post-page-cust ' . $add_class); ?> id="post-<?php the_ID(); ?>" >
    <div class="post-content-cust post-left">
    <div class="post-description">
        <div class="snap-pic-session">

        <div class="product-column">
<div class="product-title">
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<div class="cat-price"><?php echo $price; ?></div>
<ul>
<li class="cat-item"><?php echo $description; ?></li> 
</ul>
<div class="column">
	<div class="row">
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo get_site_url() . $contact_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_contact_link; ?></span></a>	
</div>
</div><!--row-->
<div class="row">
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo $payment_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_payment_link; ?></span></a>
</div>
</div><!--row-->
</div>
</div><!--product-half-->
</div><!--snap-->
<div class="row-pic-session product">
<div class="column-pic-50-session  column-pic-25-session-mobile product">

<div class="main-img">
<img src="<?php  if (!empty($photo_large)) : echo esc_url(wp_get_attachment_image_url($photo_large,'wear-extra')); endif; ?>'" onerror="this.style.display='none'" class="pro-img" alt="product" />
</div>
</div>

<div class="thumb-img">	
<div class="column-pic-25-session">
<div class="active box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_large)) : echo esc_url(wp_get_attachment_image_url($photo_large,$size)); endif; ?>'" onerror="this.style.display='none'" alt="product" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_1)) : echo esc_url(wp_get_attachment_image_url($photo_1,$size)); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_2)) : echo esc_url(wp_get_attachment_image_url($photo_2,$size)); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_3)) : echo esc_url(wp_get_attachment_image_url($photo_3,$size)); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_4)) : echo esc_url(wp_get_attachment_image_url($photo_4,$size)); endif; ?>'" onerror="this.style.display='none'" />
</div>


</div>
</div>
</div><!--row-pic-->
<div class="line-grey"></div>
</div><!--post-content-->

</div><!--post-desc-->
</div><!--post-page-->
</div><!--columns-->



<div class="container-row-sessions ">
<?php get_template_part( '/templates/widgets/widgets', 'post-footer-sessions' ); ?>
</div>
</div><!--container-row-->