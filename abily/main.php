<?php

require "validate.php";
require "dbconn.php";
$var1 = $var2 = $var3 = $var4 = "";
// ************ Validate File1
$pass1 = $pass2 = "";
$foneErr = $ftwoErr = "";
$location = 'uploads/';
if(isset($_POST['submit'])){
	$foneName = $_FILES['fone']['name'];
	$foneType = $_FILES['fone']['name'];
	$foneSize = $_FILES['fone']['size'];
	$fonetmp_name = $_FILES['fone']['tmp_name'];

	$imageFileOneType = strtolower(pathinfo($location.$foneName, PATHINFO_EXTENSION));

	if(!empty($foneName)){
		// Size restriction
		if($foneSize > 1000000){
			$foneErr = "File Size must not exceed 1MB.";
		}
		// Extention restriction
		if($imageFileOneType != 'jpg' && $imageFileOneType != 'png' && $imageFileOneType != 'jpeg'){
			$foneErr = "'$imageFileOneType' not allowed <br/> Only JPG,JPEG & PNG files are allowed.";
		}
	}
	else{
		$foneErr = "Please choose a file.";
	}

	if($foneErr){
		$pass1 = 0;
	}
	else{
		$pass1 = 1;
	}
}

// ************* Validate File2
if(isset($_POST['submit'])){
	$location = "uploads/";
	$ftwoName = $_FILES['ftwo']['name'];
	$ftwoType = $_FILES['ftwo']['name'];
	$ftwoSize = $_FILES['ftwo']['size'];
	$ftwotmp_name = $_FILES['ftwo']['tmp_name'];

	$imageFileTwoType = strtolower(pathinfo($location.$ftwoName, PATHINFO_EXTENSION));

	if(!empty($ftwoName)){
		// Size restriction
		if($ftwoSize > 1000000){
			$ftwoErr = "File Size must not exceed 1MB.";
		}
		// Extention restriction
		if($imageFileTwoType != 'jpg' && $imageFileTwoType != 'png' && $imageFileTwoType != 'jpeg'){
			$ftwoErr = "'$imageFileTwoType' not allowed <br/> Only JPG,JPEG & PNG files are allowed.";
		}
	}
	else{
		$ftwoErr = "Please choose a file.";
	}

	if($ftwoErr){
		$pass2 = 0;
	}
	else{
		$pass2 = 1;
	}	
}

if($pass1 == 1 && $pass2 == 1){
	$var4 = 1;
}

if($var1==1 && $var2==1 && $var3==1 && $var4==1){
	//insert pinfo
	$sql = "INSERT INTO `pinfo` (fname, lname, mnumber, emailid, dob, disability, aadhar, fincome, gender, address) VALUES ('$fname', '$lname', '$mnumber', '$emailid', '$dob', '$disability', '$aadhar', '$fincome', '$gender', '$address')";
	if($conn->query($sql) === TRUE){
		echo "<br>Thank you....Successfully inserted1.<br>";
	}
	else{
		echo "<br>Error encountered: " . $conn->error;
	}
	//insert eduinfo
	$sql = "INSERT INTO `eduinfo` (tSub, tIns, tPy, tMarks, twSub, twIns, twPy, twMarks, gSub, gIns, gPy, gMarks, pgSub, pgIns, pgPy, pgMarks) VALUES ('$tSub', '$tIns', '$tPy', '$tMarks', '$twSub', '$twIns', '$twPy', '$twMarks', '$gSub', '$gIns', '$gPy', '$gMarks', '$pgSub', '$pgIns', '$pgPy', '$pgMarks')";

	if($conn->query($sql) === TRUE){
		echo "<br>Thank you....Successfully inserted2.<br>";
	}
	else{
		echo "<br>Error encountered: " . $conn->error;
	}

	//insert bankinfo
	$sql = "INSERT INTO `bankinfo` (aholder, bname, anumber, ifsc) VALUES ('$aholder', '$bname', '$anumber', '$ifsc')";
	if($conn->query($sql) === TRUE){
		echo "<br>Thank you....Successfully inserted3.<br>";
	}
	else{
		echo "<br>Error encountered: " . $conn->error;
	}

	//inser file1
	if(move_uploaded_file($fonetmp_name, $location.$aadhar."-".$foneName) && move_uploaded_file($ftwotmp_name, $location.$aadhar."-".$ftwoName)){
		echo "<br>Uploaded.";
	}
	else{
		echo "<br>Error encountered.";
	}
}

?>

