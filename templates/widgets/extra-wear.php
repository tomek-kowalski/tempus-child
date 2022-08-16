<?php 
//Ajax extra picture
$post_id            = get_the_id();
$img_1    	        = get_field('img_1',$post_id);
$img_2	            = get_field('img_2',$post_id);
$img_3              = get_field('img_3',$post_id);
?>
<div>
<img src="<?php  if (!empty($img_1)) :  esc_url(the_field('img_1',$post_id)); endif; ?>'" onerror="this.style.display='none'">
<img  src="<?php if (!empty($img_2)) :  esc_url(the_field('img_2',$post_id)); endif;  ?>'" onerror="this.style.display='none'">
<img  src="<?php if (!empty($img_3)) :  esc_url(the_field('img_3',$post_id)); endif;  ?>'" onerror="this.style.display='none'">
</div>