<?php get_header(); ?>

<div class="w-100vw w-75vw-d pos-r-d" style="float: right;">
 <!-- CONTENT START -->        

            <!-- DIA-SHOW HERO TODO: AUSLAGERN -->
            <div class="hero"  id="64">
                    <div class="hero__text">
                      <h1>I am Marius Wolber</h1>
                       <p>And I'm a Web Developer</p>
                      <button>Hire me</button>
                    </div>
          </div>

          <!-- LOAD PAGES CONTENT INTO FRONT PAGE DEPENDING ON NAV ITEMS-->
            <?php
            $nav_items = wp_get_nav_menu_items( 'main' ); //TODO NAME AUSLAGERN -> PROBLEM WENN USER EIN ANDEREN NAV NAMEN EINGIBT
            /* print_r($nav_items); */
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
                        <h1><a href="<?php echo $item->url;?>"><?php the_title(); ?></a></h1>
                        <?php the_content(); ?>
                      </section>
                  
                  <?php
                    $x+=1;
            
                }
            
                wp_reset_query();
                          
              }
          }
  ?>
            
 <!-- CONTENT END -->
</div>

       
<?php get_footer(); ?>
