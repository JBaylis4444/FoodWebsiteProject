<?php
include 'food_ninja_frame.php';
include 'disclaimer.php';
//require_once('lib/default.php'); 
echo food_ninja();
$fnameErr = $lnameErr = $messageErr = $emailErr = $genderErr = "";
$fname = $lname = $email = $gender = $message = $result = "";
$success = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST")//It takes the values eneterd in the form and processes them.
    
    { 
      $missing_val = false;
    //All conditions to check if the values entered were valid or not.
    if (empty($_POST["fname"])) {
      $missing_val = true;
      $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if first name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Enter a valid First Name. Only letters and white space allowed"; 
      $missing_val = true;
    }
  }
    if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
    $missing_val = true;
  } else {
    $lname = test_input($_POST["lname"]);
    // check if last name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Enter a valid Last Name. Only letters and white space allowed"; 
      $missing_val = true;
    }
  }
  //check if there is a message
    if (empty($_POST["message"])) {
    $message = "Message Required";
    $missing_val = true;
}
  
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $missing_val = true;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $missing_val = true;
    }
  }
  //check if gender is selected
    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $missing_val = true;
  } 

    if ($missing_val === false)//If all validation checks were passed then give a success message
    {
    //return success
    $_SESSION['message'] = "Message has been sent.";
  }
   }
   
    
      
  function test_input($data) //removes all special characters an spaces so we could validate the data entered into the form
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
  return $data;
}
 
    ?>