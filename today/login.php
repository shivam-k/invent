<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Shivam Kumar">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css.map" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.map" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css.map" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css.map" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css.map" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css.map" type="text/css" >

    <title>Login</title>

    <style type="text/css">
        input::-webkit-input-placeholder {
            font-size: 12px;
            }
            #example2 {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        small {
            font-weight: bold;
        }
    </style>

</head>

<body>

<!-- PHP Codes -->

<?php

require "dbconn.php";

$username = "";
$normalErr = "";

$usernameErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username)){
        $usernameErr = "This field is required";
    }
    if(empty($password)){
        $passwordErr = "This field is required";
    }
    if(!empty($username) && !empty($password))
    {
        $sql = "SELECT * from `pinfo` WHERE `username` = '$username' AND `password` = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo "Successfully Loged In.";
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }
        else{
            $normalErr = "Wrong Combination!";
        }
    }
}

?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 border border-primary"  >

            <!-- Header -->
            <div class="row text-white pt-5 pb-4 px-5" style="background-color: #6f42c1">
                <h4 class="text-center">LOGIN</h4>
            </div>
            <!-- Form -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                <br />
                <small class="form-text font-weight-bold text-center text-danger"><?php echo $normalErr ?></small>
                 <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" value="<?php echo $username ?>" class="form-control" name="username" placeholder="Your answer">
                    <small class="form-text text-danger"><?php echo $usernameErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Your answer">
                    <small class="form-text text-danger"><?php echo $passwordErr ?></small>
                </div>

                <div class="col my-4">
                    <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">Login</button>
                </div>
                
                <p>Don't have a login id? <a href="register.php">Register</a></p>
                <br />
            </form>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js.map"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js.map"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js.map"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js.map"></script>
</html>
