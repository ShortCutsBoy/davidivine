<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: loginadmin.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: loginadmin.php");	exit();
	}


  include 'register.php'

?>
<html><li><a href="/index.php">home page</a></li></html>
<html><li><a href="index.php">live chat</a></li></html>