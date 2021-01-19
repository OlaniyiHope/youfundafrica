

<?php

include_once'./include/config.php';


?>




<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YouFundAfica</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" type="text/css" href="css/resba.css">
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

<style>
 
        
.col p{
    
    text-align: center;
}

button{
    background-color: #000;
    color: #fff;
    font-size: 14px;
    padding: 8px;
    margin-top: 10px;
    width: 50%;
    border-radius: 10px 0px 10px 10px;
    border: none;
}
.bind{
    width: 100%;
    display: flex;
    height: auto;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    margin-left: 15px;
    flex-wrap: wrap;
    
    
    margin: 0;
    padding-top: 0;
}
.bind .aa{
    flex-basis: 30%;
    flex-wrap: wrap;
    margin-left: 20px;
    margin-top: 50px;
}
.mind{
    margin-left: 20px;
    margin-top: 10px;
}
.bind .bb{
    margin-top: 60px;
    margin-bottom: 60px;
    flex-basis: 30%;
    flex-wrap: wrap;

}
.bind .cc{
    flex-basis: 30%;
    flex-wrap: wrap;

}
.aa button{
    margin-left: 40px;
    margin-top: 10px;
    border-radius: 7px 7px 7px 7px;
}
.aa button a{
    background-color: #000;
    color: #fff;
    font-size: 17px;
    padding: 8px;
    margin-top: 10px;
    width: 50%;
    border-radius: 10px 10px 10px 10px;
    border: none;
    text-decoration: none;
}

.col p{
    background-color: #008000;
    margin-bottom: 0px;
    color: yellow;
    font-size: 20px;
    border-radius: 3px 3px 3px 3px;
    margin-bottom: 3px;
    width: 100%;
}

.col input{
    padding: 10px;
  width: 100%;
  border: 2px solid #008000;
  border-radius: 4px;
}
.col select{
    padding: 10px;
   width: 100%;
      border: 2px solid #008000;
  border-radius: 4px;
}
.col textarea{
    height: 80px;
    
  border: 2px solid #008000;
  border-radius: 4px;
}
.col h6{
    margin-top: 0;
    margin-bottom: 0;
    font-size: 12px;
}
.rin{
    width: 25%; 
    border-radius: 20px 20px 20px 20px; 
    height: 90px;
     background-color: #008000;
      color: #fff;
       padding: 40px;
        text-align: center;
        margin-bottom: 20px;
        margin-top: 20px;
}
.ji p{
     width: 25%; 
     text-align: center;
}
.jo p{
    width: 20%;
     text-align: center;
}
.jd p{
    width: 25%;
     text-align: center;
}
.jk p{
width: 50%; 
text-align: center;
}
.jf p{
width: 25%; 
text-align: center;
}
.col  input{
 width: 100%;
}
.jf input{
    padding: 30px;
     border-radius: 20px 20px 20px 20px;
}
.ju p{
    width: 55%; 
    text-align: center;
}
 .ccc textarea{
    width: 100%;
}
.ju input{
    height: 1px;
}
.jw p{
    width: 50%;
     text-align: center;
}
.col p{
    min-width: 300px;
}
.jw input{
     height: 1px;
}
    </style>
</style>
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
                                        <li><a href="login.php">Login</a></li>
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
                                                   <li><a href="about.php">What we do</a></li>
                                                <li><a href="team.php">Our Team</a></li>
                                                
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
                        <h3>Basic Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->
<section class="bind">
				<div class="aa">
						<button type="submit"><a href="account.php">Account</a> </button>
						<button type="submit"><a href="basic.php"> Basic Details</a></button>
						<button type="submit"><a href="interest.php">Interest</a> </button>
						<button type="submit"><a href="payment.php">Payment Details</a> </button>
						<button type="submit"><a href="campbasic.php">Campaign</a> </button>	
						<button type="submit"><a href="">Log Out</a> </button>	
				</div>
				<div class="bb">
					<div class="form">
				


						<form  method="POST" action="basicscript.php" >
							<div class="form-row">
								
								<div class="col ggg">
									<p >Country</p>
									<select id="country" name="txtcountry" required="">
			  						<option disabled="true" selected="true">
									</option>
									<option value="Algeria">Algeria</option>
									<option value="Ghana">Ghana</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Togo">Togo</option>
									
								</select>
									
								</div>

								<div class="col fff">
									<p>State</p>
								<select id="country"  name="txtstate" required="">
			  						<option disabled="true" selected="true">
									</option>
									<option value="Algeria">Ikeja</option>
									<option value="Ghana">Osogbo</option>
									<option value="Niger">PortHarcourt</option>
									<option value="Nigeria">Abeokuta</option>
									<option value="Togo">Ibadan</option>
								</select>
								</div>	

								<div class="col eee">
									<p >City</p>
								<input type="text" name="txtcity" class="txt1" required="">
								</div>
									   </div>
                    
									<div class="cc">
										<div class="col ddd">
									<p >Address</p>
									<input type="text" name="txtaddress_1" class="txt1" required="">
									
								</div>	
								
									<div class="col ccc">
									<p >Biography</p>
								<textarea class="area"></textarea>
								<h6>Give us a brief description about what you do and why you do them</h6>
								</div>
								
								<div class="col bbb">
									<p >Personal Blog/Website</p>
								<input type="text" required="" name="txtblog" class="txt1" >
								</div>
								<div class="col aaa">
									<p >Social Media Account</p>
								<input type="text" required="" name="txtsocial" class="txt1" >
									<input type="text" name="txtaddress_2" class="txt1" required="">
								</div>
									</div>
								<button type="submit" name="submit" class="mind">Save</button>							
							</div>

                   
						</section>
   
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


	