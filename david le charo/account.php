<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: login.php");	exit();
	}
  
  $fname = $_SESSION["user"];
  $file=fopen("{$fname}.txt","a+") or exit("Unable to open file!");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Something posted
  
    if (isset($_POST['endfile'])) {
      $filename = "texts/{$fname}.txt";

      if (file_exists($filename)) {
        echo 'you will have to pay to save another file';
      }
      else {
        rename("{$fname}.txt", "texts/{$fname}.txt");
}
    
  }
}
    
    
    $file=fopen("{$fname}.txt","a+") or exit("Unable to open file!");

    $old_content = file_get_contents("{$fname}.txt");
    
    $text = $_POST["text"];

fwrite($file, $text."\n");
fclose($file);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="account.css">
	<title>User account</title>
</head>
<body>

	<div class="content">
		<header>
			<h2>Welcome <?php echo $_SESSION['user']; ?><h2>
			<a href="?logout">Log out</a>	
		</header>

		<main>
			<form action="account.php" method="post" style="">
    <input type="text" name="text" style="background-color: #fff0a4;" placeholder="Request Here: ex. can you gather email and password of jhon ..." >
        <hr>
        <br>
        <hr>
        <br>
        <hr>
        <br>
        <hr>
        <br>
        <hr>
        <br>
        <hr>
        <br>
        <hr>
        <br>
        <hr>
        <br>
    <input type="submit" style="margin-bottom: 30px;">
    <input type="submit" name="endfile" value="save and finish the file" style="margin-bottom: 30px;">

      </form>

    
    </p>
   <?
$file = file("{$fname}.txt");
foreach($file as $i => $line)
{
    foreach(explode("\t",$line) as $num)
    {
        $num = trim($num);
        if($num!='')
        {
            $a[$i][] = $num;
        }
    }
}
echo '<pre>';


//full rows examples
foreach(file("{$fname}.txt") as $line) {
    // do stuff here
  echo $line;
  
}






?>
		</main>
	</div>

</body>
</html>
