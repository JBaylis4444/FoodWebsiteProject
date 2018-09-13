<?php


include 'food_ninja_frame.php';
include 'disclaimer.php';
//require_once('lib/default.php'); 
echo food_ninja();
//Connect to Database



if(isset($_POST['register'])){
  //extratcting data from the form and setting it equal to the data base entities 
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
    $password2 = mysqli_real_escape_string($database, $_POST['password2']);
    $usersql= "SELECT * FROM Users WHERE username='$username'";//query for selecting the username from the form and if it matches any of the usernames in the database.
    $emailsql= "SELECT * FROM Users WHERE email='$email'";//query for selecting the email from the form and if it matches any of the emails in the database.
    $result = mysqli_query($database, $usersql);//this is used in the the testing of username that if it already exists condition below.
    $result2 = mysqli_query($database, $emailsql);//this is used in the the testing of email that if it already exists condition below.
    $email_inp  = test_input($_POST["email"]); //This removes all spaces from and special characters from email that the user has entered
    

    if((mysqli_num_rows($result) != 1) AND (mysqli_num_rows($result2) != 1))//This condition checks if the user name and email already exists to stop user from signing up with the same data.
  {
if(($password == $password2) AND (filter_var($email_inp, FILTER_VALIDATE_EMAIL)))//This condition checks if the passwords match and the email address is valid or not
  {
      //create account on the website
        $password = md5($password); // encrypt password for security pursposes
        
        $sql="INSERT INTO Users(username, email, password) VALUES('$username', '$email','$password')";//query for inserting the user info to the db.
        mysqli_query($database, $sql);//inserting data to the database.
        $_SESSION['username'] = $username;
        header("location: user.php");//take user to home page
     }    else{
          $_SESSION['message'] = "Passwords do not match or the email is not valid.";//Validation check stops from signing up
        }
  } else{
      $_SESSION['message'] = "The username or email already exists.";//Validation check stops from signing up
    }
  

}

function test_input($data) //Removes all special characters and spaces in text to help validate it.
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
  return $data;
}


?>

<h2> Register To our World </h2>
<?php 
  if (isset($_SESSION['message'])) {
    echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
  }
?><!--This condition is to show the correct error message on the page that I listed in the php could above -->