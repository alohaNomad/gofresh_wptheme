<?php wp_footer(); ?>

            <footer class="w-100vw w-75vw-d pos-r-d" style="float:right; bottom: 0;">
                
               <?php
                  $args = array('theme_location' => 'footer',
                                'menu_class' => 'navigation_ul',
                                'li_class' => 'navigation_li',
                                'container' => '');
                  wp_nav_menu( $args ); ?>
                <p style="margin: 0;">
                &copy; Marius Wolber
                </p>
                
            </footer>
    </body>
</html>
