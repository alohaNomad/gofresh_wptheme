<?php 
get_header();
?>

<main id="site-content" class="w-100vw w-75vw-d pos-r-d" style="left: 25vw;">
	<section class="content content--clipped">
	<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );

	}
}

?>
	</section>
<?php
if (comments_open()||get_comments_number()):
	comments_template();
endif;
?>

</main><!-- #site-content -->

<?php 
get_footer();
?>	
