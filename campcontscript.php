
<?php

session_start();
$username="";

$email="";

$errors= array();

//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//if the registration button is clicked 

if (isset($_POST['submit'])) {



	$videos = $_POST['txtvid'];
	$images = $_POST['txtimg'];
	$passp = $_POST['txtpass'];
	$stor = $_POST['txtsto'];
	$que = $_POST['txtqu'];
	$ans = $_POST['txtan'];

	
	
	
	//ensure that form fields are filled properly
	if(empty($videos)){

		array_push($errors,"video is required");//add error to errors array
	}
if(empty($inages)){

		array_push($errors,"image is required");//add error to errors array
	}

if(empty($passp)){

		array_push($errors,"Passport is required");//add error to errors array
	}
	if(empty($stor)){

		array_push($errors,"story is required");//add error to errors array
	}
	if(empty($que)){

		array_push($errors,"question is required");//add error to errors array
	}
	if(empty($ans)){

		array_push($errors,"answer is required");//add error to errors array
	}



//if there are no errors, save into database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');

if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

	$sql ="INSERT INTO camping(answer,question,story,passport,video,image) VALUES('$ans','$que','$stor','$passp','$images','$videos')";

	mysqli_query ($db,$sql);
	$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
	
header("location:campperk.php");

}

}


?>
