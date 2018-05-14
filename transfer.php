<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deposit</title>
    <link rel="stylesheet" href="deposit.css">
  </head>
  <body>
    <h1 class="heading">Bank of Durgapur</h1>
    <h1 id="ad">Deposit Amount</h1>

    <div class="manageAccount">


    <form class="" action="" method="post">

    <!-- <label for="amt"><h2>Enter Amount :</h2></label> -->


    <!-- <label for="card">Enter Card No. :</label><br> -->
    <input type="number" name="benAc" placeholder="Beneficiary A/c" required><br><br>

    <input type="number" name="amt" placeholder="Enter Amount" required><br><br>

    <!-- <label for="pin">Enter Pin :</label><br> -->
    <!-- <input type="number" name="pin" placeholder="Debit Card Pin" required><br><br> -->

    <input id="sub" type="submit" name="depositBal" value="Transfer">

  </form>
</div>
  </body>
</html>



<?php
include("conn.php");
  session_start();

  if (isset($_POST['amt']))

	$nBal=$_POST['amt'];

  if (isset($_POST['benAc']))

	$nAc=$_POST['benAc'];



	$identity = $_GET['id'];
   // echo $identity;
	$myAc=(int)$identity;

  // $bal=$_GET['amt'];
  //$bal=(int)$nBal;
  // echo $nBal;
//  $benAc=(int)$nAc;
  // $nBal=12;


  if (isset($_POST['depositBal']))
{
   header("Location: Subtract_Money.php.?id=$myAc & bal=$nBal & benAc=$nAc"); /* Redirect browser */

  echo ' <script>alert("Transection has been compleated!!")</script>';
      exit();
}
//
  // echo $myAc;
?>
