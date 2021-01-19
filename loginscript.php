<?php
$parts = explode('.', $file_name);
$file_extension = end($parts);
	session_start();
	require_once 'dbconnection.php';

	$email = $_POST['txtEmail'];
	$password = $_POST['txtPass'];

	$query = "SELECT email, password, userId FROM users WHERE email = '$email' && password = '$password'";
	$result = mysqli_query($con, $query);

	if(mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $_SESSION['email'] = $row["email"];
			$_SESSION['userId'] = $row["userId"];

			if ($row["userId"] == 1) {
				header("Location: bbadm/createPost.php");
			}
			else {
				header("Location: bbuser/");
			}
			
	    }
	} 
	else {
		 //echo "Error deleting record: " . mysqli_error($con);
	   header("Location: Login.php?error=loginfail");
	}
	
?>