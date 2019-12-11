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
}

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'),true);
$result = array();


function message_and_code($message, $code){
    $temp = array();
    $temp["message"] = $message;
    http_response_code($code);
    echo json_encode($temp);
}

switch ($method) {
    case 'GET':
    	$result['numberOfEntries'] = 0;
      echo print_r($_GET);
      #$tsql1 = "SELECT aid,password FROM [dbo].[Students] WHERE aid=".$_GET['username']."";
  }
