<?php 

$sname = "localhost";
$uname = "omarbendjelloun_user";
$password = "Z-Bxp7jkf{}N";

$db_name = "omarbendjelloun_benevoles";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}

?>