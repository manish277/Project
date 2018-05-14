<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Account</title>
    <link rel="stylesheet" href="Manage_Account.css">
  </head>
  <body>
<h1 class="heading">ONLINE BANKING SERVICE</h1>

<h1 id="ad">Manage Account</h1>


<div class="manageAccount">


<form class="" action="" method="post">
  <input type="submit" name="deposit" value="Deposit">

  <input type="submit" name="transfer" value="Transfer">
  <input type="submit" name="miniStatement" value="Mini Statement">
  <input type="submit" name="details" value="Details">
  <!-- <input type="button" name="Account_Details" value="Account Details">
  <input type="button" name="Deposit" value="Deposit">
  <input type="button" name="Transfer" value="Transfer">
  <input type="button" name="Mini_Statement" value="Mini Statement"> -->
  <input id="logOut" type="button" name="logOut" value="Log Out" onclick="window.location.href='index.php'">
</form>



</div>


  </body>
</html>



<?php

include("conn.php");
  session_start();
  //include("login.php");


	$identity = $_GET['id'];

	//echo $identity;


	$myAc=(int)$identity;

	// $sql = "SELECT FirstName,Balance FROM users WHERE AcNo=$myAc" ;
  //
	// $result = mysqli_query($conn, $sql);
  //
	// while($row = mysqli_fetch_assoc($result)) {
	// echo "<h1>Welcome to Your Account , Mr. " .$row['FirstName']. "</h1><br>";
	// echo '<h2>Your A/c No. is : ' .$identity . ' </h2><br>' ;
	// echo "<h2>Available Balance :  " . $row['Balance']. "</h2><br>";
	// }


// 	function deposit(){
//    echo "The select function is called.";
// }
//
//
//
	if (isset($_POST['deposit']))
{
   header("Location: deposit.php.?id=$myAc"); /* Redirect browser */
			exit();
}
//
if (isset($_POST['transfer']))
{
   header("Location: transfer.php.?id=$myAc"); /* Redirect browser */
			exit();
}


if (isset($_POST['miniStatement']))
{
   header("Location: Transaction.php.?id=$myAc"); /* Redirect browser */
			exit();
}
//
//
//
	if (isset($_POST['details']))
{

	//sleep(3);
   header("Location: details.php.?id=$myAc"); /* Redirect browser */
			exit();

}


 ?>
