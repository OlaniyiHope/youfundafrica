
<?php


session_start();
$username="";

$email="";

$errors= array();


//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');


if (isset($_POST['submit'])) {

	$title = $_POST['txttit'];

	//ensure that form fields are filled properly
	if(empty($title)){

		array_push($errors,"title is required");//add error to errors array
	}


//if there are no errors, save into database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');

if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)
	$sql ="INSERT INTO campperk(title) VALUES('$title')";

mysqli_query ($db, $sql);
	$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
		header("location: index.php");

}

}


?>

