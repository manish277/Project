<?php
include("conn.php");
  session_start();


	$identity = $_GET['id'];
  // echo $identity;
	$myAc=(int)$identity;

  // $bal=$_POST['amt'];
  $bal=$_GET['bal'];

  $nBal=(int)$bal;

  $nAc=$_GET['benAc'];

  $benAc=(int)$nAc;
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

}

 if($currbal>=$nBal){




$sql = "SELECT Balance FROM users WHERE AcNo=$myAc" ;

	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
	$currbal=$row['Balance'];

   // echo $currbal;

	$currbal=$currbal-$nBal;
}

  $sql = "UPDATE users SET Balance=$currbal WHERE AcNo=$myAc" ;
  //
  $result = mysqli_query($conn, $sql);

  $sql = "SELECT Balance FROM users WHERE AcNo=$benAc" ;

  	$result = mysqli_query($conn, $sql);
  	while($row = mysqli_fetch_assoc($result)) {
  	$hisBal=$row['Balance'];

     // echo $currbal;

  	$hisBal=$nBal+$hisBal;

}

// if (isset($_POST['depositBal']))
// {


  $sql = "UPDATE users SET Balance=$hisBal WHERE AcNo=$benAc" ;
//
 $result = mysqli_query($conn, $sql);


 $sql = "INSERT INTO `bank_details`.`{$myAc}` (Transaction,Type)  VALUES ( $nBal , 'DR' )";
 $result = mysqli_query($conn, $sql);

 $sql = "INSERT INTO `bank_details`.`{$benAc}`  (Transaction,Type) VALUES ( $nBal , 'CR' )";
 $result = mysqli_query($conn, $sql);


	 header("Location: Manage_Account.php.?id=$myAc"); /* Redirect browser */
	 		exit();

	//while($row = mysqli_fetch_assoc($result)) {
	//echo "<h2>Available Balance :  " . $row['Balance']. "</h2><br>";
	//}
// }
// }
}
else {
  echo 'Unsufficient Fund';
}


  ?>
