<?php
    require "../dbconn.php";
    require "sales-back.php";
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
    <link rel="kstylesheet" href="bootstrap/css/bootstrap-reboot.min.css" type="text/css" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css.map" type="text/css" >

    <title>Stock Management</title>
</head>

<body>

<?php
  $normalErr = "";
?>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E7EBF3">
  <a class="navbar-brand" href="#">Stock</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="purchases.php">Purchases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br />

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
<div class="container">
  <div class="row m-5 justify-content-center">
    <div class="col">
      <h4 class="py-2 text-center" style="background-color: #E7EBF3">SALES</h4>
      <div class="row">
        <div class="col-2"><b>Date: </b></div>
        <div class="col-8">
           <!-- <input name="indate" type="text" > -->
           <input name="indate" class="form-control" placeholder="Click to Choose Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
        </div>
        <div class="w-100"></div>
        <br />
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Products</th>
                <th scope="col">SP</th>
                <th scope="col">Inventory</th>
                <th scope="col">No Sold</th>
                <th scope="col">Purchasing Items</th>
                <th scope="col">Total</th>
                <th scope="col">Paid</th>
                <th scope="col">Outstanding</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM `usr_sale` WHERE `date` = '$indate'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    $date = $row['date'];
                    ?> <tr> <?php
                    ?> <td><?php echo $row['id']; ?></td> <?php
                    ?> <td><?php echo $row['products']; ?></td> <?php
                    ?> <td><?php echo $row['SP']; ?></td> <?php
                    ?> <td><?php echo $row['inventory']; ?></td> <?php
                    ?> <td><?php echo $row['nosold']; ?></td> <?php
                    ?> <td><?php echo $row['pitems']; ?></td> <?php
                    ?> <td><?php echo $row['total']; ?></td> <?php
                    ?> <td><?php echo $row['paid']; ?></td> <?php
                    ?> <td><?php echo $row['outstanding']; ?></td> <?php
                    ?> </tr> <?php
                  }
                }
            ?>
            </tbody>
          </table>
          <div class="col text-danger font-weight-bold">
            <?php 
              $tdate = date('Y-m-d');
              if(empty($indate)){
                echo "You dont' have anything to show....Choose today's date for new entry or past dates for making changes.";
              }
              else if($indate == $tdate){
                echo "We have got your request.";
              }

            ?>
          </div> <br />
        </div>
        <div class="w-100"></div>
        <div class="col text-center">
          <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">Make Change</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

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