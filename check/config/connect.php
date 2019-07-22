<?php

$sername = "127.0.0.1";
$uname = "root";
$pass = "";
$dbname = "check";

$con = mysqli_connect($sername,$uname,$pass,$dbname);
		mysqli_set_charset($con,"utf8");
if (!$con) {
	  
	  die("Connection failed: " . mysqli_connect_error());
}

else {

	//echo "Success";
}

?>