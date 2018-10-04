<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "abily";

$conn = new mysqli("$servername", "$username", "$password", "$dbname");

//Check Connection
if($conn->connect_error){
	die("Connection failed." . $conn->connect_error);
}
else{
	// echo "Connected Successfully.";
}
	
?>