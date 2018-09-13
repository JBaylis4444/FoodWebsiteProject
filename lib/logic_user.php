<?php
/*if( !isset($_SESSION['username']) ) { 
	header("location: login.php"); 
}// Restricts outsiders to just hop on members page without signing up
*/
include 'food_ninja_frame.php'; //connects to database
include 'disclaimer.php';
echo food_ninja();

  $username= $_SESSION['username'];
  $query= "SELECT * FROM recipes R WHERE R.username="+$username;

  $stmt = $database->prepare('SELECT recipe_name, recipe_id FROM recipes WHERE username=?');
  $stmt->bind_param('s', $username);
  $stmt->execute();

  // $result= mysqli_query($database, $query);
  $stmt->bind_result($recipe_name, $recipe_id);

  echo "<h2>List of Recipes for ".$username."</h2>";
  echo "<div id='food_table'><table align='center'>"; //table of recipes for the user
  while($stmt->fetch()){  //while loop fetching each record from earlier query
      echo"<tr><td>";
      echo $recipe_name."</td>";   //displays current recipe name
      echo"<td><a href='edit.php?id=".$recipe_id."'>Update</a></td>"; //a link to edit.php for specific record
    echo "<td><a href='delete.php?id=".$recipe_id."'>Delete</a></td>"; //a link to delete.php for specific record
      echo"</tr>";
  }
  echo "</table></div>";
    /*while($row=mysqli_fetch_row($result)){
      echo "<tr><td>".$row['recipe_name']."</td>";
    }*/
    if( isset($_POST['insert']) ) { 
      //echo "<a href='add.php'>";
      header("location: /add.php"); 
    }
	 
?>