<?php 
include 'food_ninja_frame.php';
include 'disclaimer.php';
echo food_ninja();

?>

	<p></p>
	<h2 id ="page_title"> </h2>
	
	<form action="" id="move_to_center"> 
		<select name="developers" onchange="showDeveloper(this.value)">
			<option value="">Select a developer:</option>
			<option value="Ayub">Ayub Khan</option>
			<option value="Joshua">Joshua Baylis</option>
			<option value="Lavanya">Lavanya Bandla</option>
			<option value="Viraaj">Viraaj Patel</option>
		</select>
	</form>
	<br>
	<!--<div id="txtHint">Customer info will be listed here...</div> -->
	<div class="dev_table">
	<table>
		<tr>
			<td><div class="dev_element">Firstname</div></td>
			<td ><p id ="firstname"></p></td>
		</tr>
		<tr>
			<td><div class="dev_element">Lastname</div></td>
			<td ><p id ="lastname"></p> </td>
		</tr>
		<tr>
			<td><div class="dev_element">Job</div></td>
			<td ><p id ="job"></p></td>
		</tr>
		<tr>
			<td><div class="dev_element">School</div></td>
			<td ><p id="school"></p></td>
		</tr>
		<tr>
			<td><div class="dev_element">Major</div></td>
			<td ><p id ="major"></p></td>
		</tr>
	</table>
	</div>
	
	
	</br>
	<div class="xmltag"><p><button onclick="Back()">Back</button></p></div>
	
	<p></br></p>

	<div class="button2">
	<a href="#top">Go to the top</a>
	</div>
	<?php echo disclaimer(); ?>

	</body>
</html>