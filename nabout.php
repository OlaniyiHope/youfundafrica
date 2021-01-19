<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>YouFundAfrica</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/nabout.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/resab.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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

</style>
<style>
.wiq{
	 position: absolute;
	  top: 50px;
	   left: 1200px; 
	   padding: 15px;
}

		.topnav {
  overflow: hidden;
 
 	position: absolute;
 	top: 270px;
 	left: 300px;
}

.topnav a {

  float: left;
  font-size: 24px;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 26px;
  text-decoration: none;
  line-height: 1.5;
    letter-spacing: 0;
 margin: auto;
 margin-right: 12px;
 margin-left: 12px;
  border-radius: 5px 5px 5px 5px;
  background-color: #000;
}

.topnav a:hover {
  background-color: #008000;
  color: white;
  opacity: 2;
}

.topnav a.active {
  background-color: #818181;
  color: white;
}

.topnav .icon {
  display: none;
}
@media screen and (max-width: 320px) {
	.wiq{
		 
	   left: 0px; 
	}
 
	}
	@media screen and (max-width: 420px) {
	.wiq{
 	
	   left: 250px; 
 }
 
	}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none; }
  .topnav a.icon {
    float: right;
    display: block;
    margin-left: 320px;
  }
  .slide{
  	margin-top: 60px;
  }
  .wiq{
  	  top: 100px;
	   left: 450px; 
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive { position: fixed; background-color: #fff; z-index: 100; height: 100%; width: 100%;}
  .topnav.responsive .icon {
  	position: fixed;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    color: #fff;
  }
  .topnav{
  	top: 0;
  	left: 0;
  }
.topnav a.active {
  background-color: #818181;
  color: white;
}

.topnav a {
  float: left;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-left: 0px;
  border-radius: none;
  border-bottom: 1px solid #000;
  background-color: #000;
}
.topnav a:hover {
  background-color: #000;

  color: white;
}

.topnav a.active {
  background-color: #008000;
  color: white;
}

}

@media screen and (max-width: 480px) {
  .topnav a:not(:first-child) {display: none; }
  .topnav a.icon {
    float: right;
    display: block;
    margin-left: 150px;

  }
 .slide{
 	margin-top: 55px;
 }
 .wiq{
 	
	   left: 250px; 
 }
}

@media screen and (max-width: 480px) {
  .topnav.responsive { position: fixed; background-color: #fff; z-index: 100; height: 100%; width: 100%;}
  .topnav.responsive .icon {
  	position: fixed;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    color: #fff;
  }
  .topnav{

  }
.topnav a.active {
  background-color: #818181;
  color: white;
}

.topnav a {

  float: left;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-left: 0px;
  border-radius: none;
  border-bottom: 1px solid #000;
  background-color: #000;
}
.topnav a:hover {
  background-color: #000;

  color: white;
}

.topnav a.active {
  background-color: #008000;
  color: white;
}

}

	</style>

</head>
<body style=" width: 98%; margin: auto;">
		
				<section class="slide" >		
					<div class="slide_item">
				
				<div class="slideshow-container">

					<div class="mySlides fade">
					  	<img src="images/d1.jpg" style="width:100%">
				  		<div class="text"></div>
					</div>

					<div class="mySlides fade">
					  	<img src="images/d2.jpg" style="width:100%">
				  		<div class="text"></div>
					</div>

					<div class="mySlides fade">
					  	<img src="images/d6.jpg" style="width:100%">
				  		<div class="text"></div>
					</div>
						<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
				</div>
			
			
		</section>
			</div>



			
	
	<main>
		
			<div class="read">
				<img src="">
				
				<div class="math">
					<h2>WHY YOUFUNDAFRICA</h2>
					<h4>There are quite a number of crowd funding and funding platforms designed for sponsoring or backing innovative ideas and important causes focused towards making positive and meaningful impact. These platforms have been thriving well enough in serving as solution providers to individuals and corporate idealists in need of funds to execute projects and launch innovative product lines.
					Africa however, has not been able to tap into this democratic opportunity that could be explored and exploited for the purpose of fostering developmental projects and ideas in unreached and underserved communities.
					Therefore, there is a need to create a revolutionary way of funding projects and ideas especially for the purpose of sustainable community development. This is why the creation of an Africa-focused, globally-funded crowd funding platform like youFUNDAfrica needs to be birthed to predominantly fund grassroots developmental ideas.
					</h4>
				</div>
					<div class="run">
					<h2></h2>
					<h4>As much as we desire to accommodate all kinds of projects, yFA would only focus on subscribers who are keen on starting up community based socio-enterprise or industrialization. And each subscriber would be approved based on how the ideas and projects are:
					Impactful | Sustainable
					Scalable | Profitable | Feasible
					Any project that does not have the community at the core of its project would not be approved. This is because we want the funds to be as evenly concentrated and distributed as possible. This may fortunately result to the high donor-to-recipient ratio.</h4>
									</div>
			</div>
				<div class="read">
				<img src="">
				
				<div class="math">
					<h2>WHAT WE DO</h2>
					<h4>Because we are result-driven and ourdedication towards qualitative projects, yFA will also be streamlined  to supporting causes that fall within these thematic fields of engagements: Technology | Education Health | Agriculture We believe that any community that  is developed in these areas has attained the level of sustainability and productivity will always be well assured. Any idealist or start-up who subscribes to yFA must be working in any of these thematic areas. More prudence would be given to any start-up or individual whose ideas or projects have a considerably greater depth in one of these areas. More attention would be given to those who find a way to intricately woven the interaction of two or more thematic areas together thereby offering both depth and coverage.</h4>
					
				</div>
					<div class="run">
					<h2>DONORS</h2>
					<h4>This platform unlike most crowd funding platform will have an account page where donors could make fund deposits prior to the emergence of projects that best match their profile. It would be like an investment banking version of crowd funding whereby automation would be designed to help donors disburse their deposited funds based on their profiles. This automation would be a recommended option and not a compulsion. As many backers or donors that funded any projects would receive 1% increase of whatever they donated and addedto their yFA accounts. The donors would be allowed to review and give feedbacks as regards how transparent and accountable recipients are.  In addition to the criticality and usefulness of ideas, regular donors would be given considerations when they become recipients. This applies to African donors.</h4>
				</div>
			</div>
							<div class="read">
				<img src="">
				
				<div class="math">
					<h2>RECIPENTS</h2>
					<h4>7.5% of the funds raised would be the fee for using yFA as a crowd funding platform. The fee will be higher if perks offered and brand elements are part of the deal for using yFA.2.5% of every fund raised by the recipients would be retained for the purpose of donating to any project or idea that the recipients find worthwhile. The recipients become the donor. This is meant to inculcate a sense of giving and crowd funding in Africa. We want every African that subscribe as recipients to become donors in the long run. This is the crux of yFA – for Africans to develop a camaraderie sense when it comes to crowd funding!</h4>
					
				</div>
					<div class="run">
					<h2>BRAND ELEMENTS</h2>
					<h4>yFA would offer to help recipients with the production of brand elements they plan to give as perks to donors. This would motivate them to want to give more towards causes on yFA. The expenses for this service would be deducted from the funds raised so recipients would be advised to add these costs to the target. The price of each brand element would have been pre-set.</h4>
				</div>
			</div>

						<div class="toyo">
				<img src="images/head.JPG">
			</div>
			<div class="check">
				<img src="">
				<div class="test"> 
					<h4>Work together to make a difference faster and effectively</h4>
				</div>
				<div class="pic">
					<img src="images/fund.jpg">
				</div>
			</div>
			
			<div class="about2">
				<p>Causes Support the people and campaign to make a difference Support the people and campaign to make a difference Support the people and campaign to make a difference Support the people and campaign to make a difference</p>
			</div>
			<div class="check2">
				<img src="">
				<div class="pic2">
					<img src="images/mo.jpg">
				</div>
				<div class="test2">
					<h4>Work together to make a difference faster and effectively</h4>
				</div>
				
			</div>

		<footer>
			<section class="footer-top">	
				<div class="item">
					<h4> ABOUT US</h4>
					<ul>
						<li><a href="nabout.php">About</a> </li>
						<li><a href="team.php">Our Team</a> </li>
						<li><a href="contact.php">Contact Us</a> </li>
						<li><a href="register.php">Join YouFundAfrica</a> </li>
					</ul>
				</div>
				
				
					<div class="item">
					<h4> FUNDRAISED FOR </h4>
					<ul>
						<li><a href="tech.php">Technology</a> </li>
						<li><a href="agi.php">Agriculture</a> </li>
						<li><a href="health.php">Health</a> </li>
						<li><a href="edu.php">Education</a> </li>
					</ul>
				</div>
				
			
				<div class="item">
				
					
					<h4> LEARN MORE AND JOIN US </h4>
					<ul>
						<li><a href="nabout.php">How it works</a> </li>
						<li><a href="nabout.php">How to get support</a> </li>
						<li><a href="">Facebook</a> </li>
						<li><a href=" ">Instagram</a> </li>
					</ul>
				</div>
				
				<div class="item">
					<h4 style="font-size: 30px; font-weight: 1000; margin-bottom: 0;">YouFundAfrica</h4>
					<ul>
						
					<li><a href="register.php" style="background-color: #008000; font-size: 20px; color: white; padding: 10px; border-radius: 7px 7px 7px 7px;">Join youFundAfrica</a></li>
					
					</ul>

				</div>

				
			</section>


		</footer>
		
		<div class="huh">
		
		<section class="footer-bottom"  style="background-color: #008000;">
			<ul>
				<li><a href="#">Terms and conditions</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Cookie Policy</a></li>
			</ul>
		</section>
	
	</div>
</main>
`				<script type="text/javascript" src="js/slide.js"></script>
		<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
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
			<button class="openbtn wiq" onclick="openNav()">☰ </button> 
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<div class="link">
            <div class="reg" style="padding-top: 80px;">
          <h3 class="collapsible"><a href="team.php"> Our Team</a></h3>
          
     
        <h3 class="collapsible"><a href="contact.php">Contact Us</a> </h3>

            <h3 class="collapsible"><a href="nabout.php"> About Us</a></h3>
              
          </div>        
          </div>
</div>
   <div class="topnav" id="myTopnav">
			
	
	  <a href="index.php" class="hi" >home</a>
	  
	  <a href="register.php">Join Us/ Sign in</a>
	  <a href="donor.php">Donate</a>
	  <a href="nabout.php">About</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>
				<div class="hot">

		<section class="content2">
			<div class="logo">
				<a href="index.php"><img src="images/cat.jpg" alt="youfundafrica"></a>
				
			</div>
		</section>

			</div>
			<h6>Africa's Community Based Crowdfunding Platform</h6>
		<div class="banner">
			<div class="icon2">	
			<strong>
			<i class="fab fa-invision"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-facebook-square"></i>
	
<a href="mailto:youremailaddress"><i class="fas fa-envelope"></i></a>
			<i class="fas fa-phone-square-alt"></i>
			</strong>
			</div>
		</div>
</body>
</html>




