<?php

get_header(); ?>
    <div class="w-100vw w-75vw-d pos-r-d" style="float: right;">
<!-- CONTENT START -->        
            <!-- TODO: DIA-SHOW -->
                <div class="hero"  id="home">
                    <div class="hero__text">
                      <h1>I am Marius Wolber</h1>
                       <p>And I'm a Web Developer</p>
                      <button>Hire me</button>
                    </div>
              </div>
         
    
               <section id="about" class="content">
                <h1>About me</h1>
                <div class="about">
                <div class="about__img"><img src="/assets/img/pexels-dapo-abideen-3535630.jpg" alt="Marius Wolber" style="max-width: 100%;"></div>
                    
                <div class="about__text">
                    <h2>My Name is Marius, nice too meet you</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus atque esse, et quisquam numquam, laudantium porro vel deserunt, unde quae optio rem eveniet consequatur cum fugit debitis. Tenetur, consectetur soluta?</p>
                </div>
               
                </div>
                
                </section>

    
               <section id="projects" class="content content--clipped" >
                   
               <div class="photo-grid">
               <?php if (have_posts()):
    // This function belowm is responsible for iterating through the posts
    
    while (have_posts()): the_post(); 
      
      $postID = rand(0,100);
      $class = '';
      if($postID%4==0){$class='card';} elseif($postID%3==0){$class='card card-tall';} elseif($postID%2==0){$class='card card-wide';} else{$class='card card-tall card-wide';}
        ?>

      <a href="<?php the_permalink() ?>" alt=""
        class="<?php echo $class;?>"
        style="background-image:url(<?php if ( has_post_thumbnail() ) { 
          // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail_url();} ?>)"> <p style="font-size:2rem;"><?php the_title();?></p> <?php the_excerpt('small'); ?>
      </a>

    <?php
          endwhile; ?>
    <?php
endif; ?>
       <!--

        <a href=# alt="p1"
        class="card card-tall card-wide"
        style="background-image:url('https://images.unsplash.com/photo-1558981359-219d6364c9c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')">
        </a>

        <a href=# alt="p2"
        class="card card-tall"
        style="background-image:url('https://images.unsplash.com/photo-1583585635793-0e1894c169bd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=913&q=80')"
        >
        </a>

      <a href=# alt="p3"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583531172005-814191b8b6c0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80')">
      </a>

      <a href=# alt="p4"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583426573939-97d09302d76a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80')">
      </a>

      <a href=# alt="p5"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583532452513-a02186582ccd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
      </a>

      <a href=# alt="p6"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583445013765-46c20c4a6772?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
      </a>

      <a href=# alt="p7"
        class="card card-wide"
        style="background-image:url('https://images.unsplash.com/photo-1583562835057-a62d1beffbf3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=949&q=80')">
      </a>

      <a href=# alt="p8"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583483425010-c566431a7710?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80')" >
      </a>

      <a href=# alt="p9"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583500557349-fb5238f8d946?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1949&q=80')">
      </a>

      <a href=# alt="p10"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583468323330-9032ad490fed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80')">
      </a>

      <a href=# alt="p11"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583425423320-2386622cd2e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1980&q=80')">
      </a>

      <a href=# alt="p12"
        class="card"
        style="background-image:url('https://images.unsplash.com/photo-1583518257225-f9a8081f6a84?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
      </a> -->
      
    </div>
                 
                
                   
               </section>
               
    
               <section id="contact" class="content">
  

                
                </section>




          
            
            
<?php get_footer(); ?>
