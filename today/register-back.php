<?php

require "dbconn.php";

$check = 1;

$fname = $lname = $mnumber = $emailid = $username = $dob = "";

$fnameErr = $lnameErr = $mnumberErr = $usernameErr = $emailidErr = $dobErr = $passwordErr = "";
if(isset($_POST['submit']) == "POST"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mnumber = $_POST['mnumber'];
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
   if(!empty($fname)) {
        $fname = test_input($_POST['fname']);
        $fnameErr = letters($fname);
    }
    else{
        $fnameErr = "This field is required.";
    }
    if(!empty($lname)) {
        $lname = test_input($_POST['lname']);
        $lnameErr = letters($lname);
    }
    else{
        $lnameErr = "This field is required.";
    }
    if(!empty($mnumber)){
        $mnumber = test_input($_POST['mnumber']);
        $mnumberErr = numbers($mnumber);
        if(strlen($mnumber) < 10){
            $mnumberErr = "Mobile Number must be 10 digits long.";
        }
        if(strlen($mnumber) < 10){
            $mnumberErr = "Mobile Number must be 10 digits long.";
        }
        if(strlen($mnumber) > 10){
            $mnumberErr = "Mobile Number must not be more than 10 digits long.";
        }
    }
    else{
        $mnumberErr = "This field is required.";
    }
    if(!empty($username)){
        $usernameid = test_input($_POST['username']);
        $usernameErr =  letters_numbers($username);
        $sql = "SELECT * from `pinfo` WHERE `username` = '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $usernameErr = "Username already exists. Try another";
            $check = 0;
        }
    }
    else{
        $usernameErr = "This field is required.";
    }
    if(!empty($emailid)){
        $emailid = test_input($emailid);
        //check the validity of email Id
        if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) {
            $emailidErr = "Invalid email format"; 
        }
        $sql = "SELECT * FROM `pinfo` WHERE `emailid` = '$emailid'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $emailidErr = "This emailId already exists in database.";
        }
    }
    else{
        $emailidErr = "This field is required.";
    }
    if(!empty($dob)){
        $dob = test_input($_POST['dob']);
    }
    else{
        $dobErr = "This field is required.";
    }
    if(!empty($password)){
        $password = test_input($_POST['password']);
        $passwordErr = strength_password($password);
    }
    else{
        $passwordErr = "This field is required.";
    }
    if(!empty($cpassword)){
        $cpassword = test_input($_POST['cpassword']);
    }
    if($fnameErr || $lnameErr || $mnumberErr || $usernameErr || $emailidErr || $dobErr || $passwordErr){
        $check1 = 0;
    }
    else{
        if($password != $cpassword){
            $check1 = 0;
            $password = $cpassword = "";
            $passwordErr = "Both passwords do not match";
        }
        else{

            $check1 = 1;
        }
    }



}

// Function for Form data Validation
function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function letters($data){
    if(!preg_match("/^[a-zA-Z]+$/", $data)){
        return "Only Letters are allowed.";
    }
    return "";
}
function letters_numbers($data){
    if(!preg_match("/^[a-zA-Z0-9]+$/", $data)){
        return "Only Letters and numbers are allowed.";
    }
    return "";
}
function letters_spaces($data){
    if(!preg_match("/^[a-zA-Z ]+$/", $data)){
        return "Only Letters and Spaces are allowed.";
    }
    return "";
}
function numbers($data){
    if(!preg_match("/^[0-9]+$/", $data)){
        return "Only Numbers are allowed.";
    }
    return "";
}
function numbers_decimal($data){
    if(!preg_match("/^[0-9]*\.?[0-9]*$/", $data)){
        return "Only Numbers and a decimal are allowed.";
    }
    return "";
}
function strength_password($pwd){
    if (strlen($pwd) < 8) {
        return "Password too short!";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        return "Password must include at least one number!";
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        return "Password must include at least one letter!";
    }     

    return "";
}

if($_SERVER["REQUEST_METHOD"] == "POST" && $check1!=0){
    $sql = "INSERT INTO `pinfo` (fname, lname, mnumber, username, emailid, dob, password) VALUES ('$fname', '$lname', '$mnumber', '$username', '$emailid', '$dob', '$password')";
    if($conn->query($sql) === TRUE){
        // echo "New records created successfully";
        echo "<script>alert('Successfully Registered!')</script>";
        header("Location: login.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>