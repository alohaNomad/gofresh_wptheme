<?php get_header() ?>

    <div class="w-100vw w-75vw-d pos-r-d" style="float: right;">
            <!-- PROJECT/ARCHIVE SECTION TODO: AUSLAGERN -->
            <section id="projects" class="content" >
              <?php
              if(is_author( )){
                    echo "<h1>Author's " . the_author( ) . " Archive:</h1>";
                }elseif(is_category( )){
                    echo "<h1>Category's " . the_category( ) . " Archive:</h1>";
                }elseif(is_date( )){
                    echo "<h1>Date's " . the_date() . " Archive:</h1>";
                }elseif(is_date('F Y')){
                    echo "<h1>Date's " . the_date('F Y') . " Archive:</h1>";
                }elseif(is_date('Y')){
                    echo "<h1>Date's " . the_date('Y') . " Archive:</h1>";
                }else{};?>

              <div class="photo-grid">

               <?php // This function belowm is responsible for iterating through the posts

               if (have_posts()):
    
                while (have_posts()): the_post(); 
      
                $postID = rand(0,100);
                $class = '';
      
                if($postID%4==0){$class='card';} 
                  elseif($postID%3==0){$class='card card-tall';} 
                  elseif($postID%2==0){$class='card card-wide';} 
                  else{$class='card card-tall card-wide';}
                  
                  ?>

                <a href="<?php the_permalink() ?>" alt=""
                  class="<?php echo $class;?>"
                  style="background-image:url(<?php if ( has_post_thumbnail() ) { 
                    // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail_url();} ?>)"> <p style="font-size:2rem;">

                    <?php the_title();?></p> 
                    <?php the_excerpt('small'); ?>

                </a>

                <?php endwhile; ?>
              <?php endif; ?>
             </div>
                 
          </section>

    </div>             

<?php get_footer() ?>