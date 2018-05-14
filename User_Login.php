<?php

include("conn.php");
  session_start();


$sql = "SELECT AcNo, Password FROM users";
$result = mysqli_query($conn, $sql);

if (isset($_POST['userID']) && isset($_POST['userPass']))
{
	$pass=$_POST['userPass'];

	$userID=$_POST['userID'];

  // echo $pass;




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "Ac No:: " . $row["AcNo"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
		if($row['AcNo']==$userID && $row['Password']==$pass){
			//echo ' Login Successful';

			//include("welcome.php");
			//mysqli_close($conn);
			//<a href="/path/to/next/page?variableName=variableValue" title="Link to next page">Link to next page</a>
			//$url = 'welcome.php';
    //$url .= '?id=$acno';

    //header('Location: '.$url);

			header("Location: Manage_Account.php.?id=$userID"); /* Redirect browser */
			exit();
		}

    }

	echo ' <script>alert("Wrong user name or password!!")</script>';
	//header("Location:index.php");
	exit();
}
}


?>
