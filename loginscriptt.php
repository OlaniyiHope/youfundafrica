<?php

session_start();


	//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//if the registration button is clicked 


if(isset($_POST['login'])){


	$username= $_POST['username'];
	
	$password_1= $_POST['password_1'];

	
if(empty($username))
 {
 	array_push($errors, "Username is required");
 }



		$query="SELECT username, password_1, id FROM register WHERE username='$username' && password_1='$password_1'";
		$results = mysqli_query($db, $query);



		if (mysqli_num_rows($results)> 0) {
			
			$_SESSION['username'] = $username;
			
			header("Location: account.php");
	        $_SESSION['success']= "you are now logged in";

			}
	
		else {
				header("Location: login.php");
			
			}
	

}


?>

