 <?php 

session_start();
$username="";

$email="";

$errors= array();

 $txtfname="";
 $txtlname="";
 $txtdob="";
 $txtcountry="";

 
   


if(isset($_POST["submit"])){

//connect to the database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');


 
$txtfname=$_POST["txtfname"];
$txtlname=$_POST["txtlname"];
$txtdob=$_POST['txtdob'];
$txtcountry=$_POST['txtcountry'];


//if there are no errors, save into database
$db=mysqli_connect('localhost', 'hoppee', ';xX-CUKm2(EP', 'olaniyi');

if (count($errors)==0) {

	$password=md5($password_1); //encrypt password before storing in  database(security)

$sql ="INSERT INTO payment(txtfname,txtlname,txtdob,txtcountry) VALUES('$txtfname','$txtlname','$txtdob','$txtcountry')";



if (mysqli_query($db, $sql)){
			$_SESSION['username'] = $username;
	$_SESSION['success']= "You are logged in";
		header("location: campbasic.php");
	}



}
}

?> 