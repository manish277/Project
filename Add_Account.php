
<?php
  include("conn.php");
  session_start();


if (isset($_POST['bal']) && isset($_POST['fName']) && isset($_POST['lName']))
{
	$bal=$_POST['bal'];

	$fname=$_POST['fName'];

	$lname=$_POST['lName'];

  $pass=mt_rand(1000,100000);

$sql = "INSERT INTO users (FirstName, LastName, Balance, Password)
VALUES ('$fname', '$lname', '$bal', $pass)";

if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
  //echo $last_id;
    //echo "Account created successfully. Last inserted ID is: " . $last_id;
	header("Location: Welcome.php?id=$last_id"); /* Redirect browser */
			//exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add a New Account</title>
    <link rel="stylesheet" href="Add_Account.css">
  </head>
  <body>
    <h1 class="heading">ONLINE BANKING SERVICE</h1>
    <h1 id="ad">Add a New Account</h1>

    <div class="createAccount">



    <form class="" action="Add_Account.php" method="post">
      <label for="fName">Full Name :</label><br><br>
      <input id="fName"type="text" name="fName" placeholder="First Name" required><br><br>

      <label for="lName">Last Name :</label><br><br>
      <input id="lName"type="text" name="lName" placeholder="Last Name"><br><br>

      <label for="bal">Balance :</label><br><br>
      <input id="bal"type="text" name="bal" placeholder="Balance"><br><br>

      <input id="createAccount"type="submit" name="" value="Create Account">

    </form>
    <h3>Account Number and Password will be generated automatically..</h3>
    </div>

  </body>


</html>
