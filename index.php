<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BANKING SERVICE</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>

<h1 class="heading">ONLINE BANKING SERVICE</h1>

<!-- Admin Login Panel -->




<div class="adminLogin" id="adminLogin">

<h2 id="ad">Admin Panel</h2>
<form class="" action="index.php" method="post">
  <label for="adminId">Admin ID :</label><br><br>
  <input id="adminID"type="text" name="adminID" placeholder="Admin ID"><br><br>

  <label for="adminPass">Admin Password :</label><br><br>
  <input id="adminPass"type="password" name="adminPass" placeholder="Admin Password"><br><br>

  <input id="adminSubmit"type="submit" name="" value="Login">

</form>

</div>


<!-- User Login Panel -->

<div class="userLogin">

<h2 id="us">User Panel</h2>
<form class="" action="User_Login.php" method="post">
  <label for="userId">Account Number:</label><br><br>
  <input id="userID"type="text" name="userID" placeholder="Account No"><br><br>

  <label for="userPass">User Password :</label><br><br>
  <input id="userPass"type="password" name="userPass" placeholder="User Password"><br><br>

  <input id="userSubmit"type="submit" name="" value="Login">

</form>

</div>



</div>

  </body>
</html>





<?php

include("conn.php");
  session_start();


$sql = "SELECT userId, Password FROM admins";
$result = mysqli_query($conn, $sql);

if (isset($_POST['adminID']) && isset($_POST['adminPass']))
{
	$pass=$_POST['adminPass'];

	$adminID=$_POST['adminID'];




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "Ac No:: " . $row["AcNo"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
		if($row['userId']==$adminID && $row['Password']==$pass){
			//echo ' Login Successful';

			//include("welcome.php");
			//mysqli_close($conn);
			//<a href="/path/to/next/page?variableName=variableValue" title="Link to next page">Link to next page</a>
			//$url = 'welcome.php';
    //$url .= '?id=$acno';

    //header('Location: '.$url);

			header("Location: adminPanel.html");
       /* Redirect browser */
			exit();
		}

    }

	echo ' <script>alert("Wrong user name or password!!")</script>';
  exit();
}
}


?>
