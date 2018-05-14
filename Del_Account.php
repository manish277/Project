<?php
include("conn.php");
  session_start();
$identity = $_GET['id'];
// echo $identity;
$myAc=(int)$identity;

$sql = "DELETE FROM `users` WHERE `users`.`AcNo` = $myAc";
$result = mysqli_query($conn, $sql);

$sql1="DROP TABLE `bank_detail`.`{$myAc}`";
$result = mysqli_query($conn, $sql1);

header("Location: adminPanel.php"); /* Redirect browser */
 exit();

?>
