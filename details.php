<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account Details</title>
    <link rel="stylesheet" href="details.css">
  </head>
  <body>
    <h1 class="heading">WELCOME TO ONLINE BANKING SYSTEM</h1>
    <h1 id="ad"><u>Account details</u></h1>
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

	$sql = "SELECT FirstName,LastName,Password,Balance FROM users WHERE AcNo=$id" ;

	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)) {
	echo "<h1>Full Name : " .$row['FirstName']. " ".$row['LastName']."</h1><br>";
	echo '<h1>A/c No. : '.$identity .' </h1><br>' ;
	echo "<h1>Available Balance :  " . $row['Balance']. "</h1><br>";
	}

  //echo' <h3>Use the above credentials to login into your Personal Banking Account<h3>';

  // header("Location: login.php"); /* Redirect browser */

			//exit();


    //   if (isset($_POST['back']))
    // {
    //    header("Location: Manage_Account.php.?id=$id"); /* Redirect browser */
    // 			exit();
    // }

?>

<!-- <input type="button" name="back" value="Back"> -->
</div>

</div>
