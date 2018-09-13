<?php 
include 'food_ninja_frame.php';
include 'disclaimer.php';
//require_once('lib/default.php'); 
echo food_ninja();

?>

	<h2> Welcome! </h2>
	<p> Here is a glimpse of what this website is about. </p>
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="1.jpg">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="2.jpg">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="3.jpg">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="4.jpg">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
<script>
  showSlides();
</script>
	<p> This is a website made for people to show their expertise in food to the world! If you know how to cook, <a href="about_us.php">Register</a> with us and show the world the talent you got! For the people who are just looking for some recipee's please go to this link <a href="food.php">FOOD</a>, it is also located on the menu bar on the top. Feel free to ask us about any question or any recipee you want to see in our food section by simply sending us a message using this page <a href="about_us.php">Contact Us.</a>
	</p>
	
	<?php if(isset($_SESSION['username'])) { ?>
	<div class="commands">
	<a href="logout.php">Logout</a>
	</div>
	<?php } ?>
  </br>
  <b/r>
  </br>
	<div class="button2">
	<a href="#top">Go to the top</a>
	</div>
  <?php echo disclaimer(); ?>
  </body>
</html>