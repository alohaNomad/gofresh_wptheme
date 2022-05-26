<article id="post-<?php the_ID(); ?>">

<header class="entry-header">
        <?php
        if (is_singular()):
        the_title( 'h1 class="entry-title">','</h1>' );
        else:
        the_title( '<h1 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink()).'">','</a></h1>' )?>
    </header>

<?php 
if (has_post_thumbnail(  )):
    the_post_thumbnail( 'large' );
endif;
?>

<div class="entry-content"><?php the_excerpt(  )?></div>
</article>