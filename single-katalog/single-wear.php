<?php
/**
 * The single katalog page template file.
 * @package WordPress
 */
$rand = rand (0, 400);

//product value
$product_name     		= get_field('product_name');
$price      			= get_field('price');
$size        			= get_field('size');
$contact_link      		= acf_get_field('contact_link')["default_value"];
$payment_link     		= get_field('payment_link');
$product_description    = get_field('product_description');
$other_sizes    		= get_field('other_sizes');
$other_features     	= get_field('other_features');

//product label
$label_price      				= acf_get_field('label_price')["default_value"];
$label_size        				= acf_get_field('label_size')["default_value"];
$label_contact_link      		= acf_get_field('label_contact')["default_value"];
$label_payment_link     		= acf_get_field('label_buy')["default_value"];
$label_product_description   	= acf_get_field('label_product_description')["default_value"];
$label_other_sizes    			= acf_get_field('label_other_sizes')["default_value"];
$label_other_features     		= acf_get_field('label_other_features')["default_value"];
$clients     					= acf_get_field('clients')["default_value"];
$click 	    					= acf_get_field('click')["default_value"];
$clickexit 	    			    = acf_get_field('clickexit')["default_value"];

get_header();

$add_class = (get_post_meta($post->ID, 'tempus_content_padding', true) == "off") ? 'no-padding' : '';	
$sec_gallery = (get_post_meta(get_the_ID(), 'tempus_post_gallery_images', TRUE)) ? 'is-gallery' : ''; 

if (has_post_thumbnail()) {
	
	$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'wear' );
	$thumbnail_url = $thumbnail_data[0];
} ?>


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
endif; ?>	
</ul>
<div class="cat-price"><?php echo $price; ?></div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo get_site_url() . $contact_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_contact_link; ?></span></a>	
</div>
<div class="btn-post" delay="<?php echo esc_attr($rand);?>ms">
<a href="<?php echo $payment_link; ?>" class="btn-shape"><span class="btn-label"><?php echo $label_payment_link; ?></span></a>
</div>
<ul>
<?php echo '<li class="cat-item">'  . $label_product_description . " " . $product_description . '</li>'; ?>
</ul>
</div><!--product-half-->

<div class="pic-half">
<div class="click-wear">
<button id="ajaxbtn" onclick="showPopup()" class="btn-shape btn-control"><span class="btn-label"><?php echo $click ?><span></button>
<div class="full-screen full-container-center hidden">
<button id="ajaxclose" onclick="closePopup()" class="btn-shape click-wear"><span class="btn-label"><?php echo $clickexit ?><span></button>
<div id="ajax-input"></div>
</div>
</div>

<div class="single-wear-item wow">
<img class="single-wear-image" src="<?php echo esc_url($thumbnail_url); ?>'">
</div><!--single-wear-->
</div>
</div>
</div><!--pic-half-->

</div><!--snap-->
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