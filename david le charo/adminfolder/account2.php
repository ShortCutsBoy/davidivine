<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: login.php");	exit();
	}

  echo "clients files here:";

?>
<html>
<link rel="stylesheet" href="styles.css">
  
  
  <br>
  
<a href="/index.php">home page</a>
  <br>

<a href="index.php">live chat</a>
<br>

  <a href="?logout">Log out</a>	

</html>

