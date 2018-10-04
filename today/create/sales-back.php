
<?php

require "../dbconn.php";

$indate = "";
$dvalue = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$indate = $_POST['indate'];
}

?>