<?php 
ini_set('display_errors','1');
session_start();
require_once("lib/connectDB.php");


function food_ninja()
{
	?>
<!DOCTYPE html>
<html>
  <head>

    <title>334ProjectGroupS_(2017W 03-60-334)</title>
     <script src="xml.js" type="application/javascript"></script>
    <script type="text/javascript" src="slides.js"></script>
    <!--<object id="yoursvg" data="group_S.svg" type="image/svg+xml" ></object>-->
    <link rel="stylesheet" type="text/css" href="default_layout.css" />
    <script src="developers.js" type="application/javascript"></script>
  </head>
  <body>
	
		<header>
				<h1>Food Ninja</h1>
		</header>
		
		
	<div class = "main_page_menu">
		
		<nav>
			<ul>
				<li class= "nav-center"><a href="index.php"><span>Home</a></span></li>
				<?php if(isset($_SESSION["username"])) { ?>
					<li class= "nav-center"><a href="user.php"><span>
						<?php echo $_SESSION["username"]; ?>
					</span></a></li>
				<?php } else { ?>
					<li class= "nav-center"><a href="login.php"><span>Login</span></a></li>
				<?php } ?>
				<li class= "nav-center"><a href="food.php"><span>FOOD</span></a></li>
				<li class= "nav-center"><a href="about_us.php"><span>Contact Us</span></a></li>
			</ul>
		</nav>
	</div>

<?php } ?>