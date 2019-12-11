<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$connectionInfo = array("UID" => "bkk48", "pwd" => "Cse541project", "Database" => "tutorsandstudents-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:geekbiz.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
// Create connection
//$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn) {
	echo "<script>
	 alert('Connection failed');
	 </script>";
} else {
  echo "<script>
     alert ('Connection passed');
     </script>";
}
