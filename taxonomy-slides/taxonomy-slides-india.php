<?php
/**
 * The Archive template file.
 * @package WordPress
 */
get_header(); ?>

<div class="container blog-content" >

	<?php while (have_posts()) : the_post();
		get_template_part('/templates/blog/blog','loop-spec-retreats');
	endwhile; ?>
</div>



<?php get_footer();

