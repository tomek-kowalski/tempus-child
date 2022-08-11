<?php
/**
 * Blog template part
 */

$product_name     		= get_field('product_name');
$price      			= get_field('price');
$size        			= get_field('size');

$rand = rand (0, 400);

if ( function_exists('get_post_format') && get_post_format($post->ID) == 'link' ) {
	$link = strip_tags($link);
}

if (has_post_thumbnail()) {
	
	$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'tool' );
	$thumbnail_url = $thumbnail_data[0];
} ?>


<?php // var_dump( $GLOBALS['wp_scripts']->registered ); ?>
<div  class="spinner-custom" >
<div  id="my"></div>
</div>
<div class="container" hidden>
<div class="block-center">
<article  id="post-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" data-wow-delay="<?php echo esc_attr($rand);?>ms">


<div <?php post_class('row-tool'); ?>>

<div class="third-all	">
<div <?php post_class('two-one-tool wear-item-tool wow fadeIn')?>>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="blog-link"></a>
<div class="wear-image" style="background-image:url('<?php echo esc_url($thumbnail_url) ?>')"></div>
</div>
<div class="tool-data">
<h2><?php echo $product_name; ?><h2>
<div class="li-way">
<ul>
<li><?php echo $size; ?></li>
</ul>
</div>
<div class="cat-price"><?php echo $price; ?></div>
</div>
</div><!--third-all-->

</div><!--column-wear-->

</article>
</div>
</div>