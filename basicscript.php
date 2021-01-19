<?php

session_start();
$username="";

$email="";

$errors= array();

if (isset($_POST['submit'])) {

//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//echo "db connected";


	$country=$_POST['txtcountry'];
$state=$_POST['txtstate'];
$city=$_POST["txtcity"];
$faddress=$_POST['txtaddress_1'];
$biography=$_POST['txtbiography'];
$blog=$_POST['txtblog'];
$media=$_POST['txtsocial'];
$saddress=$_POST['txtaddress_2'];



if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

	$sql ="INSERT INTO profiledetails(country,state,city,address_1,biography,blogurl,socialmediaaccount,address_2) VALUES('$country','$state','$city','$faddress','$biography','$blog','$media','$saddress')";

 if (mysqli_query ($db, $sql)){
 	header("location: interest.php");
 }


}

}


?>
