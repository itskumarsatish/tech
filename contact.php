<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vetsa consultancy</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
 <style>

 </style>
  </head>
  <body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
		
		
		
		
		
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-center">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
			<div class="header-lft" >
        <p><a href="#main-header"><img src="images/logo1.png"/></a></p>
      </div>
      <div class="header-rgt m1 menu"> 
				
            <div class="collapse navbar-collapse" id="menu-center">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a class="dk " href="index.php">Home</a></li>
                <li class=""><a class="dk"  href="about.php">About</a></li>
                <li class=""><a class="dk"  href="services.php">Services</a></li>
                <li class=""><a class="dk"  href="industries.php">Industries</a></li>
				<li class=""><a class="dk"  href="blog.php">Blog</a></li>
                <li class=""><a class="dk active" href="contact.php">Contact Us</a></li>
              </ul>
            </div>
		</div>
          </div>
        </nav>
        </header>
        
    <section id="contact" class="section-padding wow fadeInUp delay-05s sec5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title1 pad-bt15">Keep in touch with us</h2>
            <p class="sub-title pad-bt15">Each contact with a customer is so rare, so precious,<br/> one should preserve it.</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-3x"></i>Vetsa Consulting Services Limited,
              <br/>
				Coundon House<br/> Coundon House Drive<br/><p style="    margin-left: 77px;
    margin-top: -23px;"> Coventry, CV6 1EW</p><br/> <p style="    margin-left: 77px;
       margin-top: -44px;">United Kingdom</p></p>
              <p style="line-height: 30px"><i class="fa fa-envelope-o fa-fw pull-left fa-3x"></i>For Enquiries: <a href="mailto:Info@VetsaConsulting.com" target="_top">Info@VetsaConsulting.com</a><br/>For Sales: <a href="mailto:Andy@VetsaConsulting.com" target="_top">Andy@VetsaConsulting.com</a></p>
              <p style=""><i class="fa fa-phone fa-fw pull-left fa-3x"></i>Phone: +44 (0) 2476 012526<br/>Direct: +44 (0)7799 88 3616</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="col-md-6 padding-right-zero">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                            <div class="validation"></div>
                        </div>
                      <input type="submit" class="btn btn-primary btn-submit" name="send" value="Send Now">
                    </div>
                </form>
              
            </div>
          </div>
		  
        </div>
		
		
      </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Copyright 2017 Vetsa Consulting Services Limited</p>
          <div class="credits">
          
        </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
	<script>
$(document).ready(function(){
   
    $(".navbar-nav > li>a").click(function(){
        $(".collapse").collapse('hide');
    });
    
});
</script>
	<!--<script>
			$(document).ready(function(){
    $(".dk").click(function(){alert("hii")
    //$(".navbar-nav>li>a").addClass();
	 $(this).addClass("intro");
});
    });
});
</script> 
  -->  
  <script type="text/javascript">
  
  </script>

  </body>




<script>
!function(a){"use strict";a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=a(this.hash);if((e=e.length?e:a("[name="+this.hash.slice(1)+"]")).length)return a("html, body").animate({scrollTop:e.offset().top-48},1e3,"easeInOutExpo"),!1}}),a(".js-scroll-trigger").click(function(){a(".navbar-collapse").collapse("hide")}),a("body").scrollspy({target:"#mainNav",offset:54}),a(window).scroll(function(){a("#mainNav").offset().top>100?a("#mainNav").addClass("navbar-shrink"):a("#mainNav").removeClass("navbar-shrink")})}(jQuery);
</script>
</html>



<?php

  if(isset($_POST['send']))
  {
  
      $name=$_POST['name'];
     
     $mail=$_POST['email'];
     $sub=$_POST['subject'];   
     $message=$_POST['message'];
      $to = "ravikiran.gundoju@gmail.com";  
      $subject="FeedBack From Vetsa Consultancy";
       $txt="Name:- ".$name."
Mail Id:- ".$mail." 
Subject:- ".$sub." 
Message:- ".$message." ";
     $res= mail($to,$subject,$txt,"Please Contact Me");
    // header('Location:contact_success.php');
     if($res)
  {
    echo "<script>alert('Thanks for sending your message We will get back to you shortly')</script>";
  }
  else{
    
    echo "<script>alert('ok messages have not sent')</script>";
    
  }
   }




?>