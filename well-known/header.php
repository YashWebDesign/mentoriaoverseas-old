<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <?php
include("admin/config.php");
$stmt = $conn->prepare("SELECT * FROM url");
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      
        $home_url = $row["home_url"];
        $home_url = mysqli_real_escape_string($conn, $home_url);
        
{ ?>   
    <base href="<?php echo $home_url; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mentoria Overseas Education</title>
    
    <meta name="keywords" content="Mentoria Overseas Education, study abroad, study abroad with mentoria" />
    <meta name="description" content=" The journey of Mentoria Overseas Education is a story of perseverance, dedication, and a relentless pursuit of empowering students to achieve their dreams. At its core, it's the story of our founder, Mr. Kabir Nanavare, who turned personal struggles into a beacon of hope for countless aspiring international students. " />
    <meta name="abstract" content=" The journey of Mentoria Overseas Education is a story of perseverance, dedication, and a relentless pursuit of empowering students to achieve their dreams. At its core, it's the story of our founder, Mr. Kabir Nanavare, who turned personal struggles into a beacon of hope for countless aspiring international students. "/>
    <meta name="classification" CONTENT="Mentoria Overseas Education, study abroad, study abroad with mentoria" />
    <meta name="description" content=" The journey of Mentoria Overseas Education is a story of persever"/>
    <meta name="audience" content="all">
   <meta name="distribution" content="global">
   <meta name="author" content="Mentoria Overseas Education" />
   <meta name="copyright" content="Copyright (c) 2023 https://mentoriaoverseas.com/" />
   <meta name="language" content="en" />
   <link rel="canonical" href=" https://mentoriaoverseas.com/"/>
    <meta property="og:site_name" content="Mentoria Overseas Education"/>
    <meta property="og:site" content="https://mentoriaoverseas.com/"/> 
    <meta property="og:title" content="Mentoria Overseas Education, study abroad, study abroad with mentoria"/>
    <meta property="og:description" content="The journey of Mentoria Overseas Education is a story of perseverance, dedication, and a relentless pursuit of empowering students to achieve their dreams. At its core, it's the story of our founder, Mr. Kabir Nanavare, who turned personal struggles into a beacon of hope for countless aspiring international students."/>
    <meta property="og:image" content="https://mentoriaoverseas.com/assets/logo/mentoria-logo.jpg"/>
    <meta property="og:url" content="https://mentoriaoverseas.com/"/>
    <meta property="og:type" content="website"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/logo/mentoria-logo.jpg">
    
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/magnifypopup.min.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="assets/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/tipped.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    
    <style type="text/css">
    /* mobile and desktop content hide */

@media screen and (min-width: 567px) 
{
#content-desktop {display: none;}

}
                   
@media screen and (max-width: 567px) {

#content-mobile {display: none;}
} 
        .black{color:black}
        
     
        *{padding:0;margin:0;}

body{
	/*font-family:Verdana, Geneva, sans-serif;*/
	/*font-size:18px;*/
	
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	/*background-color:#0C9;*/
	/*color:#FFF;*/
	border-radius:50px;
	text-align:center;
	/*box-shadow: 2px 2px 3px #999;*/
    z-index: 5;
}
      

.my-float{
    position:fixed;
	margin-top:22px;
    left:40px;
    width:60px;
	height:60px;
	bottom:40px;
    border-radius:50px;
	text-align:center;
    z-index: 5;
}
      
 
        
    </style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11490875152">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11490875152');
</script>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '710948477337465');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=710948477337465&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body class="sticky-header ">
    <div id="main-wrapper" class="main-wrapper">
        <header class="edu-header header-style-2">
            <div class="header-top-bar">
                <div class="container">
                    <div class="header-top">
                        <div class="header-top-left">
                            <ul class="header-info">
                                <li><a href="tel:+918669988111"><i class="icon-phone"></i>Call: +91-8669988111</a></li>
                                <li><a href="mailto:support@mentoriaoverseas.com" target="_blank"><i class="icon-envelope"></i>Email: support@mentoriaoverseas.com</a></li>
                            </ul>
                        </div>
                        <div class="header-top-right">
                            <ul class="header-info">
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="https://maps.app.goo.gl/aAUh9HZF3VAWxmtZ9">Locate Us</a></li>
                                <li class="header-btn"><a href="apply-now" class="edu-btn btn-secondary btn-medium">Apply Now <i class="icon-4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="<?php echo $home_url; ?>">
                                    <img class="logo-light" src="assets/logo/mentoria-logo.jpg" alt="" style="width:80px">
                                    <img class="logo-dark" src="assets/logo/mentoria-logo.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li class="has-droupdown"><a href="<?php echo $home_url; ?>">Home</a></li>
                                    <li class="has-droupdown"><a href="#">Countries</a>
                                        <ul class="submenu">
                                            <li><a href="australia">Australia</a></li>
                                            <li><a href="canada">Canada</a></li>
                                            <li><a href="germany">Germany</a></li>
                                            <li><a href="ireland">Ireland</a></li>
                                            <li><a href="new-zealand">New Zealand</a></li>
                                            <li><a href="uk">UK</a></li>
                                            <li><a href="usa">USA</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown"><a href="universities">Universities</a></li>
                                    <li class="has-droupdown"><a href="courses">Courses</a></li>
                                    <li class="has-droupdown"><a href="#">Mentoria Elite</a>
                                        <ul class="submenu">
                                            <li><a href="test-prep">Test Prep</a></li>
                                            <li><a href="mentoria-premium">Mentoria Premium</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown"><a href="blogs">Blogs</a></li>
                                  <li class="has-droupdown"><a href="contact-us">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="header-right" id="content-mobile">
                            <ul class="header-action">
                                <li class="icon search-icon">
                                    <a href="https://www.facebook.com/people/Mentoria-Overseas-Education/100088859376570/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="icon cart-icon">
                                    <a href="https://www.instagram.com/mentoria_overseas/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        
                        
                        
                        
                        <div class="header-right" id="content-desktop">
                            <ul class="header-action">
                                <li class="">
                                    <a href="apply-now" class="edu-btn btn-secondary btn-medium">
                                        Apply Now
                                    </a>
                                </li>
                                
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                            <a href="index">
                                <img class="logo-light" src="assets/logo/mentoria-logo.jpg" alt="">
                                <img class="logo-dark" src="assets/logo/mentoria-logo.jpg" alt="">
                            </a>
                        </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="icon-73"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="mainmenu">
                                    <li><a href="<?php echo $home_url; ?>">Home</a></li>
                        <li class="has-droupdown"><a href="#">Countries</a>
                                        <ul class="submenu">
                                            <li><a href="australia">Australia</a></li>
                                            <li><a href="canada">Canada</a></li>
                                            <li><a href="germany">Germany</a></li>
                                            <li><a href="ireland">Ireland</a></li>
                                            <li><a href="new-zealand">New Zealand</a></li>
                                            <li><a href="uk">UK</a></li>
                                            <li><a href="usa">USA</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="universities">Universities</a></li>
                                    <li><a href="courses">Courses</a></li>
                                    <li class="has-droupdown"><a href="#">Mentoria Elite</a>
                                        <ul class="submenu">
                                            <li><a href="test-prep">Test Prep</a></li>
                                            <li><a href="mentoria-premium">Mentoria Premium</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blogs">Blogs</a></li>
                                    <li><a href="contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <?php } } } ?>
        </header>