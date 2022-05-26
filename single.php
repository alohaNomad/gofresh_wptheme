<?php 
get_header();
?>

<main id="site-content" class="w-100vw w-75vw-d pos-r-d" style="left: 25vw;">
	<section class="content content--clipped">
	<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

/* ++++++++++++++++++++++++++++++++++TODO!!!++++++++++++++++++++++++++++++++++ */
get_template_part( 'template-parts/content', get_post_type() );
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
	}
}

?>
	</section>

	<?php 
get_footer();
?>	
</main><!-- #site-content -->

