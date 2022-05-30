<?php 
get_header();
?>

<main id="site-content" class="w-100vw w-75vw-d pos-r-d" style="float: right;">

<div class="hero" style="height:50vh; background-image: url(<?php the_post_thumbnail_url() ?>);"></div>

	<section class="content">
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
/* if (comments_open()||get_comments_number()):
	comments_template();
endif; */
?>

<?php 
get_footer();
?>	
</main><!-- #site-content -->
