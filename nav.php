<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
?>

<head>
<?php

?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ผักสวนครัวป้าเอียด</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">ผักสวนครัวป้าเอียด</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
            <input class="form-control mr-sm-1" type="search" placeholder="ค้นหา" aria-label="Search" name="search"
              required>
            <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"
                aria-hidden="true"></i></button>
            &nbsp;
          </form>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">หน้าแรก
            </a>
          </li>

          <?php if(empty($_SESSION['uname'])){?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">สมัครสมาชิก</a>
          </li>
          <?php }else{?>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">ออกจากระบบ</a>
          </li>
          <?php }?>

          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        </ul>
      </div>
    </div>
  </nav>

</body>
