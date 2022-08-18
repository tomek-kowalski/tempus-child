<?php
/**
 * The single katalog page template file.
 * @package WordPress
 */
get_header('new');

$description_bali        		= get_field('description');
$accomodation_bali    			= get_field('accomodation:');
$price_bali       		        = get_field('price:');
$contact_link      	        	= acf_get_field('contact_link')["default_value"];
$program_bali   		        = get_field('program:');
$what_to_bring_bali             = get_field('what_to_bring:');
$photo_large    		    = get_field('photo_large_left');
$photo_1     	            = get_field('photo_1');
$photo_2    	            = get_field('photo_2');
$photo_3    	            = get_field('photo_3');
$photo_4    	            = get_field('photo_4');
$photo_5     	            = get_field('photo_5');
$photo_6    	            = get_field('photo_6');
$photo_7    	            = get_field('photo_7');
$photo_8    	            = get_field('photo_8');
$payment_link     		        = get_field('payment_link');
$date            		        = get_field('date');
$clients     					= acf_get_field('clients')["default_value"];

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
<div id="spinload" class="container" hidden>

		<div class="columns blog-nosidebar <?php echo esc_attr($sec_gallery); ?>">

				<div <?php post_class('post-page-cust ' . $add_class); ?> id="post-<?php the_ID(); ?>" >
					<div class="post-content-cust post-left">
					<div class="post-description">
						<div class="snap-pic">

                        <div class="product-column">
    <div class="product-title">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
    <div class="cat-price"><?php the_field('price:'); ?></div>
    </div>  <div class="date-shape"><?php echo $date; ?></div>
    <div  class="seesion-desc">
    <ul>
    <li class="cat-item"><?php the_field('description'); ?></li> 
    <li class="cat-item"><?php the_field('accomodation:'); ?></li>   
    <li class="cat-item"><?php  if (!empty(the_field('program:'))) : the_field('program:'); endif; ?></li>
    <li class="cat-item"><?php if (!empty(the_field('what_to_bring:') )) : the_field('what_to_bring:');endif;?> </li>
    </ul>
</div>
    <div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
    <a href="<?php echo get_site_url() . $contact_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_contact_link; ?></span></a>	
    </div>
    <div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
    <a href="<?php echo $payment_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_payment_link; ?></span></a>
    </div>
    </div><!--product-half-->

<div class="row-pic-session product">
<div class="column-pic-50-session  column-pic-25-session-mobile product">
<div class="main-img">
<img src="<?php  if (!empty($photo_large)) : echo esc_url(wp_get_attachment_image_url($photo_large,'150','220')); endif; ?>'" onerror="this.style.display='none'" class="pro-img" alt="product" />
</div>
</div>

<div class="thumb-img">	
<div class="column-pic-25-session">
<div class="active box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_large)) : echo esc_url(wp_get_attachment_image_url($photo_large,'150','220')); endif; ?>'" onerror="this.style.display='none'" alt="product" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_1)) : echo esc_url(wp_get_attachment_image_url($photo_1,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_2)) : echo esc_url(wp_get_attachment_image_url($photo_2,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_3)) : echo esc_url(wp_get_attachment_image_url($photo_3,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_4)) : echo esc_url(wp_get_attachment_image_url($photo_4,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
</div><!--column-pic-->
<div class="column-pic-25-session">
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_5)) : echo esc_url(wp_get_attachment_image_url($photo_5,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_6)) : echo esc_url(wp_get_attachment_image_url($photo_6,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_7)) : echo esc_url(wp_get_attachment_image_url($photo_7,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
<div class="box-ses" onclick="changeImage(this)">
<img src="<?php  if (!empty($photo_8)) : echo esc_url(wp_get_attachment_image_url($photo_8,'150','220')); endif; ?>'" onerror="this.style.display='none'" />
</div>
</div><!--column-pic-->

</div><!--thumb-->

</div><!--snap-->

</div><!--row-pic--->
<div class="line-grey-retreats"></div>
</div><!--post-content-->

</div><!--post-desc-->
</div><!--post-page-->

<div class="twelve-special">
<div class="container-row slide-control">
<div class="product-title"><h1><?php if(!empty($clients)) {
echo $clients;
} ?></h2></div>
<?php get_template_part( '/templates/template', 'portfolio-boxed-slider-retreats' ); ?>
</div>

<div class="container-row ">
<?php get_template_part( '/templates/widgets/widgets', 'post-footer-retreats' ); ?>

</div><!--container-row-->
</div><!--columns-->
</div>
</div><!--container-->





<?php get_footer('new');