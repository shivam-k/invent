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

    <title>Stock Management</title>
</head>

<body>

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
  <div class="row justify-content-around my-5 py-5 px-3 shadow p-3 mb-5 rounded" style="background-color: #E7EBF3">
      <div class="col-md-auto">
          <h4 class="text-center">SUPPLIERS</h4>
          <ul class="list-group">
            <li class="list-group-item"><a href="new-supplier.php">New Supplier</a></li>
            <li class="list-group-item"><a href="">View Suppliers</a></li>
          </ul>
      </div>
      <div class="col-md-auto">
          <h4 class="text-center">PURCHASES</h4>
          <ul class="list-group">
            <li class="list-group-item"><a href="new-purchase.php">New Purchase</a></li>
            <li class="list-group-item"><a href="">View Purchases</a></li>
          </ul>
      </div>
      <div class="col-md-auto">
          <h4 class="text-center">INVENTORY</h4>
          <ul class="list-group">
            <li class="list-group-item"><a href="">View Stock</a></li>
            <li class="list-group-item"><a href="">New Product</a></li>
            <li class="list-group-item"><a href="">View Products</a></li>
          </ul>
      </div>
      <div class="col-md-auto">
          <h4 class="text-center">SALES</h4>
          <ul class="list-group">
            <li class="list-group-item"><a href="">New Sale</a></li>
            <li class="list-group-item"><a href="">View Sales</a></li>
          </ul>
      </div>
      <div class="col-md-auto">
          <h4 class="text-center">CUSTOMERS</h4>
          <ul class="list-group">
            <li class="list-group-item"><a href="">New Customer</a></li>
            <li class="list-group-item"><a href="">View Customers</a></li>
          </ul>
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
</body>
</html>