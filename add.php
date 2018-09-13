<?php require_once('lib/logic_add.php'); ?>
	<html>
	<head><title>Add Recipe Page</title></head>
	<body>
	<h2> Welcome FOODIE <?php echo $_SESSION['username']; ?> </h2>
  <?php
  if (isset($_SESSION['message1'])) {
    echo "<div id='error_msg'>".$_SESSION['message1']."</div>";
    unset($_SESSION['message1']);
  }elseif (isset($_SESSION['message'])) {
    echo "<div id='error_msg2'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
  }
?>

	<form action="add.php" method="post">
		<table align="center">
    	<tbody>
        <tr>
            <td><b>Recipe Name: </b></td>
            <td><input name="recipe_name" type="text" size="30" placeholder="Recipe Name" required/></td>
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
            <td><textarea name="ingredients" type="text" rows="5" cols="29" placeholder="Ingredients"></textarea></td>
        </tr>
        <tr>
            <td><b>Instructions: </b></td>
            <td><textarea name="instructions" type="text" rows="5" cols="29" placeholder="Step by Step"></textarea></td>
        </tr>
    </tbody>
    </table>
    <div><center>
    <br>
    <div class="button">
    <input type="submit" name="insert" value="Add">
    <div class="xmltag"><p><button onclick="Back()">Back</button></p></div>
    </center></div></div>
	</form>
	<div class = "commands">

	<a href="logout.php">Logout</a>
	</div>
	<br>
	<br>
	<br>
	<div class="button2">
	<a href="#top">Go to the top</a>
	</div>
  <?php echo disclaimer(); ?>
</body>
</html>