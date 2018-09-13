<?php

session_start();
session_unset();
session_destroy();
session_unset($_SESSION['username']);
//You are now logged out
$_SESSION['message'] = "You are now logged out.";
header("location: login.php");
exit();
?>

