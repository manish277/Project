<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deposit</title>
    <link rel="stylesheet" href="Close_Account.css">
  </head>
  <body>
    <h1 class="heading">ONLINE BANKING SYSTEM</h1>
    <h1 id="ad"><u>Close Account</u></h1>

    <div class="manageAccount">


    <form class="" action="" method="post">

    <!-- <label for="amt"><h2>Enter Amount :</h2></label> -->


    <!-- <label for="card">Enter Card No. :</label><br> -->
    <input type="number" name="benAc" placeholder="A/c No." required><br><br>

    <!-- <input type="number" name="amt" placeholder="Enter Amount" required><br><br> -->

    <!-- <label for="pin">Enter Pin :</label><br> -->
    <!-- <input type="number" name="pin" placeholder="Debit Card Pin" required><br><br> -->

    <input id="sub" type="submit" name="closeAc" value="Close Account">

  </form>
</div>
  </body>
</html>



<?php
include("conn.php");
  session_start();

  // if (isset($_POST['amt']))
  //
	// $nBal=$_POST['amt'];

  if (isset($_POST['benAc']))

	$nAc=$_POST['benAc'];


  //
	// $identity = $_GET['id'];
  //  // echo $identity;
	// $myAc=(int)$identity;

  // $bal=$_GET['amt'];
  //$bal=(int)$nBal;
  // echo $nBal;
//  $benAc=(int)$nAc;
  // $nBal=12;


  if (isset($_POST['closeAc']))
{
//   $sql = "DELETE FROM `users` WHERE `users`.`AcNo` = $nAc";
// $result = mysqli_query($conn, $sql);

  	// $last_id = mysqli_insert_id($conn);
   header("Location: Del_Account.php.?id=$nAc"); /* Redirect browser */
      exit();
}
//
  // echo $myAc;
?>
