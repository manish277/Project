<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Account</title>
    <link rel="stylesheet" href="Admin_Manage.css">
  </head>
  <body>
    <h1 class="heading">ONLINE BANKING SERVICE</h1>
    <h1 id="ad">Manage User Account</h1>

    <div class="manageAccount">


    <form class="" action="" method="post">

    <!-- <label for="amt"><h2>Enter Amount :</h2></label> -->


    <!-- <label for="card">Enter Card No. :</label><br> -->
    <input type="number" name="userAc" placeholder="User A/c No." required><br><br>


    <!-- <label for="pin">Enter Pin :</label><br> -->
    <!-- <input type="number" name="pin" placeholder="Debit Card Pin" required><br><br> -->

    <input id="sub" type="submit" name="manage" value="Manage Account">

  </form>
</div>
  </body>
</html>



<?php

// include("conn.php");
//   session_start();
//
// 	$userAc=$_POST['userAc'];
//   $nuserAc=(int)$userAc

if (isset($_POST['userAc']))

$userAc=$_POST['userAc'];
//
if (isset($_POST['manage'])){

		header("Location: Manage_Account.php.?id=$userAc"); /* Redirect browser */
			exit();
		 }




?>
