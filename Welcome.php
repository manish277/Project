<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="Welcome.css">
  </head>
  <body>
    <h1 class="heading">ONLINE BANKING SYSTEM</h1>


  </body>
</html>


<div class="welcomeScreen">
<div class="div2">

<?php

  include("conn.php");
  session_start();
  //include("login.php");


	$identity = $_GET['id'];

	//echo $identity;


	$id=(int)$identity;

	$sql = "SELECT FirstName,Password,Balance FROM users WHERE AcNo=$id" ;

	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)) {
	echo "<h1>Welcome to Your Account:  Mr. " .$row['FirstName']. "</h1><br>";
	echo '<h2>Your A/c No. is : '.$identity .   " <br> your Password is : ".$row['Password'] .' </h2><br>' ;
	echo "<h2>Available Balance :  " . $row['Balance']. "</h2><br>";
	}


  $sql = "CREATE TABLE `bank_detail`.`{$identity}` (ID INT NOT NULL AUTO_INCREMENT, Transaction INT(10), Type varchar(10), PRIMARY KEY(ID))";
  $result = mysqli_query($conn, $sql);


  //echo' <h3>Use the above credentials to login into your Personal Banking Account<h3>';

  // header("Location: login.php"); /* Redirect browser */

			//exit();




?>
<h3 id="info">Use the above credentials to login into your Personal Banking Account<h3>

<input class="btn" type="button" name="" value="Home" onclick="window.location.href='AdminPanel.php'">
</div>

</div>
