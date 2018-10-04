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

    <title>Register</title>

    <style type="text/css">
        input::-webkit-input-placeholder {
            font-size: 12px;
            }
            #example2 {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        small{
            font-weight: bold;
        }
    </style>

</head>

<body>

<!-- PHP Codes -->
<?php

require "register-back.php";

?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 border border-primary shadow-sm mb-5 bg-white rounded"  >

            <!-- Header -->
            <div class="row text-white pt-5 pb-4 px-5" style="background-color: #6f42c1">
                <h4 class="text-center">REGISTER</h4>
            </div>
            <!-- Form -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                 <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>FIRST NAME <span class="text-danger">*</span></label>
                    <input type="text" value="<?php echo $fname ?>" class="form-control" name="fname" placeholder="Your answer">
                    <small class="form-text text-danger"><?php echo $fnameErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>LAST NAME <span class="text-danger">*</span></label>
                    <input type="text" value="<?php echo $lname ?>" class="form-control" name="lname" placeholder="Your answer" >
                    <small class="form-text text-danger"><?php echo $lnameErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>MOBILE NUMBER <span class="text-danger">*</span></label>
                    <input type="number" maxlength="10" value="<?php echo $mnumber ?>" class="form-control" name="mnumber" placeholder="Your answer" >
                    <small class="form-text text-danger"><?php echo $mnumberErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>USER NAME <span class="text-danger">*</span></label>
                    <input type="text" name="username" value="<?php echo $username ?>" class="form-control" name="username" placeholder="Your answer" >
                    <small class="form-text text-danger"><?php echo $usernameErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>EMAIL ID <span class="text-danger">*</span></label>
                    <input type="email" value="<?php echo $emailid ?>" class="form-control" name="emailid" placeholder="Your answer" >
                    <small class="form-text text-danger"><?php echo $emailidErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>DATE OF BIRTH <span class="text-danger">*</span></label>
                    <input type="date" value="<?php echo $dob ?>" class="form-control" name="dob" placeholder="Your answer" >
                    <small class="form-text text-danger"><?php echo $dobErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>PASSWORD <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Your answer" >
                    <small class="form-text text-danger"><?php echo $passwordErr ?></small>
                </div>
                <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
                    <label>CONFIRM PASSWORD <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Your answer" >
                </div>
                <div class="w-100"></div>
                <div class="col my-4">
                    <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">Register</button>
                </div>
                <p>Already have a login id? <a href="login.php">Login</a></p>
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
