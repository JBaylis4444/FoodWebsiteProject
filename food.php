<?php 
include 'food_ninja_frame.php'; //connects to database
echo food_ninja();
	$username= $_SESSION['username'];
	$query= "SELECT * FROM recipes R";
	$result= mysqli_query($database, $query);
	echo "<h2>List of Recipes</h2>";
	echo "<div id='food_table' style='clear:both;'>";
	echo "<table align='center'>";
	echo "<tr><td>Recipe: </td><td>Time of Meal: </td><td>Ingredients: </td><td>Instructions: </td><td>Recipe By: </td><br>";
	while($row= mysqli_fetch_assoc($result)){
	    echo "<tr><td>";
	    echo $row['recipe_name']."</td><td>";
	    echo $row['meal_time']."</td><td>";
	    echo $row['ingredients']."</td><td>";
	    echo $row['instructions']."</td><td>";
	    echo $row['username']."</td>";	    
	    echo "</tr>";
	}
	echo "</table><br><br></div>";
   	if(isset($_SESSION['username'])) {
	?>
	<div class="commands">
	<a href="logout.php">Logout</a>
	</div>
	<?php } ?>
	<br>
	<br>
	<br>	
	<div class="button2">
	<a href="#top">Go to the top</a>
	</div>
</body>
</html>