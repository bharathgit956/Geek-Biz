<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php

$connectionInfo = array("UID" => "bkk48", "pwd" => "Cse541project", "Database" => "tutorsandstudents-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:studentsandtutors.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);



$city = $_POST['city'];
$country = $_POST['country'];


$aid = $_POST['username'];
$atype = $_POST['type'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['eaddress'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$wage = $_POST['wage'];
$edlevel = $_POST['edlevel'];
$zipcode = $_POST['zip'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$password = $_POST['password'];



$tsql1= "insert into Accounts values('".$aid."','".$atype."','".$fname."',".$lname.",'".$email."','".$phone."','".$dob."',".$gender.",".$wage.",".$edlevel.", ".$zipcode.",".$address1.",
                                          ".$address2.",,".$password.")";
$insertReview = sqlsrv_query($conn, $tsql1);
if(!$insertReview){
echo "<script>
	alert('Some error occured');
	</script>";
  } 
  echo "<script>
  alert('User ".$fullname." added.');
  </script>";
  }
?>
</body>
</html>