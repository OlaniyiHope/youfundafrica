<?php


session_start();
$username="";

$email="";

$errors= array();



if(isset($_POST["submit"])){

 
//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//echo "db connected";

$majorinterest=$_POST["txtinterest"];
$addinterest=$_POST["txtinterest2"];
$biointerest=$_POST['txtdesc'];

	//ensure that form fields are filled properly
	if(empty($majorinterest)){

		array_push($errors,"major interest is required");//add error to errors array
	}
if(empty($addinterest)){

		array_push($errors,"add interest is required");//add error to errors array
	}
	if(empty($biointerest)){

		array_push($errors,"bio interest is required");//add error to errors array
	}
	//if there are no errors, save into database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');


		if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

$sql ="INSERT INTO anoint(majorinterest,addinterest,biointerest) VALUES('$majorinterest','$addinterest','$biointerest')";

	if (mysqli_query($db, $sql)){
			$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
		header("location: basic.php");
	}



}







}

?>
