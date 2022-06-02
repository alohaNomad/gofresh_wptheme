<?php

get_header(); ?>
    <div class="w-100vw w-75vw-d pos-r-d" style="float: right;">
<!-- CONTENT START -->        
            <!-- TODO: DIA-SHOW HERO -->
            <div class="hero"  id="home">
                    <div class="hero__text">
                      <h1>I am Marius Wolber</h1>
                       <p>And I'm a Web Developer</p>
                      <button>Hire me</button>
                    </div>
          </div>

          <!-- LOAD PAGES CONTENT INTO FRONT PAGE -->
          <?php
      $nav_items = wp_get_nav_menu_items( 'main' );
       if( ! empty( $nav_items ) ) {
        
        $x = '2';

        foreach( $nav_items as $item ) {
          $query = new WP_Query( array( 'post_type' => 'page',
                                        'page_id' => $item->object_id, ));
            
              while($query->have_posts()){
              $query->the_post();                                
               //variables
               $s_class = '';
             

               //change every second class
               if($x%2==0){$s_class='content';}
                     else{$s_class='content content--clipped';}?>
                 <section id="<?php the_ID(); ?>" class="<?php echo $s_class ?>">
                   <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                 </section>
                 <?php
                 $x+=1;
            
            }
            
          wp_reset_query();
          
         


        }
    }

/*             //change query filter
            $query = new WP_Query( array( 'post_type' => 'page',
                                          'orderby' => 'menu_order title',
                                          'order'   => 'ASC') );

            
            $x = '2';

            //loop start
            while($query->have_posts()){
              $query->the_post();
              //variables
              $s_class = '';
             

            //change every second class
            if($x%2==0){$s_class='content';}
                  else{$s_class='content content--clipped';}?>
              <section id="<?php the_ID(); ?>" class="<?php echo $s_class ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </section>
              <?php
              $x+=1;
            }

              wp_reset_query(); */
          ?>



            <!-- PROJECT SECTION -->
            <section id="projects" class="content content--clipped" >
                   
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
            
<!-- CONTENT END -->



          
            
            
<?php get_footer(); ?>
