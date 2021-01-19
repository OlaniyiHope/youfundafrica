
<?php

session_start();
$username="";

$email="";

$errors= array();



if (isset($_POST['submit'])) {

//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//if the registration button is clicked 


	$tag = $_POST['txttag'];
	$duration = $_POST['txtdur'];
	$category = $_POST['txtcat'];
	$location = $_POST['txtloc'];
	$tagline = $_POST['txtline'];
	$imageupload = $_POST['txtimage'];
	$whatcampaign = $_POST['txtwhat'];

//if there are no errors, save into database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');

if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

	$sql ="INSERT INTO campbasic(tag,duration,category,location,tagline,imageupload,whatcampaign) VALUES('$tag','$duration','$category','$location','$tagline','$imageupload','$whatcampaign')";

	mysqli_query ($db,$sql);
	$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
	
header("location:campcontent3.php");

}

}


?>
