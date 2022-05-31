<!-- <?PHP
  // form handler
  //wenn alle values gesetzt sind...
 /*  if($_POST && isset($_POST['sendfeedback'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['message'])) {
    //...setze variablen
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email']; */
/*     $subject = $_POST['subject']; */
   /*  $message = $_POST['message'];

    //teste variablen
    if(!$fname) {
      $errorMsg = "Please enter your First Name";
    } elseif(!$lname) {
        $errorMsg = "Please enter your Last Name";
    }
      elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      $errorMsg = "Please enter a valid Email address";
    } elseif(!$message) {
      $errorMsg = "Please enter your comment in the Message box";
    } else {
      // send email and redirect
      $to = "hm@jh.com";
      /* if(!$subject) $subject = "Contact from website"; */
     /*  $headers = "From: $email" . "\r\n";
      mail($to, $subject, $message, $headers);
      header("Location: /wordpress/index.php");
      exit;
    }

  } */
?>
<?PHP
/*   // form handler
  function validateFeedbackForm($arr)
  {
    extract($arr);

    if(!isset($fname, $lname, $email, $subject, $message)) return;

    if(!$fname) {
      return "Please enter your First Name";
    }
    if(!$lname) {
        return "Please enter your Last Name";
      }
    if(!preg_match("/^\S+@\S+$/", $email)) {
      return "Please enter a valid Email address";
    }
    if(!$subject) $subject = "Contact from website";
    if(!$message) {
      return "Please enter your comment in the Message box";
    }

    // send email and redirect
    $to = "alohanomad.main@gmail.com";
    $headers = "From: $email" . "\r\n";
    mail($to, $subject, $message, $headers);
    header("Location: ");
    exit;
  }

  // execution starts here
  if(isset($_POST['sendfeedback'])) {
    // call form handler
    $errorMsg = validateFeedbackForm($_POST);
  } */
?> BENUTZE action="admin=post.php" fuer form handeling mit wp -->

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
            <header class="grid-item navigation w-25vw h-100vh" id="navigation">
                 
                <nav>
                   
                   <ul class="navigation__list ta-c">
                       <li class="navigation__logo"><a href="#home">
                           <?php if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                           }?>
                       </a></li>
                       <li class="navigation__links"><a href="/wordpress/#home">Home</a></li>
                       <li class="navigation__links"><a href="/wordpress/#about">About</a></li>
                       <li class="navigation__links"><a href="/wordpress/#projects">Projects</a></li>
                       <li class="navigation__links"><a href="/wordpress/#contact">Contact</a></li>
                       <li class=""><a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                        <i class="fa fa-bars"></i>
                      </a></li>
                   </ul>
                   
                </nav>
           </header>
