<?php 
include 'food_ninja_frame.php'; //connects to database
include 'disclaimer.php';
if(!isset($_SESSION['username'])) { 
  header("location: login.php"); 
}

echo food_ninja();
	$username= $_SESSION['username'];
	$query= "SELECT * FROM recipes R WHERE R.username=$username";
	$result = mysqli_query($database, $query);

	$recipe_nameERR = $ingredientsErr = $InstructionsErr = "";
  $missing_val = false;

  if(isset($_POST['insert'])){ //checking form stuff
    if (empty($_POST["recipe_name"])) {
      $missing_val = true;
      $recipe_nameERR = "Recipe name is required";
    } else {
    $recipe_name = test_input($_POST["recipe_name"]); // check if only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$recipe_name)) {
      $recipe_nameERR = "Enter a valid Recipe Name. Only letters and white space allowed"; 
      $missing_val = true;
    }
}
      
    if(empty($_POST["ingredients"])) {
      $ingredientsErr = "Ingredients Required";
      $missing_val = true;
  }
  if(empty($_POST["instructions"])) {
      $InstructionsErr =  "Instructions Required";
      $missing_val = true;
      }
      if($missing_val === false)//If all validation checks were passed then give a success message
     {  
    //$username = mysqli_real_escape_string($database, $_POST['username']);
    $recipe_name = mysqli_real_escape_string($database, $_POST['recipe_name']);
    $meal_time = $_POST['meal_time'];
    $ingredients = mysqli_real_escape_string($database, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($database, $_POST['instructions']);
    
    $insert_Query = "INSERT INTO recipes(recipe_name, meal_time, ingredients, instructions, username)VALUES('$recipe_name', '$meal_time', '$ingredients','$instructions', '$_SESSION[username]')";
    
    $insert_Result = mysqli_query($database, $insert_Query);  
    $_SESSION['message'] = "Data Inserted.";
    
  }
    //return success
    else{
      $_SESSION['message1'] = "Error inserting.";
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