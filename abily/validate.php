<?php
// ****************Validation for pinfo
$val1 = $val2 = $val3 = $val4 = "";
$fname = $lname = $mnumber = $emailid = $emailid = $aadhar = $dob = $disability = $fincome = $gender = "";
$fnameErr = $lnameErr = $mnumberErr = $emailidErr = $aadharErr = $dobErr = $disabilityErr = $fincomeErr = $genderErr = "";
if(isset($_POST["submit"])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mnumber = $_POST['mnumber'];
	$emailid = $_POST['emailid'];
	$aadhar = $_POST['aadhar'];
	$dob = $_POST['dob'];
	$disability = $_POST['disability'];
	$fincome = $_POST['fincome'];
	$gender = $_POST['gender'];

	if(!empty($fname)){
		$fname = test_input($fname);
		$fnameErr = letters($fname);
	}
	else{
		$fnameErr = "This field is required.";
	}
	if(!empty($lname)){
		$lname = test_input($lname);
		$lnameErr = letters($lname);	
	}
	else{
		$lnameErr = "This field is required.";
	}
	if(!empty($mnumber)){
		$mnumber = test_input($mnumber);
		$mnumberErr = numbers($mnumber);
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
	if(!empty($aadhar)){
		$aadhar = test_input($aadhar);
		$aadharErr = numbers($aadhar);
		$sql = "SELECT * FROM `pinfo` WHERE `aadhar` = '$aadhar'";
    	$result = $conn->query($sql);
    	if($result->num_rows > 0){
    		$aadharErr = "This Aadhar number already exists in database.";
    	}
    	if(strlen($aadhar) < 12){
			$aadharErr = "Aadhar Number must be 12 digits long.";
		}
	}
	else{
		$aadharErr = "This field is required.";
	}
	if(!empty($dob)){
		$dob = test_input($dob);
	}
	else{
		$dobErr = "This field is required.";
	}
	if(!empty($fincome)){
		$fincome = test_input($fincome);
	}
	else{
		$fincomeErr = "This field is required.";
	}
	if($fnameErr || $lnameErr || $mnumberErr || $emailidErr || $aadharErr || $dobErr || $disabilityErr || $fincomeErr || $genderErr){
		$var1 = 0;
	}
	else{
		$var1 = 1;
	}
}

// *************Validation for eduinfo
$tInsErr = $tPyErr = $tMarksErr = "";
$twSubErr = $twInsErr = $twPyErr = $twMarksErr = "";
$gSubErr = $gInsErr = $gPyErr = $gMarksErr = "";
$pgSubErr = $pgInsErr = $pgPyErr = $pgMarksErr = "";

if(isset($_POST["submit"])){
	$tSub = $_POST["tSub"];
	$tIns = $_POST["tIns"];
	$tPy = $_POST["tPy"];
	$tMarks = $_POST["tMarks"];

	$twSub = $_POST['twSub'];
	$twIns = $_POST['twIns'];
	$twPy = $_POST['twPy'];
	$twMarks = $_POST['twMarks'];

	$gSub = $_POST['gSub'];
	$gIns = $_POST['gIns'];
	$gPy = $_POST['gPy'];
	$gMarks = $_POST['gMarks'];

	$pgSub = $_POST['pgSub'];
	$pgIns = $_POST['pgIns'];
	$pgPy = $_POST['pgPy'];
	$pgMarks = $_POST['pgMarks'];

	//tenth
	if(!empty($tIns)){
		$tIns = test_input($tIns);
		$tInsErr = letters_spaces($tIns);
	}
	else{
		$tInsErr = "This field is required.";
	}
	if(!empty($tPy)){
		$tPy = test_input($tPy);
	}
	else{
		$tPyErr = "This field is required.";
	}
	if(!empty($tMarks)){
		$tMarks = test_input($tMarks);
		$tMarksErr = numbers_decimal($tMarks);
	}
	else{
		$tMarksErr = "This field is required.";
	}
	//twelfth
	if(!empty($twSub)){
		$twSub = test_input($twSub);
		$twSubErr = letters_spaces($twSub);
	}
	else{
		$twSubErr = "This field is required.";
	}
	if(!empty($twIns)){
		$twIns = test_input($twIns);
		$twInsErr = letters_spaces($twIns);
	}
	else{
		$twInsErr = "This field is required.";
	}
	if(!empty($twPy)){
		$twPy = test_input($twPy);
	}
	else{
		$twPyErr = "This field is required.";
	}
	if(!empty($twMarks)){
		$twMarks = test_input($twMarks);
		$twMarksErr = numbers_decimal($twMarks);
	}
	else{
		$twMarksErr = "This field is required.";
	}
	//grad
	if(!empty($gSub)){
		$gSub = test_input($gSub);
		$gSubErr = letters_spaces($gSub);
	}
	else{
		$gSubErr = "This field is required.";
	}
	if(!empty($gIns)){
		$gIns = test_input($gIns);
		$gInsErr = letters_spaces($gIns);
	}
	else{
		$gInsErr = "This field is required.";
	}
	if(!empty($gPy)){
		$gPy = test_input($gPy);
	}
	else{
		$gPyErr = "This field is required.";
	}
	if(!empty($gMarks)){
		$gMarks = test_input($gMarks);
		$gMarksErr = numbers_decimal($gMarks);
	}
	else{
		$gMarksErr = "This field is required.";
	}
	//pg
	if(!empty($pgSub)){
		$pgSub = test_input($pgSub);
		$pgSubErr = letters_spaces($pgSub);
	}
	else{
		$pgSubErr = "This field is required.";
	}
	if(!empty($pgIns)){
		$pgIns = test_input($pgIns);
		$pgInsErr = letters_spaces($pgIns);
	}
	else{
		$pgInsErr = "This field is required.";
	}
	if(!empty($pgPy)){
		$pgPy = test_input($pgPy);
	}
	else{
		$pgPyErr = "This field is required.";
	}
	if(!empty($pgMarks)){
		$pgMarks = test_input($pgMarks);
		$pgMarksErr = numbers_decimal($pgMarks);
	}
	else{
		$pgMarksErr = "This field is required.";
	}
	if($tInsErr || $tPyErr || $tMarksErr || $twSubErr || $twInsErr || $twPyErr || $twMarksErr || $gSubErr || $gInsErr || $gPyErr || $gMarksErr || $pgSubErr || $pgInsErr || $pgPyErr || $pgMarksErr){
		$var2 = 0;	
	}
	else{
		$var2 = 1;
	}
	echo "Var2 = ". $var2;

}
// ****************Validation for bankinfo
$aholderErr = $bnameErr = $anumberErr = $ifscErr = "";
if(isset($_POST["submit"])){
	$aholder = $_POST['aholder'];
	$bname = $_POST['bname'];
	$anumber = $_POST['anumber'];
	$ifsc = $_POST['ifsc'];
	
	if(!empty($aholder)){
		$aholder = test_input($aholder);
		$aholderErr = letters_spaces($aholder);
	}
	else{
		$aholderErr = "This field is required.";
	}
	if(!empty($bname)){
		$bname = test_input($bname);
		$bnameErr = letters_spaces($bname);
	}
	else{
		$bnameErr = "This field is required.";
	}
	if(!empty($anumber)){
		$anumber = test_input($anumber);
		$anumberErr = numbers($anumber);
	}
	else{
		$anumberErr = "This field is required.";
	}
	if(!empty($ifsc)){
		$ifsc = test_input($ifsc);
		$ifscErr = letters_numbers($ifsc);
	}
	else{
		$ifscErr = "This field is required.";
	}
	if($aholderErr || $bnameErr || $anumberErr || $ifscErr){
		$var3 = 0;
	}
	else{
		$var3 = 1;
	}
	echo "Var3 = " . $var3;
}


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


?>