<?php

session_start();


	//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//if the registration button is clicked 


if(isset($_POST['login'])){


	$username= $_POST['username'];
	
	$password_1= $_POST['password_1'];




//ensure that form fields are filled properly
	if(empty($username)){

		array_push($errors,"username is required");//add error to errors array
	}
if(empty($password_1)){

		array_push($errors,"password is required");//add error to errors array
	}



		$query="SELECT username, password_1, id FROM register WHERE username='$username' && password_1='$password_1'";
		$results = mysqli_query($db, $query);



		if (mysqli_num_rows($results)> 0) {
			
			$_SESSION['username'] = $username;
	        $_SESSION['success']= "you are now logged in";

			header("Location: account.php");
			}
	
		else {
		 //echo "Error deleting record: " . mysqli_error($con);
			array_push($errors, "wrong username or password");
	   header("Location: login.php");
	}
			}
	




?>

