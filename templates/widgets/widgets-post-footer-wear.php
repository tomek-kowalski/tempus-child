<?php
/**
 * Post Footer template part
 */

$this_category      				= acf_get_field('this_category ')["default_value"];
$other_category        				= acf_get_field('other_category')["default_value"];
?>

<div class="post-footer line-footer wow fadeIn">

<span class="cats-cust cat-left animated-link"><div class="menu-desc"><?php esc_html_e($other_category);?></div><?php


$products = get_terms( array(
    'taxonomy' => 'product',
    'hide_empty' => false,
) );

	
	if ( !empty($products) ) :
		foreach( $products as $category ) {
			if( $category->parent == 0 ) {

	foreach( $products as $single_product ) {
		if($single_product->parent == $category->term_id) { 
		?>
		<div class="cats-menu">
		<ul class="my-listing">
		<?php 
			echo '<a href="' . esc_url( get_term_link( $single_product ) ) . '" alt="' . esc_attr( sprintf($single_product->name ) ) . '">' . '<li class="cat-menu">' . esc_html__($single_product->name,'text-domain') . " " . '</li>' . '</a>'; ?>
		</ul>
		</div>
		<?php
		}
	}
}
}
endif; ?></span>

<?php if (has_tag()) { ?><span class="single-tags animated-link"> <?php the_tags(esc_html__( 'Tags: ', 'tempus' ),', '); ?></span> <?php } ?>

	<?php tempus_share(); ?>


<?php if ( comments_open() ) { ?>

<div class="comments-number"><?php echo get_comments_number(); ?></div>

<?php if ( function_exists('ot_get_option') && ot_get_option('hide_comments') != "yes" ) {
	comments_template('', true);
} elseif (!function_exists('ot_get_option')) {
	comments_template('', true);
} }?>
</div>
