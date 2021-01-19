<?php


$username="";

$email="";

$errors= array();

//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//if the registration button is clicked 

if (isset($_POST['register'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1= $_POST['password_1'];
	$password_2 = $_POST['password_2'];



	//ensure that form fields are filled properly
	if(empty($username)){

		array_push($errors,"Username is required");//add error to errors array
	}
if(empty($email)){

		array_push($errors,"Email is required");//add error to errors array
	}

if(empty($password_1)){

		array_push($errors,"Password is required");//add error to errors array
	}

if(empty($password_2)){

		array_push($errors,"Password two is required");//add error to errors array

}
if($password_1 != $password_2){
array_push($errors, "the two password does not match");

}



if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

	$sql ="INSERT INTO register(username,email,password_1,password_2) VALUES('$username','$email','$password_1','$password_2')";

	
 mysqli_query ($db, $sql);
	$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
	header('location: account.php');


}

}

//log user in from login page




if(isset($_POST['login'])){
	//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');
//if the registration button is clicked 

	$username= $_POST['username'];
	
	$password_1= $_POST['password_1'];




//ensure that form fields are filled properly
	if(empty($username)){

		array_push($errors,"username is required");//add error to errors array
	}
if(empty($password_1)){

		array_push($errors,"password is required");//add error to errors array
	}

	if (count($errors)==0) {
		

		$password_1=md5($password_1);//encrypt password before comparing with the one from database

		$query="SELECT username, password_1, id FROM register WHERE username='$username' AND password_1='$password_1'";
		$results = mysqli_query($db, $query);



		if (mysqli_num_rows($results)> 0) {
			
			$_SESSION['username'] = $username;
	        $_SESSION['success']= "you are now logged in";

			header("Location: account.php");
			}
	
		
			}
	
	}







//logout

if (isset($_GET['logout'])) {

	session_destroy();
	unset($_SESSION['username']);
	header("location:login.php");

	}

?>

