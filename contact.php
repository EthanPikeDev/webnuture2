<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
    }
      
    if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
      
    if($concerned_department == "billing") {
        $recipient = "ethanpikedev@gmail.com";
    }
    else if($concerned_department == "marketing") {
        $recipient = "ethanpikedev@gmail.com";
    }
    else if($concerned_department == "technical support") {
        $recipient = "ethanpikedev@gmail.com";
    }
    else {
        $recipient = "ethanpikedev@gmail.com";
    }
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-111105160-3', 'auto');
		ga('send', 'pageview');
	</script>
    
    <title>WebNuture - Creative Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="WebNuture Creative Agency" />
    <meta name="author" content="Ethan Pike">
    <meta charset="UTF-8" />    
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
   
</head>
    






<body class="hidden hidden-ball smooth-scroll">

	
	<main>		
        <!-- Preloader -->
        <div class="preloader-wrap">
            <div class="outer">
                <div class="inner">
                    <div class="percentage" id="precent"></div>
                    <div class="trackbar">
                        <div class="loadbar"></div>
                    </div>
                    <div class="headphones"></div>
                    <div class="headphones-text">Turn up the volume for the<br>best experience</div>
                </div>
            </div>
        </div>
        <!--/Preloader -->   
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="page-content" class="light-content">
            
            <!-- Header -->
            <header class="classic-menu">
                <div id="header-container">
                
                
                <!-- Logo -->
                <div id="logo" class="hide-ball">
                    <a class="ajax-link" data-type="page-transition" href="index.html">
                        <img class="black-logo" src="images/logo.png" alt="  Logo">
                        <img class="white-logo" src="images/logo-white.png" alt="  Logo">
                    </a>
                </div>
                <!--/Logo -->             
                
                <!-- Navigation -->
                <nav> 
                	<div class="nav-height">
                        <div class="outer">
                            <div class="inner">           
                                <ul data-breakpoint="1025" class="flexnav">
                                    <li class="link menu-timeline"><a href="#"><span data-hover="Works">Work</span></a>
                                        <ul>
                                            <li><a class="ajax-link" href="index.html" data-type="page-transition">Fullscreen Slider</a></li>
                                            
                                            <li><a class="ajax-link" href="portfolio.html" data-type="page-transition">Classic Portfolio</a></li>
                                           
                                        </ul>
                                    </li>                                                               
                                    <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="about.html"><span data-hover="About">About</span></a></li>                        
                                    <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="contact.html"><span data-hover="Contact">Contact</span></a></li>
                                                   
                                </ul>            
                            </div>
                        </div> 
                    </div>          
                </nav>
                <!--/Navigation -->
                
                <!-- Menu Burger -->
                <div id="burger-wrapper" class="parallax-wrap">
                    <div id="menu-burger" class="parallax-element">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!--/Menu Burger -->
            
                </div>
            </header>
            <!--/Header -->        
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                
                    <!-- Hero Section -->
                    <div id="hero" class="">
                        <div id="hero-styles" class="parallax-onscroll">
                            <div id="hero-caption">
                                <div class="inner text-align-center">
                                    <div class="hero-subtitle">Get in touch</div> 
                                    <div class="hero-title">
                                        <span>C</span>
                                        <span>O</span>
                                        <span>N</span>
                                        <span>T</span>
                                        <span>A</span>
                                        <span>C</span>
                                        <span>T</span>	
                                    </div>                                
                                </div>
                            </div>                                            
                        </div>
                    </div>                      
                    <!--/Hero Section -->   
                    
                         
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <!-- Main Page Content -->
                        <div id="main-page-content">                        
                            
                            
                            
                            
                            
                            <!-- Row -->
                            <div class="vc_row small text-align-center">
                                
                                <h2 class="has-mask" data-delay="10">Let's Talk</h2>
                                    
                                
                                 <!-- Contact Form -->
                                 <div>
                                    <form action="contact.php" method="post">
                                        <div class="elem-group">
                                          <label for="name"></label>
                                          <input type="text" id="name" name="visitor_name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required>
                                        </div>
                                        <br>
                                        <div class="elem-group">
                                          <label for="email"></label>
                                          <input type="email" id="email" name="visitor_email" placeholder="Email" required>
                                        </div>
                                        <br>
                                        <div class="elem-group">
                                          <label for="message"></label>
                                          <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
                                        </div>
                                        <button class="button-content submit-box " type="submit">Send Message</button>
                                      </form>
                                </div>
                            </div>
                                
                            </div>
                            <!--/Row -->
                            
                            <!-- Row -->
                            <div class="vc_row text-align-center row_padding_top small">
                                        
                                <div class="one_third has-animation"  data-delay="100">
                                    <div class="clapat-icon">
                                        <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                                    </div>
                                
                                    <h6><a href="mailto:contact@webnuture.co.za" class="link"><span>contact@webnuture.co.za</span></a></h6>
                                    <p>Email</p>                        
                                </div>
                                
                                <div class="one_third has-animation"  data-delay="200">
                                    <div class="clapat-icon">
                                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                    </div>
                                
                                    <h6>Menlyn, Pretoria, South Africa</h6>
                                    <p>Address</p>                        
                                </div>
                                
                                <div class=" one_third last has-animation"  data-delay="300">
                                    <div class="clapat-icon">
                                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                    </div>
                                
                                    <h6>+27 81 276 1226</h6>
                                    <p>Phone</p>
                                </div>
                                
                                <hr><hr>
                                
                            </div>
                            <!--/Row -->
                        
                        
                        </div>
                        <!--/Main Page Content -->                     
                        
                        <!-- Page Navigation --> 
                        <div id="page-nav">
                            <div class="next-page-wrap">
                                <div class="next-page-title">
                                    <div class="inner text-align-center">
                                        <div class="page-subtitle has-animation" data-delay="100">
                                            <div class="subtitle-info">See More Work</div>
                                            <div class="subtitle-name">Our best work</div>
                                        </div>
                                        <a class="page-title has-animation hide-ball next-ajax-link-page" data-type="page-transition" href="portfolio.html" data-delay="150">
                                            <span>P</span>
                                            <span>O</span>
                                            <span>R</span>
                                            <span>T</span>
                                            <span>F</span>
                                            <span>O</span>
                                            <span>L</span>
                                            <span>I</span>
                                            <span>O</span>
                                        </a>             
                                    </div>                   
                                </div>
                            </div>
                        </div>      
                        <!--/Page Navigation -->
                                                
                                
                    </div>
                    <!--/Main Content --> 
                </div>
                <!--/Main --> 
                
                
                <!-- Footer -->
                <footer class="hidden">        	
                    <div id="footer-container">
                        
                        <div class="button-wrap left">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <div class="bars">
                                        <div class="bar"></div><div class="bar"></div><div class="bar"></div><div class="bar"></div><div class="bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-text"><span data-on="Sound On" data-off="Sound Off">Sound On</span></div> 
                        </div>
                        
                        <div class="socials-wrap">            	
                            <div class="socials-icon"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
                            <div class="socials-text">Follow Us</div>
                            <ul class="socials">
                                <li><span class="parallax-wrap"><a class="parallax-element" href="" target="_blank">Db</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="" target="_blank">Tw</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="" target="_blank">Be</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="" target="_blank">Fb</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="">In</a></span></li>
                            </ul>                
                        </div>
                        
                    </div>
                </footer>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>
    
    
    
    
    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="hold-event"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image"></div>
    <div id="rotate-device"></div>
	
    
    	
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js" ></script>
	<script type="text/javascript"    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dSWcBx-VghzhzQB6oCMTgeXMOhCYTvk"></script>
	<script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>



</body>

</html>