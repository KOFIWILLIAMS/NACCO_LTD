<?php 
session_start();
$server = "localhost";
$user = "root";
$password = "";
$database = "nacco_ltd";

$conn = mysqli_connect($server, $user, $password, $database) or die (mysqli_connect_error()); 

// Check connection
//if ($conn) {
	
//echo "connect to MySQLis is cool "; 

//} else{ echo "connect to MySQLis not cool";}


?>
