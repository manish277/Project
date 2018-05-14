





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="Welcome.css">
  </head>
  <body>
    <h1 class="heading"> ONLINE BANKING SYSTEM </h1>


  </body>
</html>


<div class="welcomeScreen">
<div class="div2">

  <?php

  include("conn.php");
    session_start();

    $identity = $_GET['id'];

    //echo $identity;


    $myAc=(int)$identity;

    // $myAc=50;
    $limit=10;

// $tn=`{$myAc}`
//   $sql = "SELECT * FROM 'bank_details'.'{$tn}'";
//   $result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `bank_details`.`{$myAc}` ORDER BY ID DESC LIMIT 10 ";
$result = mysqli_query($conn, $sql);

  // if (isset($_POST['userID']) && isset($_POST['userPass']))
  // {
  //  $pass=$_POST['userPass'];
  //
  //  $userID=$_POST['userID'];
  //
  //   // echo $pass;
  // if (mysqli_num_rows($result) > 0) {
      // output data of each row

      echo nl2br("\n\n") ;

      while($row = mysqli_fetch_assoc($result)) {
          //echo "Ac No:: " . $row["AcNo"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
      // if($row['AcNo']==$userID && $row['Password']==$pass){
        //echo ' Login Successful';
        echo $row['Transaction']."  ".$row['Type'].nl2br("\n\n") ;

        //include("welcome.php");
        //mysqli_close($conn);
        //<a href="/path/to/next/page?variableName=variableValue" title="Link to next page">Link to next page</a>
        //$url = 'welcome.php';
      //$url .= '?id=$acno';

      //header('Location: '.$url);

        // header("Location: Manage_Account.php.?id=$userID"); /* Redirect browser */
        // exit();
      // }

      }

    // echo 'Wrong Username or Password';
  // }



  ?>

<!-- <h3 id="info">Use the above credentials to login into your Personal Banking Account<h3> -->

<!-- <input class="btn" type="button" name="home" value="Home" onclick="window.location.href='Manage_Account.php'"> -->
</div>

</div>
