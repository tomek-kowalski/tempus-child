<?php
/**
 * The single katalog page template file.
 * @package WordPress
 */
$rand = rand (0, 400);
$size = 'wear-extra';
//product value
$product_name     		= get_field('product_name');
$price      			= get_field('price');
$size        			= get_field('size');
$contact_link      		= acf_get_field('contact_link')["default_value"];
$payment_link     		= get_field('payment_link');
$product_description    = get_field('product_description');
$other_sizes    		= get_field('other_sizes');
$other_features     	= get_field('other_features');


$main_img    	    = get_field('main_img');
$img_1    	        = get_field('img_1');
$img_2	            = get_field('img_2');
$img_3              = get_field('img_3');

//product label
$label_price      				= acf_get_field('label_price')["default_value"];
$label_size        				= acf_get_field('label_size')["default_value"];
$label_contact_link      		= acf_get_field('label_contact')["default_value"];
$label_payment_link     		= acf_get_field('label_buy')["default_value"];
$label_product_description   	= acf_get_field('label_product_description')["default_value"];
$label_other_sizes    			= acf_get_field('label_other_sizes')["default_value"];
$label_other_features     		= acf_get_field('label_other_features')["default_value"];
$clients     					= acf_get_field('clients')["default_value"];


get_header();

$add_class = (get_post_meta($post->ID, 'tempus_content_padding', true) == "off") ? 'no-padding' : '';	
$sec_gallery = (get_post_meta(get_the_ID(), 'tempus_post_gallery_images', TRUE)) ? 'is-gallery' : ''; 

?>


<div class="container title_container archive-container">
<div id="page-title-custom" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">


<?php $post_id	 = get_the_ID(); 
$current_tax = get_terms( array(
	'taxonomy'   => 'product',
	'object_ids' => $post_id, // set the object_ids
) );


foreach( $current_tax as $current ) { ?>

		<?php

		//var_dump($current_tax);
		echo '<a href="' . esc_url( get_term_link($current ) ) . '" alt="' . esc_attr( sprintf($current->name) ) . '">' . '<h1>' .esc_html__($current->name,'text-domain') . '</h1>'. '</a>'; 
		}
		?>
</div>
</div>

<div  class="spinner-custom" >
<div  id="my"></div>
</div>
<div class="container" hidden>



		<div class="twelve-special columns blog-nosidebar <?php echo esc_attr($sec_gallery); ?>">


				<div <?php post_class('post-page-cust ' . $add_class); ?> id="post-<?php the_ID(); ?>" >
					<div class="post-content-cust post-left">
					<div class="post-description">
<div class="snap">


<div class="product-half">
<div class="product-title">
<h1><?php echo $product_name; ?></h1>
<div class="cat-price"><?php echo $price; ?></div>
</div>

<ul>		
<?php echo '<li class="cat-item">' .  $label_size . " " . strtoupper($size) . '</li>	'; ?>			

<?php if (!empty($other_sizes)) :

echo '<li class="cat-item">'. $label_other_sizes . " " . strtoupper($other_sizes) . '</li>';
else : 
endif;

if (!empty($other_features)) :

echo '<li class="cat-item">' . $label_other_features . " " . $other_features . '</li>';
else : 
endif; 	
echo '<li class="cat-item">'  . $label_product_description . " " . $product_description . '</li>'; ?>
</ul>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo get_site_url() . $contact_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_contact_link; ?></span></a>	
</div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo $payment_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_payment_link; ?></span></a>
</div>
</div><!--product-half-->

<div class="pic-half">

<div class="product">
	
 	<div class="main-img">
 		<img src="<?php  if (!empty($main_img)) : echo esc_url(wp_get_attachment_image($main_img,$size)); endif; ?>'" onerror="this.style.display='none'" class="pro-img" alt="product" />
 	</div>
 	<div class="thumb-img">
	 <div class="box active" onclick="changeImage(this)">
 		   <img src="<?php  if (!empty($main_img)) : echo esc_url(wp_get_attachment_image($main_img,$size)); endif; ?>'" onerror="this.style.display='none'" />
 	    </div>
 		<div class="box" onclick="changeImage(this)">
 		   <img src="<?php  if (!empty($img_1)) :  echo esc_url(wp_get_attachment_image_url($img_1,$size)); endif; ?>'" onerror="this.style.display='none'" />
 	    </div>
 	    <div class="box" onclick="changeImage(this)">
 		   <img src="<?php  if (!empty($img_2)) :  echo esc_url(wp_get_attachment_image_url($img_2,$size)); endif; ?>'" onerror="this.style.display='none'" />
 	    </div>
 	    <div class="box" onclick="changeImage(this)">
 		   <img src="<?php  if (!empty($img_3)) :  echo esc_url(wp_get_attachment_image_url($img_3,$size)); endif; ?>'" onerror="this.style.display='none'"/>
 	    </div>
 	</div>
 </div>

</div><!--pic-half-->

</div><!--snap-->

</div></div>
</div><!--post-content-->

<div class="container-row slide-control">
<div class="product-title"><h1><?php if(!empty($clients)) {
echo $clients;
} ?></h2></div>
<?php get_template_part( '/templates/template', 'portfolio-boxed-slider-wear' ); ?>
</div>
<div class="container-row ">
<?php get_template_part( '/templates/widgets/widgets', 'post-footer-wear' ); ?>
</div>
</div><!--post-desc-->
</div><!--post-page-->
</div><!--columns-->
</div><!--container-->


<?php if ( function_exists('ot_get_option') && ot_get_option('blog_latest') == "on" ) { ?>
	<div class="related-columns">
		<?php tempus_related_posts(); ?>
	</div>
<?php } ?>

<?php get_footer(); ?>

<script type="text/javascript" >

</script>