<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <style>


.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;

  transition: 0.3s;
}
.sidebar h3{
  font-size: 17px;
}
.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

<style>
.collapsible {

  color: white;
  cursor: pointer;
 

  border: none;
  text-align: left;
  outline: none;
  font-size: 12px;
 
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
 margin-left: 20px;

}

.active:after {
  content: "\2212";
}

.content {
  margin-top: 0;
  max-height: 0;
  overflow: hidden;
  color: white;
  transition: max-height 0.3s ease-out;
  background-color: #000;
}
.content  a.active {
  background-color: #4CAF50;
  color: white;

}

.try{
  background-color: #008000;
  color: white;
  border: none;
  margin-top: 20px;
  margin-bottom: 20px;
  padding: 10px;
  border-radius: 5px;
}
.col p{
  width: 70%;
}

</style>


  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/resca.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YouFundAfica</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/campcontent3.css">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/cat.jpg" alt="">
                                </a>
                            </div>
                        </div>
                           <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="about.php">About</a></li>
                                          <li><a href="#">Categories <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="health.php">Health</a></li>
                                                 <li><a href="agi.php">Agriculture</a></li>
                                                  <li><a href="edu.php">Education</a></li>
                                                   <li><a href="tech.php">Technology</a></li>
                                                    <li><a href="energy.php">Energy and Environment</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="register.php">Join Us</a></li>

                                        <li><a href="#">About <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Our Team</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="causesd.php">causes-details</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="donate_now">
                                <a href="donor.php" class="boxed-btn">Donate Now</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcam_text">
                        <h3>Your Campaign Contents</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->
<div id="main" style="margin-top: 60px;">
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<div class="link">
            <div class="reg" style="padding-top: 80px;">
          <h3 class="collapsible">CAMPAIGN EDITOR</h3>
          
        <div class="content"> 
        <ol>
          <li><a href="campbasic.php" class="active">BASICS</a></li>
          <li><a href="campcontent3.php">CONTENT</a></li>
          <li><a href="campperk.php">PERKS</a></li>
          <li><a href="campitem.php">ITEMS</a></li>
          <li><a href="campteam.php">TEAM</a></li>
          <li><a href="campfund.php">FUNDING</a></li>
        </ol>

            </div>  
        <h3 class="collapsible"> PREVIEW PROFILE</h3>
          <div class="content"> 
        <ol>
          <li><a href="account.php"> ACCOUNT</a></li>
          <li><a href="basic.php">BASIC</a></li>
          <li><a href="interest.php"> INTEREST</a></li>
           <li><a href="payment.php"> PAYMENT</a></li>
        </ol>

            </div>
            <h3 class="collapsible">PREVIEW CAMPAIGN</h3>
          <div class="content"> 
        <ol>
          <li><a href="addCay.php"> Add profile</a></li>
          <li><a href="ct.php">Edit profile</a></li>
          <li><a href="cres.php"> Change User</a></li>
        </ol>

            </div>
            <h3 class="collapsible"> PRELAUNCH PAGE</h3>
          <div class="content"> 
        <ol>
aQ  1`3


<li><a href="addCay.php"> Add profile</a></li>
          <li><a href="ct.php">Edit profile</a></li>
          <li><a href="cres.php"> Change User</a></li>
        </ol>

            </div>
              
          </div>        
          </div>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Campaign dashboard</button>  
    <div class="film">
          <div class="don">
          <ul>
           
              <li><a href="campcontent3.php" class="go">Save Campaign</a> </li>
                <li><a href="basic.php">Review and Launch</a> </li>
          </ul>
          </div>
           <div class="form">
            <form action="campcontscript.php" method="POST" >

                <div class="form-col">  
                  <div class="col">
                <h4>Pitch Video or Image</h4>
                <p >
                  Add a video or image to apper on the top of your campaign page. Campaigns with videos raise 2000% more than the campaign without videos. Keep your video two to three minutes.

                </p>
                </div>
                
                <input type="file" name="txtvid" placeholder="Upload video " style="color: #000; padding: 10px;  text-align: center;">
                
                <input type="file" name="txtimg" placeholder="Upload image " style="color: #000; padding: 10px;  text-align: center;">
                  
                <div class="col">
                    <div class="rin">
                  <p style="color: #000;">Recent Passport</p>
                    </div>
                <input type="file" name="txtpass" placeholder="Upload " style="color: #000;  text-align: center;">
                </div>

                  <div class="col">
                  <h4>Story *</h4>
                  <p>Tell potential contibutor more about your campaign. Provide details that will motivate them to contribute </p>
                <input type="text"  class="txt1" placeholder="Short Summary of ideas people are passionate about by introducing yourself first, introducing your campaign ideas and express the magnitude of what contribution you will need to achieve it" name="txtsto"  >
                
                </div>
                <div class="col">
                <h4>FAQ *</h4>
                <p >Short Summary of ideas people are passionate about by introducing yourself first, introducing your campaign ideas and express the magnitude of what contribution you will need to achieve it" </p>
                </div>
                <div class="col">
                  <p>Question</p>
                  <input type="text" class="txt1" name="txtqu" >
                </div>
                <div class="col">
                  <p>Answer</p>
                  <input type="text" class="txt1" name="txtan">
                </div>
                <button type="submit" name="submit" class="try" >SAVE & CONTINUE</button>
                
              </div>
            </form>
    <!-- footer_start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                               ABOUT US
                            </h3>
                            <p class="footer_text doanar"> <a class="first" href="about.php">About</a><br> <a class="first" href="#">Our Team</a> <br><a
                                    href="contact.php">Contact Us</a><br><a class="first" href="register.php">Join YouFundAfrica</a></p>
                                         
                      
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <p class="footer_text">Lagos, Nigeria <br>
                                +2347086865816 <br>
                                <a class="domain" href="#">hello@youfundafrica.com</a></p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Fund Raised for
                            </h3>
                            <ul>
                                <li><a href="health.php">Health</a></li>
                                <li><a href="edu.php">Education</a></li>
                                <li><a href="tech.php">Technology</a></li>
                                <li><a href="agi.php">Agriculture</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed with love <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Hope</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end -->
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
              <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>