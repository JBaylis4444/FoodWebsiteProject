<?php 
if( isset($_SESSION['username']) ) { 
	header("location: index.php"); 
}
include 'food_ninja_frame.php'; //connects to database
echo food_ninja();
//checks here
	
  $recipe_id = $_GET['id'];
  $stmt = $database->prepare('DELETE FROM recipes WHERE recipe_id=?');
  $stmt->bind_param('i', $recipe_id);
  $stmt->execute();

  header("location: user.php"); //return to the user.php or list of recipes of the user still avaible for edit/delte
   ?>