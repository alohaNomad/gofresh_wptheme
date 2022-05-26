<!DOCTYPE html>
<html lang="en" >
    <head <?php wp_head();?>>
        <meta charset="utf-8">
    
        <title>gofresh</title>
        <meta name="description" content="">
        <meta name="author" content="Marius Wolber">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    </head>

    <body class="grid-container  [ ta-c ]" style="margin:0;" <?php body_class();?>>

    <div class="grid-item  [ wrapper ]">
<!-- NAVIGATION START -->
            <header class="grid-item navigation" id="navigation">
                 
                <nav>
                   
                   <ul class="navigation__list ta-c">
                       <li class=""><a href="#home">
                           <?php if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                           }?>
                       </a></li>
                       <li class="navigation__links"><a href="#home">Home</a></li>
                       <li class="navigation__links"><a href="#about">About</a></li>
                       <li class="navigation__links"><a href="#projects">Projects</a></li>
                       <li class="navigation__links"><a href="#contact">Contact</a></li>
                       <li class=""><a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                        <i class="fa fa-bars"></i>
                      </a></li>
                   </ul>
                   
                </nav>
           </header>