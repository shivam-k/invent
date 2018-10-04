<?php
//**************** Make Connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "abily";
// Create Connection
$conn = new mysqli("$servername", "$username", "$password", "$dbname");
// Check Connection
if($conn->connect_error){
    die("Connection failed." . $conn->connect_error);
}
else {
    // echo "Connected Successfully";
}
//***************** SELECT from database
$sql = "SELECT * from `pinfo` WHERE `aadhar` = '$aadhar'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  //code
}
//**************** Fetch from database
$sql = "SELECT * from `pinfo`";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
    }
}
else{
    echo "0 results";
}
//*************** Insert into database
$sql = "INSERT INTO `pinfo` (fname, lname, mnumber) VALUES ('$fname', '$lname', '$mnumber')";
if($conn->query($sql) === TRUE){
    echo "New records created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//*************** Email Validation
if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)){
    $emailidErr = "Invalid email format"; 
}
// ************* Function for Slashing redundant
function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
// ********* Regex 
function letters_spaces($data){
	if(!preg_match("/^[a-zA-Z ]+$/", $data)){
		return "Only Letters and Spaces are allowed.";
	}
	return "";
}
function numbers_decimal($data){
	if(!preg_match("/^[0-9]*\.?[0-9]*$/", $data)){
		return "Only Numbers and a decimal are allowed.";
	}
	return "";
}
if(isset($_POST["submit"])){}
if(strlen($aadhar) < 12){}
$foneName = $_FILES['fone']['name'];
$imageFileType = strtolower(pathinfo($location.$name, PATHINFO_EXTENSION));
if(move_uploaded_file($tmp_name, $location.$name)){}

?>

 <!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">!!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>

<!-- Alert -->
<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>

<!-- Progress -->
<div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<!-- Dropdowns -->
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<!-- Tables -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
  </tbody>
</table>

<!-- Random -->
<div class="row justify-content-around"></div>
<div class="row justify-content-between offset-md-3"></div>

<!-- Shadow -->
<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>

<!-- JQery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#fname").change(function(){
      var fname = $('#fname').val();
        $('#lname').val(fname);
        // alert(name);
    });
});
</script>