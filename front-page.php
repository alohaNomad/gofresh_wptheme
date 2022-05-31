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
         
            <!-- ABOUT SECTION -->
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
            
            <!-- CONTACT SECTION -->
            <section id="contact" class="content">
            
              <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" target="_blank" method="post">
                <input type="hidden" name="action" value="contact_form">
                <?php /* if(isset($errorMsg) && $errorMsg) {echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";} */?>
                  
                  <label for="fname">First name:</label><br>
                  <input type="text" id="fname" name="fname" placeholder="Jon" required value="<?PHP if(isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']); ?>"><br>

                  <label for="lname">Last name:</label><br>
                  <input type="text" id="lname" name="lname" placeholder="Doe" required value="<?PHP if(isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']); ?>"><br>

                  <label for="email">E-Mail:</label><br>
                  <input type="email" id="email" name="email" placeholder="jon-doe@fresh.com" required value="<?PHP if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"><br>

                  <label for="message">Your Message:</label><br>
                  <textarea id="message" name="message" rows="10" cols="20" placeholder="Let's chat!" required value="<?PHP if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?>"></textarea><br>

                  <input type="submit" name="sendfeedback" value="Submit">
              </form>

              <div>
                <ul>
                  <li><a href="#facebook"><i class="fa fa-facebook-square"></i>  Like me on Facebook</a></li>
                  <li><a href="#telegram"><i class="fa fa-telegram"></i>  Message me on Telegram</a></li>
                  <li><a href="#telegram"><i class="fa fa fa-instagram"></i>  Follow me on Instagram</a></li>
                </ul>          
              </div>
            
            
                
          </section>
<!-- CONTENT END -->



          
            
            
<?php get_footer(); ?>
