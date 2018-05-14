<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deposit</title>
    <link rel="stylesheet" href="deposit.css">
  </head>
  <body>
    <h1 class="heading">ONLINE BANKING SERVICE</h1>
    <h1 id="ad">Deposit Amount</h1>

    <div class="manageAccount">


    <form class="" action="" method="post">

    <!-- <label for="amt"><h2>Enter Amount :</h2></label> -->
    <input type="number" name="amt" placeholder="Enter Amount" required><br><br>

    <!-- <label for="card">Enter Card No. :</label><br> -->
    <!-- <input type="number" name="card" placeholder="Card Number" required><br><br> -->

    <!-- <label for="pin">Enter Pin :</label><br> -->
   <!--  <input type="number" name="pin" placeholder="Debit Card Pin" required><br><br> -->

    <input id="sub" type="submit" name="depositBal" value="Deposit">

  </form>
</div>
  </body>
</html>



<?php
include("conn.php");
  session_start();

  if (isset($_POST['amt'])){

	$bal=$_POST['amt'];

$identity = $_GET['id'];

	$myAc=(int)$identity;

  $nBal=(int)$bal;
  
}

  if (isset($_POST['depositBal']))
{
   header("Location: Add_Money.php.?id=$myAc & bal=$nBal"); /* Redirect browser */
      exit();
}
//
  // echo $myAc;
?>
