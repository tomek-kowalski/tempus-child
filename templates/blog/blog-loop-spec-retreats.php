<?php
/**
 * The Archive template file.
 * @package WordPress
 */


$price_bali       		        = get_field('price:');
$photo_large_left_bali    		= get_field('photo_large_left');
$photo_1_bali     	            = get_field('photo_1');
$photo_2_bali    	            = get_field('photo_2');
$photo_3_bali    	            = get_field('photo_3');
$photo_4_bali    	            = get_field('photo_4');
$photo_5_bali     	            = get_field('photo_5');
$photo_6_bali    	            = get_field('photo_6');
$photo_7_bali    	            = get_field('photo_7');
$photo_8_bali    	            = get_field('photo_8');
$date            		        = get_field('date');


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
<div  id="my"></div>
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
<div class="cat-price"><?php the_field('price:'); ?></div>
</div>  
<div class="date-shape"><?php if (!empty(($date))) echo $date; ?></div>

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

