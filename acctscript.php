<?php

session_start();
$username="";

$email="";

$errors= array();


//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//echo "db connected";

if (isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$password_1= $_POST['password_1'];
	$password_2 = $_POST['password_2'];



	//ensure that form fields are filled properly
	if(empty($firstname)){

		array_push($errors,"Username is required");//add error to errors array
	}
if(empty($email)){

		array_push($errors,"Email is required");//add error to errors array
	}

if(empty($password_1)){

		array_push($errors,"Password is required");//add error to errors array
	}
	if(empty($password_2)){

		array_push($errors,"Password is required");//add error to errors array
	}
if($password_1 != $password_2){

 array_push($errors, "The two passwords do not match" );

}

//if there are no errors, save into database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');

if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

	$sql ="INSERT INTO account(firstname,email,password_1,password_2) VALUES('$firstname','$email','$password_1','$password_2')";

 mysqli_query ($db, $sql);
	$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
		header("location: basic.php");


}

}


?>
