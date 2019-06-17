<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "PTlecturerApp";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// connect connection
if (!$conn) {
	die ("connection error:" . mysqli_connect_error());
}else{
	//echo "DB connection successful !!!";
}

?>