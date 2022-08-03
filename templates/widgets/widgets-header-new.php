<?php
/**
 * Header template part
 */

$alt_nav = ( function_exists('ot_get_option') && ot_get_option('alt_nav') == "on" || isset($_GET["alt_nav"]) ) ? 'menu-alt' : '';
$navigation_style = ( function_exists('ot_get_option') && ot_get_option('navigation_style') ) ?  ot_get_option('navigation_style') : 'menu-default menu-right';
$navigation_style = (isset($_GET["navigation_style"])) ? esc_attr($_GET["navigation_style"]) : $navigation_style; ?>

<div class="container nav_container <?php echo esc_attr($alt_nav . ' ' . $navigation_style); ?>">
	<div id="site-navigation">



	</div>
</div>
