<?php 
get_header();
?>

<main id="site-content">

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

</main><!-- #site-content -->

<!-- ++++++++++++++++++++++++++++++++++TODO!!!++++++++++++++++++++++++++++++++++ -->
<!-- <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?> -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<?php 
get_footer();
?>