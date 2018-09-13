<?php 
if( isset($_SESSION['username']) ) { 
	header("location: index.php"); 
}
include 'food_ninja_frame.php'; //connects to database
echo food_ninja();
  $recipe_id=$_GET['id']; //set recipe_id to the id from the url

  $stmt = $database->prepare('SELECT recipe_name, meal_time, ingredients, instructions FROM recipes WHERE recipe_id=?'); //prepared statment to aviod fatal errors
  $stmt->bind_param('i', $recipe_id); //set recipe_id to specific record from $_GET
  $stmt->execute(); //get the specific record
  $stmt->bind_result($recipe_name, $meal_time, $ingredients, $instructions);
  $stmt->fetch();
  $stmt->free_result();
  if (isset($_POST['edit'])){ //if the form is updated by button
    $recipe_name = $_POST['recipe_name']; //set variable to those of the form
    $meal_time = $_POST['meal_time'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    //$recipe_id=$_GET['id'];
    //$stmt was cleared so can reuse to prepare update query
    $stmt = $database->prepare('UPDATE recipes SET recipe_name=?,meal_time=?,ingredients=?,instructions=? WHERE recipe_id=?'); 
    $stmt->bind_param('ssssi', $recipe_name, $meal_time, $ingredients, $instructions, $recipe_id);
    //print_r($recipe_id);exit();
    $stmt->execute(); //updates the table

    /*$query= "UPDATE recipes SET recipe_name=$recipe_name,meal_time=$meal_time,ingredients=$ingredients,instructions=$instructions WHERE recipe_id=$recipe_id";
    $result = mysqli_query($database, $query);*/

    if(mysqli_affected_rows($database) > 0){
        echo 'Data Updated';
        header("location: user.php");
    }else{
        echo 'Error Updating. Please try again.';
     }
  }
  echo "<h2>Updating Recipe ".$recipe_id."</h2>";
  //form the same as the add, with values from selected query by recipe_id
  ?>
	<form action="edit.php?id=<?php echo $recipe_id; ?>" method="post">
    <table align="center">
      <tbody>
        <tr>
            <td><b>Recipe Name: </b></td>
            <td><input name="recipe_name" type="text" size="30" value=<?php echo $recipe_name; ?> required/></td>
        </tr>
    <tr>
            <td><b>Time of Meal: </b></td>
            <td><select name="meal_time"><option value="breakfast">Breakfast</option>
                  <option value="lunch">Lunch</option>
                  <option value="dinner">Dinner</option>
        </select>
        </tr>
        <tr>
            <td><b>Ingredients: </b></td>
            <td><textarea name="ingredients" type="text" rows="5" cols="29"><?php echo $ingredients; ?></textarea></td>
        </tr>
        <tr>
            <td><b>Instructions: </b></td>
            <td><textarea name="instructions" type="text" rows="5" cols="29"><?php echo $instructions; ?></textarea></td>
        </tr>
    </tbody>
    </table>
    <div><center>
    <br>
    <input type="submit" name="edit" value="Update">
    </center></div>
  </form>

  <div class="commands">
	<a href="logout.php">Logout</a>
	</div>
	<br>
	<br>
	<br>	
	<div class="button2">
	<a href="#top">Go to the top</a>
	</div>
  </body>
 </html>