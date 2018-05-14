<?php
include("conn.php");
  session_start();



  // $pass=



	$identity = $_GET['id'];
  // echo $identity;
	$myAc=(int)$identity;

  // $bal=$_POST['amt'];
  $bal=$_GET['bal'];

  $nBal=(int)$bal;
  $tBal=$nBal;
  //   echo $nBal;
// echo $myAc;
	// $sql = "SELECT AcNo from users";
	// //"UPDATE users SET Balance=5000 WHERE AcNo=$mybal";
	// $result = mysqli_query($conn, $sql);

// if (isset($_POST['amt']) && isset($_POST['card']) && isset($_POST['pin']))
// {
// echo $myAc;
	// $amt=$_POST['amt'];
  //echo $amt;
  // $nAmt=(int)$amt;

// echo $myAc;

$sql = "SELECT Balance FROM users WHERE AcNo=$myAc" ;

	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
	$currbal=$row['Balance'];

   // echo $currbal;

	$nBal+=$currbal;
	}

// if (isset($_POST['depositBal']))
// {
   $sql = "UPDATE users SET Balance=$nBal WHERE AcNo=$myAc" ;
//
	$result = mysqli_query($conn, $sql);


  $sql = "INSERT INTO `bank_detail`.`{$myAc}` (Transaction,Type) VALUES ( $tBal , 'CR' )";
  $result = mysqli_query($conn, $sql);

	 header("Location: Manage_Account.php.?id=$myAc"); /* Redirect browser */
	 		exit();

	//while($row = mysqli_fetch_assoc($result)) {
	//echo "<h2>Available Balance :  " . $row['Balance']. "</h2><br>";
	//}
// }
// }

  ?>
