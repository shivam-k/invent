<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="author" content="Shivam Kumar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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

    <title>Scholarship Form</title>
    <style type="text/css">
        h6 {
            color: #17a2b8;
            font-weight: bold;
        }
    </style>
</head>
<body style="background-color: #DDD">
    <?php
        require "dbconn.php";
        require "main.php";
    ?>

<div class="container">
    <div class="row py-5">
        <div class="col-12">
            <div class="row text-white p-sm-5 py-5 px-3 justify-content-center" style="background-color: #6f42c1">
                <h1 class="font-weight-bold">SCHOLARSHIP FORM</h1>
                <p class="text-left">Our Institute offers scholarship to higly meritorious students. Our Institute offers scholarship to higly meritorious students. Our Institute offers scholarship to higly meritorious students. Our Institute offers scholarship to higly meritorious students. Our Institute offers scholarship to higly meritorious students.</p>
            </div>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <div class="row bg-white p-sm-5 py-5 px-3">
                    <h6 class="border-bottom border-info">PERSONAL DETAILS</h6>
                    <div class="w-100"></div>
                    <div class="col-lg-4 p-3">
                        <label>FIRST NAME <span class="text-danger">*</span></label>
                        <input type="text" name="fname" class="form-control" value="<?php echo $fname ?>">
                        <small class="form-text text-danger"><?php echo $fnameErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>LAST NAME <span class="text-danger">*</span></label>
                        <input type="text" name="lname" class="form-control" value="<?php echo $lname ?>">
                        <small class="form-text text-danger"><?php echo $lnameErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>MOBILE NUMBER <span class="text-danger">*</span></label>
                        <input type="texts" maxlength="10" name="mnumber" class="form-control" value="<?php echo $mnumber ?>">
                        <small class="form-text text-danger"><?php echo $mnumberErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>EMAIL ID <span class="text-danger">*</span></label>
                        <input type="email" name="emailid" class="form-control" value="<?php echo $emailid ?>">
                        <small class="form-text text-danger"><?php echo $emailidErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>AADHAR NUMBER <span class="text-danger">*</span></label>
                        <input type="text" maxlength="12" name="aadhar" class="form-control" value="<?php echo $aadhar ?>">
                        <small class="form-text text-danger"><?php echo $aadharErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>DATE OF BIRTH <span class="text-danger">*</span></label>
                        <input type="date" name="dob" class="form-control" value="<?php echo $dob ?>">
                        <small class="form-text text-danger"><?php echo $dobErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>DISABILITY TYPE <span class="text-danger">*</span></label>
                        <select class="form-control" name="disability">
                            <option>Physical</option>
                            <option>Hearing</option>
                            <option>Vision</option>
                            <option>Other</option>                            
                        </select>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>ANNUAL FAMILY INCOME (INR) <span class="text-danger">*</span></label>
                        <input type="number" name="fincome" class="form-control" value="<?php echo $fincome ?>">
                        <small class="form-text text-danger"><?php echo $fincomeErr ?></small>
                    </div>
                    <div class="col-lg-4 p-3 ">
                        <label>GENDER <span class="text-danger">*</span></label>
                        <select class="form-control" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="row bg-light p-sm-5 py-5 px-3">
                    <h6 class="border-bottom border-info">EDUCATIONAL QUALIFICATIONS</h6>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="row my-3 justify-content-between">
                            <div class="col-lg-2">
                                <label>Class</label>
                            </div>
                            <div class="col-lg-2">
                                <label>Subject</label>
                            </div>
                            <div class="col-lg-3">
                                <label>Institute</label>
                            </div>
                            <div class="col-lg-2">
                                <label>Passing Year</label>
                            </div>
                            <div class="col-lg-2">
                                <label>Marks (%)</label>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-between">
                            <div class="col-lg-2">
                                <input type="text" name="tenth" class="form-control" value="10th" readonly>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="tSub" class="form-control" value="10th" readonly>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name="tIns" class="form-control" value="<?php echo $tIns ?>">
                                <small class="form-text text-danger"><?php echo $tInsErr;?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="month" name="tPy" class="form-control" value="<?php echo $tPy ?>">
                                <small class="form-text text-danger"><?php echo $tPyErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="tMarks" class="form-control" value="<?php echo $tMarks ?>">
                                <small class="form-text text-danger"><?php echo $tMarksErr ?></small>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-between">
                            <div class="col-lg-2">
                                <input type="text" name="twelfth" class="form-control" value="12th" readonly>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="twSub" class="form-control" value="<?php echo $twSub ?>">
                                <small class="form-text text-danger"><?php echo $twSubErr ?></small>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name="twIns" class="form-control" value="<?php echo $twIns ?>">
                                <small class="form-text text-danger"><?php echo $twInsErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="month" name="twPy" class="form-control" value="<?php echo $twPy ?>">
                                <small class="form-text text-danger"><?php echo $twPyErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="twMarks" class="form-control" value="<?php echo $twMarks ?>">
                                <small class="form-text text-danger"><?php echo $twMarksErr ?></small>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-between">
                            <div class="col-lg-2">
                                <input type="text" name="g" class="form-control" value="Graduation" readonly>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="gSub" class="form-control" value="<?php echo $gSub ?>">
                                <small class="form-text text-danger"><?php echo $gSubErr ?></small>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name="gIns" class="form-control" value="<?php echo $gIns ?>">
                                <small class="form-text text-danger"><?php echo $gInsErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="month" name="gPy" class="form-control" value="<?php echo $gPy ?>">
                                <small class="form-text text-danger"><?php echo $gPyErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="gMarks" class="form-control" value="<?php echo $gMarks ?>">
                                <small class="form-text text-danger"><?php echo $gMarksErr ?></small>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-between">
                            <div class="col-lg-2">
                                <input type="text" name="pg" class="form-control" value="Post Graduation" readonly>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="pgSub" class="form-control" value="<?php echo $pgSub ?>">
                                <small class="form-text text-danger"><?php echo $pgSubErr ?></small>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name="pgIns" class="form-control" value="<?php echo $pgIns ?>">
                                <small class="form-text text-danger"><?php echo $pgInsErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="month" name="pgPy" class="form-control" value="<?php echo $pgPy ?>">
                                <small class="form-text text-danger"><?php echo $pgPyErr ?></small>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="pgMarks" class="form-control" value="<?php echo $pgMarks ?>">
                                <small class="form-text text-danger"><?php echo $pgMarksErr ?></small>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of EDUCATIONAL QUALIFICATIONS -->
                <div class="row bg-white p-sm-5 py-5 px-3">
                    <h6 class="border-bottom border-info">BANK DETAILS</h6>
                    <div class="w-100"></div>
                    <div class="col-lg-3 p-3">
                        <label>ACCOUNT HOLDER <span class="text-danger">*</span></label>
                        <input type="text" name="aholder" class="form-control" value="<?php echo $aholder ?>">
                        <small class="form-text text-danger"><?php echo $aholderErr ?></small>
                    </div>
                    <div class="col-lg-3 p-3">
                        <label>BRANCH NAME <span class="text-danger">*</span></label>
                        <input type="text" name="bname" class="form-control" value="<?php echo $bname ?>">
                        <small class="form-text text-danger"><?php echo $bnameErr ?></small>
                    </div>
                    <div class="col-lg-3 p-3">
                        <label>ACCOUNT NUMBER <span class="text-danger">*</span></label>
                        <input type="text" name="anumber" class="form-control" value="<?php echo $anumber ?>">
                        <small class="form-text text-danger"><?php echo $anumberErr ?></small>
                    </div>
                    <div class="col-lg-3 p-3">
                        <label>IFSC CODE <span class="text-danger">*</span></label>
                        <input type="text" name="ifsc" class="form-control" value="<?php echo $ifsc ?>">
                        <small class="form-text text-danger"><?php echo $ifscErr ?></small>
                    </div>
                </div>
                <div class="row bg-light p-sm-5 py-5 px-3">
                    <h6 class="border-bottom border-info">DOCUMENTS</h6>
                    <div class="w-100"></div>
                    <div class="col">
                        <div class="row no-gutters justify-content-between">
                            <div class="col-lg-5">
                                <ul class="tex-left">
                                    <li class="">Disability Certificate <span class="text-danger">[Max: 1MB]</span></li>
                                    <li class="">Scanned Passport Size Photo <span class="text-danger">[Max: 1MB]</span></li>
                                    <li>[JPG, JPEG, PNG extensions only.]</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 p-3 bg-white">
                                <label>DISABILITY CERTIFICATE <span class="text-danger">*</span></label>
                                <input type="file" name="fone" class="form-control-file" value="">
                                <small class="form-text text-danger"><?php echo $foneErr?></small>
                            </div>
                            <div class="col-lg-3 p-3 bg-white">
                                <label>SCANNED PHOTOGRAPH <span class="text-danger">*</span></label>
                                <input type="file" name="ftwo" class="form-control-file" value="">
                                <small class="form-text text-danger"><?php echo $ftwoErr?></small>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                </div>
                <div class="row bg-white p-sm-5 py-5 justify-content-center">
                    <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js.map"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js.map"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js.map"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js.map"></script>
</body>
</html>
