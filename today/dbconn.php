<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "invent";

// Create Connection
$conn = new mysqli("$servername", "$username", "$password", "$dbname");

// Check Connection
if($conn->connect_error){
    die("Connection failed." . $conn->connect_error);
}
else {
    // echo "Connected Successfully";
}


?>
