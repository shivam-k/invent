<?php
    session_start();//session starts here
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
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

    <script src="jquery-3.3.1.min.js"></script>
    <title>Stock Management</title>
    
</head>

<body>


<?php

require "dbconn.php";
$productsErr = $suppliersErr = $icostErr = $noiErr = $totalErr = $paidErr = $outstandingErr = "";
$products = $suppliers = $icost = $noi = $total = $paid = $outstanding = "";

if(isset($_POST['submit']) == "POST"){
    echo $products = $_POST['products'];
    echo "<br/>";
    echo $suppliers = $_POST['suppliers'];
    echo "<br/>";
    echo $icost = $_POST['icost'];
    echo "<br/>";
    echo $noi = $_POST['noi'];
    echo "<br/>";
    echo $total = $_POST['total'];
    echo "<br/>";
    echo $paid = $_POST['paid'];
    echo "<br/>";
    echo $outstanding = $_POST['outstanding'];
    echo "<br/>";
    echo $date = date('m/d/Y h:i:s a', time());

}

?>

<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E7EBF3">
  <a class="navbar-brand" href="#">Inventory</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
  <div class="row border justify-content-center my-5 py-5 px-3">
    <div class="col border py-4 px-3 shadow p-3 mb-5 rounded">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <h4>Making New Purchase</h4>
         <div class="col border border-primary px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>PRODUCT <span class="text-danger">*</span></label>
            <select class="form-control" name="products">
                <?php
                    $sql = "SELECT * FROM `products`";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        echo "Succ";
                        while($row = $result->fetch_assoc()){
                            $products = $row['products'];
                            echo $products;
                            echo "sheoisgh r";
                            ?>
                                <option><?php echo $row['products'] ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
            <small class="form-text text-danger"><?php echo $productsErr ?></small>
        </div>
        <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>SUPPLIER <span class="text-danger">*</span></label>
            <select class="form-control" name="suppliers">
            <?php
                $sql = "SELECT * FROM `suppliers`";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    echo "Succ";
                    while($row = $result->fetch_assoc()){
                        $suppliers = $row['suppliers'];
                        echo $products;
                        echo "sheoisgh r";
                        ?>
                            <option><?php echo $row['suppliers'] ?></option>
                        <?php
                    }
                }
            ?>
            </select>
            <small class="form-text text-danger"><?php echo $suppliersErr ?></small>
        </div>
        <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>Item/Cost <span class="text-danger">*</span></label>
            <input type="number" value="<?php echo $icost ?>" id="icost" class="form-control" name="icost" placeholder="Your answer" >
            <small class="form-text text-danger"><?php echo $icostErr ?></small>
        </div>
        <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>Number of Items <span class="text-danger">*</span></label>
            <input type="number" value="<?php echo $noi ?>" class="form-control" id="noi" name="noi" placeholder="Your answer" >
            <small class="form-text text-danger"><?php echo $noiErr ?></small>
        </div>
        <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>Total <span class="text-danger">*</span></label>
            <input type="number" value="<?php echo $total ?>" class="form-control" id="total" name="total" placeholder="Your answer" readonly>
            <small class="form-text text-danger"><?php echo $totalErr ?></small>
        </div>
        <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>Paid Amount<span class="text-danger">*</span></label>
            <input type="number" value="<?php echo $paid ?>" class="form-control" id="paid" name="paid" placeholder="Your answer">
            <small class="form-text text-danger"><?php echo $paidErr ?></small>
        </div>
        <div class="col px-4 py-4 my-4 shadow-sm mb-1 rounded" style="background-color: #E7EBF3">
            <label>Outstanding Amount<span class="text-danger">*</span></label>
            <input type="number" value="<?php echo $outstanding ?>" class="form-control" id="outstanding" name="outstanding" placeholder="Your answer" readonly>
            <small class="form-text text-danger"><?php echo $outstandingErr ?></small>
        </div>
        <div class="w-100"></div>
        <div class="col my-4">
            <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">Register</button>
        </div>
    </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $("#noi").change(function(){
      var icost = $('#icost').val();
      var noi = $('#noi').val();
      var total = icost*noi;
        $('#total').val(total);
        // alert(name);
    });
    $("#paid").change(function(){
      var paid = $('#paid').val();
      var total = $('#total').val();
      var outstanding = total - paid;
        $('#outstanding').val(outstanding);
        // alert(name);
    });
});
</script>


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
</body>
</html>