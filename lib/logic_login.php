<?php 

//Connect to Database
if( isset($_SESSION['username']) ) { 
	header("location: index.php"); 
}
include 'food_ninja_frame.php'; 
include 'disclaimer.php';
echo food_ninja();

if(isset($_POST['log_in'])){
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
	
	$password = md5($password); //because password was hashed during signup so decrypt it.
	$sql= "SELECT * FROM Users WHERE username='$username' AND password = '$password'";//check and extract the record of that user.
	$result = mysqli_query($database, $sql);//run the sql query in the database
	if(mysqli_num_rows($result) == 1)//check for the username match and compare the password so user can log in otherwise give an error message.
	{
		$_SESSION['message'] = "You are now logged in.";
		$_SESSION['username'] = $username;
		header("location: user.php");
	}else{
		$_SESSION['message'] = "Username/Password does not exist";
	}
}

?>

<h2> Login to our World </h2>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>